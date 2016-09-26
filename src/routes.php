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

$app->get('/payment', function ($request, $response, $args) {
	$appInfo = json_decode(file_get_contents("http://isr-wp.isr.umich.edu/siapp_pay/currentappinfo"));

	//Always get app info
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
	$data = $request->getParsedBody();
	
	$ConfirmNum = filter_var($data['ConfirmNum'], FILTER_SANITIZE_STRING);
	$LastName = filter_var($data['LastName'], FILTER_SANITIZE_STRING);

	//Always get app info 
	$appInfo = json_decode(file_get_contents("http://isr-wp.isr.umich.edu/siapp_pay/currentappinfo"));
	
	$currentYear = (int) $appInfo->current_app_year;
	$currentYear = $currentYear - 1947;
	$currentYearDisplay = $currentYear . ordinal_suffix($currentYear);
	
	//now get user info
	$userInfo = json_decode(file_get_contents("http://isr-wp.isr.umich.edu/siapp_pay/isvalid/$ConfirmNum/$LastName"));
	
	if (isset($userInfo->notfound)) {
		return $this->view->render($response, 'index.twig', array( 
							'current_app_year' => $appInfo->current_app_year, 
							'current_app_dates' => $appInfo->current_app_dates,
							'currentYearDisplay' => $currentYearDisplay,
							'error' => 'We were not able to find your registration information based on your entry. Please check your entry and try again.'
		));
	}
	
	//also get course info
	$courseInfo = json_decode(file_get_contents("http://isr-wp.isr.umich.edu/siapp_pay/courses"));
	
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
			'confirm_num' => $ConfirmNum,
			'userInfo' => $userInfo,
			'courseSignedUpFor' => $courseSignedUpFor
	));
});