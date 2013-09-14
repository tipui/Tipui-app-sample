<?php
// Bootup for the settings

	$array = array( 
		'DOMAIN'         => 'tipui.com',
		'SUBDOMAIN'      => 'fw.',
		'CHARSET'        => 'UTF-8',
		'PUBLIC_FOLDER'  => '/',

		// Enviroment data storage
		/*
		* session, sqlite
		*/
		'env_storage'       => 'session',
	);

	// PUBLIC_FOLDER
	// No folder: /
	// 1. Folder: /folder_name/
	// 2. Folder + subfolder: /folder_name/subfolder/
	/*
	.htaccess file must be configured too.
	*/

	//header( 'Content-Type: text/html; charset=' . CHARSET );
?>