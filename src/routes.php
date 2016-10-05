<?php

function ordinal_suffix($num){
	$num = $num % 100; // protect against large numbers
	if($num < 11 || $num > 13){
		switch($num % 10){
			case 1: return 'st';
			case 2: return 'nd';
			case 3: return 'rd';
		}
	}
	return 'th';
}

function getDataFromWebService($url) {	
	$proxy = '141.211.153.22:3128';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_PROXY, $proxy);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// Disable SSL verification
	//curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

	$info = json_decode(curl_exec($ch));
	curl_close($ch);
	return $info;
}

function sendDataToWebService($url, $myvars) {	
	$ch = curl_init( $url );
	curl_setopt( $ch, CURLOPT_POST, 1);
	curl_setopt( $ch, CURLOPT_POSTFIELDS, $myvars);
	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt( $ch, CURLOPT_HEADER, 0);
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
	
	$response = curl_exec( $ch );	
	return $response;
}
/*
$app->post('/paypalcallback', function ($request, $response, $args) {
	
	$data = $request->getParsedBody();
	$PNREF = filter_var($data['PNREF'], FILTER_SANITIZE_STRING); //PayFlow transaction number -->
	$RESULT = filter_var($data['RESULT'], FILTER_SANITIZE_STRING);
	$RESPMSG = filter_var($data['RESPMSG'], FILTER_SANITIZE_STRING);
	$AMOUNT = filter_var($data['AMOUNT'], FILTER_SANITIZE_STRING);
	$CUSTID = filter_var($data['CUSTID'], FILTER_SANITIZE_STRING); //SI confirmation number -->
	$NAME = filter_var($data['NAME'], FILTER_SANITIZE_STRING);
	$EMAIL = filter_var($data['EMAIL'], FILTER_SANITIZE_STRING);
	$PHONE = filter_var($data['PHONE'], FILTER_SANITIZE_STRING);
	$ADDRESS = filter_var($data['ADDRESS'], FILTER_SANITIZE_STRING);
	$CITY = filter_var($data['CITY'], FILTER_SANITIZE_STRING);
	$STATE = filter_var($data['STATE'], FILTER_SANITIZE_STRING);
	$ZIP = filter_var($data['ZIP'], FILTER_SANITIZE_STRING);
	$COUNTRY = filter_var($data['COUNTRY'], FILTER_SANITIZE_STRING);
	
	$CADDRESS = sprintf('%1$s %2$s, %3$s %4$s %5$s', $ADDRESS, $CITY, $STATE, $ZIP, $COUNTRY);
			
	if 	($RESULT == "0" && $RESPMSG == "Approved") {
		//update registation with payment info from PayFlow, once payment has been posted --->
		
		$url = 'http://projects.isr.umich.edu/siapp_pay/registration/update';
		$myvars = 'PNREF=' . $PNREF . '&NAME=' . $NAME . '&EMAIL=' . $EMAIL . '&PHONE=' . $PHONE . '&ADDRESS=' . $ADDRESS . '&CITY=' . $CITY . '&STATE=' . $STATE . '&ZIP=' . $ZIP . '&COUNTRY=' . $COUNTRY . '&CUSTID=' . $CUSTID;
				
		$response = sendDataToWebService($url, $myvars);
		
		$url = "http://projects.isr.umich.edu/siapp_pay/reginfo_foremail/$CUSTID";
		$regInfo = getDataFromWebService($url);
		
		$url = "http://projects.isr.umich.edu/siapp_pay/courses";
		$courseInfo = getDataFromWebService($url);
		
		$courseSignedUpFor = array();
		
		foreach ( $regInfo as $key => $value ) {
			foreach ( $courseInfo as $course ) {
				//is registered or not?
				if ($course->course_id == $key && $value == 1) {
					$courseSignedUpFor[] = $course;
				}
			}
		}		
		
		$address = sprintf('%1$s %2$s %3$s', $regInfo->address1, $regInfo->address2, $regInfo->address3);
		
		//Send Email confirmation to SI --->		
		$this->emailguy->sendEmail(
				$this->logger,
				$regInfo->CurrentYear, $regInfo->Confirm_Num, $PNREF,
				$regInfo->title, $regInfo->fname, $regInfo->mname, $regInfo->lname,
				$address, $regInfo->city, $regInfo->StateName, $regInfo->zip, $regInfo->CountryName, $regInfo->hphone, $regInfo->email,				
				
				$NAME, $CADDRESS, $PHONE, $EMAIL, $AMOUNT, 
				$courseSignedUpFor);
	}
	
	$url = 'http://projects.isr.umich.edu/siapp_pay/webpay/new';
	$myvars = 'PNREF=' . $PNREF . '&RESULT=' . $RESULT . '&RESPMSG=' . $RESPMSG . '&AMOUNT=' . $AMOUNT . '&CUSTID=' . $CUSTID;
	
	$response = sendDataToWebService($url, $myvars);
	
	$this->logger->addInfo("done with all.");

	exit;
});*/

