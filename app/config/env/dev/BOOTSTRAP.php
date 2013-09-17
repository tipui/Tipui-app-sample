<?php
// Bootup for the settings
//[back APP_ENGINE]
$array = array( 
	'DOMAIN'         => 'tipui.com',
	'SUBDOMAIN'      => 'dev-fw.',
	'CHARSET'        => 'UTF-8',
	'PUBLIC_FOLDER'  => '/',
);

// Used by PHP_INI_SET.php file
$bootstrap = $array;

// PUBLIC_FOLDER
// No folder: /
// 1. Folder: /folder_name/
// 2. Folder + subfolder: /folder_name/subfolder/
/*
.htaccess file must be configured too.
*/

//header( 'Content-Type: text/html; charset=' . CHARSET );