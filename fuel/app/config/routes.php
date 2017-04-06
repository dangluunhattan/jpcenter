<?php
return array(
	'_root_'  => 'home/index',  // The default route
	'_404_'   => 'welcome/404',    // The main 404 route
    
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
	'news/(:num)' => 'news/view/$1',
	'contact' => 'contact/contact',
        'logout' => 'login/dologout',
        'schedule' => 'teachingschedule/index',
        'passwordreset/(:any)'     => 'recovery/key/$1',
);
