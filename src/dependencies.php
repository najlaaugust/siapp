<?php

$container = $app->getContainer();

// view renderer
$container['view'] = function ($c) {
	$settings = $c->get('settings')['view'];

    $view = new \Slim\Views\Twig($settings['template_path'], [
    		'cache' => $settings['cache_path']
    ]);
        
    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $c['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($c['router'], $basePath));
    
    $view->getEnvironment()->addFilter( new Twig_SimpleFilter('cast_to_array', function ($stdClassObject) {
    	$response = array();
    	foreach ($stdClassObject as $key => $value) {
    		$response[] = array($key, $value);
    	}
    	return $response;
    }));    
    
    return $view;       
};

//monolog
$container['logger'] = function($c) {
	$settings = $c->get('settings')['logger'];
	$logger = new \Monolog\Logger($settings['name']);
	$file_handler = new \Monolog\Handler\StreamHandler($settings['path']);
	$logger->pushProcessor(new Monolog\Processor\UidProcessor());
	$logger->pushHandler($file_handler, Monolog\Logger::DEBUG);
	return $logger;
};

//emailguy
$container['emailguy'] = function($c) {
	$settings = $c->get('settings')['emailguy'];
	$emailguy = new emailguy($settings['server'],$settings['user'],$settings['pwd'],$settings['from']);
	return $emailguy;
};

