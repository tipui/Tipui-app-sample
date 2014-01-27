<?php
/**
* App Modules (Model) settings
*/

$array = array( 
	// First default module (front page / home page)
	'Front'             => 'Home',
	// Not found module
	'404'               => 'NotFound',
	// Error Module
	'Error'             => 'Error',

	/**
	* App models methods results/settings storage
	* session: save in sessions $_SESSION
	* cookie: save in cookies $_COOKIE
	* sqlite: save in sqlite (not available)
	*
	* (Independent of BOOTSTRAP 'DEFAULT_CACHE_STORAGE_MODE')
	*/
	'METHODS_CACHE_STORAGE_MODE' => 'cookie',
);