<?php
return [
		'settings' => [
				'displayErrorDetails' => true, // set to false in production
				// renderer settings
				'view' => [
						'template_path' => __DIR__ . '/../templates/',
						'cache_path'    => __DIR__ . '/../cache/'
				],
				
				// Monolog settings
				'logger' => [
						'name' => 'Summer Institute Webservice',
						'path' => __DIR__ . '/logs/app.log'
				]
		],
];