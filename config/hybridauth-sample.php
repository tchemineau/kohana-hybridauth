<?php defined('SYSPATH') or die('No direct access allowed.');

return array (

	// 'base_url' the url that point to HybridAuth Endpoint (where index.php and config.php are found)
	'base_url' => 'http://mywebsite/path/to/hybridauth/',
 
	'providers' => array (

		// google
		'Google' => array ( // 'id' is your google client id
			'enabled' => true
			'keys' => array ( 'id' => '', 'secret' => '' ),
		),

		// facebook
		'Facebook' => array ( // 'id' is your facebook application id
			'enabled' => true,
			'keys' => array ( 'id' => '', 'secret' => '' ),
			'scope' => array ( 'email, user_about_me, offline_access' )
		),

		// twitter
		'Twitter' => array ( // 'key' is your twitter application consumer key
			'enabled' => true,
			'keys' => array ( 'key' => '', 'secret' => '' )
		),

		// and so on ...
	),

	'debug_mode' => false,

	// to enable logging, set 'debug_mode' to true, then provide here a path of a writable file
	'debug_file' => '',

);

