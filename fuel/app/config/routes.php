<?php
return array(
	'_root_'  => 'dashboard/index',  // The default route
	'_404_'   => 'errorhandler/404',    // The main 404 route
	
	'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