$app->post('/payflow', function ($request, $response, $args) {	
	//Always get app info
	$url = "http://projects.isr.umich.edu/siapp_pay/currentappinfo";
	$appInfo = getDataFromWebService($url);
		
	//now get reg info	
	$data = $request->getParsedBody();
	$OnlineID = filter_var($data['OnlineID'], FILTER_SANITIZE_STRING);
	
	$url = "http://projects.isr.umich.edu/siapp_pay/reginfo/$OnlineID";
	$regInfo = getDataFromWebService($url);
			
	//<!--- USER2 variable is used for paypal user to return --->
	//<input type="hidden"	name="USER2" 	value="index.cfm" />
	
	//Revenue short code --->
	$COMMENT1 = $appInfo->revenue_account_shortcode;
	
	$sName = sprintf('%1$s %2$s %3$s', $regInfo->fname, $regInfo->mname, $regInfo->lname); 
	$sCourseDescr = sprintf('%1$s Summer Institute Course/Workshop | Confirmation #: %2$s | Applicant Name: %3$s', $appInfo->current_app_year, $regInfo->Confirm_Num, $sName);
	
	//Additional info to be display in billing report i.e: name, descr, etc.	 --->
	$COMMENT2 = $sCourseDescr;
	$CUSTID = $regInfo->Confirm_Num;
	$AMOUNT = $regInfo->PayAmount;
	
	$DESCRIPTION = $sCourseDescr;
	$NAME = $sName;	
	$ADDRESS = $regInfo->address1;
	$CITY = $regInfo->city;
	
	$thestate = ( strlen($regInfo->state) > 2 ) ? $regInfo->StateName : $regInfo->state; 
	
	$STATE = $thestate;
	$ZIP = $regInfo->zip;
	$COUNTRY = $regInfo->country;
	$PHONE = $regInfo->hphone;
	$EMAIL = $regInfo->email;
	
	/*
	$this->logger->addInfo("Online ID: " . $OnlineID);
	$this->logger->addInfo("Comment 1: " . $COMMENT1);
	$this->logger->addInfo("Comment 2: " . $COMMENT2);
	$this->logger->addInfo("Cust id before: " . $CUSTID);	
	$this->logger->addInfo("Amount: " . $AMOUNT);
	$this->logger->addInfo("Description: " . $DESCRIPTION);
	$this->logger->addInfo("Name: " . $NAME);
	$this->logger->addInfo("Address: " . $ADDRESS);
	$this->logger->addInfo("City: " . $CITY);
	$this->logger->addInfo("State: " . $STATE);
	$this->logger->addInfo("Zip: " . $ZIP);
	$this->logger->addInfo("Country: " . $COUNTRY);
	$this->logger->addInfo("Phone: " . $PHONE);
	$this->logger->addInfo("Email: " . $EMAIL);
	*/
		
	return $this->view->render($response, 'payflow.twig', 
				array(
				'COMMENT1' => $COMMENT1,
				'COMMENT2' => $COMMENT2,
				'CUSTID' => $CUSTID,
				'AMOUNT' => $AMOUNT,
				'DESCRIPTION' => $DESCRIPTION,
				'NAME' => $NAME,
				'ADDRESS' => $ADDRESS,
				'CITY' => $CITY,
				'STATE' => $STATE,
				'ZIP' => $ZIP,
				'COUNTRY' => $COUNTRY,
				'PHONE' => $PHONE,
				'EMAIL' => $EMAIL)
			);
});



$app->get('/payment', function ($request, $response, $args) {
	//Always get app info
	$url = "http://projects.isr.umich.edu/siapp_pay/currentappinfo";
	$appInfo = getDataFromWebService($url);
	
	$currentYear = (int) $appInfo->current_app_year;
	$currentYear = $currentYear - 1947;	
	$currentYearDisplay = $currentYear . ordinal_suffix($currentYear);

	return $this->view->render($response, 'index.twig', array( 
						'current_app_year' => $appInfo->current_app_year, 
						'current_app_dates' => $appInfo->current_app_dates,
						'currentYearDisplay' => $currentYearDisplay
	));
});


$app->post('/search', function ($request, $response, $args) {
	$this->logger->addInfo("Searching");
	$data = $request->getParsedBody();
	
	$ConfirmNum = filter_var($data['ConfirmNum'], FILTER_SANITIZE_STRING);
	$LastName = filter_var($data['LastName'], FILTER_SANITIZE_STRING);

	//Always get app info 
	$url = "http://projects.isr.umich.edu/siapp_pay/currentappinfo";
	$appInfo = getDataFromWebService($url);	
	
	$currentYear = (int) $appInfo->current_app_year;
	
	$this->logger->addInfo("The year is-" . $currentYear);
	
	$currentYear = $currentYear - 1947;
	$currentYearDisplay = $currentYear . ordinal_suffix($currentYear);
	
	//now get user info
	$url = "http://projects.isr.umich.edu/siapp_pay/isvalid/$ConfirmNum/$LastName";
	$userInfo = getDataFromWebService($url);	
	
	if (isset($userInfo->notfound)) {
		return $this->view->render($response, 'index.twig', array( 
							'current_app_year' => $appInfo->current_app_year, 
							'current_app_dates' => $appInfo->current_app_dates,
							'currentYearDisplay' => $currentYearDisplay,
							'error' => 'We were not able to find your registration information based on your entry. Please check your entry and try again.'
		));
	}
	
	//also get course info
	$url = "http://projects.isr.umich.edu/siapp_pay/courses";
	$courseInfo = getDataFromWebService($url);	
	
	$courseSignedUpFor = array();
	
	foreach ( $userInfo as $key => $value ) {
		foreach ( $courseInfo as $course ) {
			//is registered or not?
			if ($course->course_id == $key && $value == 1) {
				$courseSignedUpFor[] = $course;
			}
		}		
	}

	return $this->view->render($response, 'payment.twig', array(
			'current_app_year' => $appInfo->current_app_year,
			'current_app_dates' => $appInfo->current_app_dates,
			'currentYearDisplay' => $currentYearDisplay,
			'Confirm_Num' => $ConfirmNum,
			'userInfo' => $userInfo,
			'courseSignedUpFor' => $courseSignedUpFor
	));
});