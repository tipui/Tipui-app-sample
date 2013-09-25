<?php
/**
* Defines domain, subdomain, charset encoding, public folders (images, javascript, css stylesheets, etc)
*
* After changes, must regenerate the cache files.
* Open the file app/config/env/ENV.JSON
* Set CACHE_REGENERATE to TRUE, temporarily. Execute the app once time and then, back value to FALSE
* The cache files are stored in app/Storage/env
*/

$array = array( 
	'APP_VERSION'    => '1.0',
	'DOMAIN'         => 'tipui.com',
	'SUBDOMAIN'      => 'dev-fw.',
	'CHARSET'        => 'UTF-8',
	'PUBLIC_FOLDER'  => '/',
	'PUBLIC_FOLDER_IMAGES'  => 'images',
	'PUBLIC_FOLDER_JS'      => 'js',
	'PUBLIC_FOLDER_CSS'     => 'css',
	/**
	* Core methods results storage
	* session: save in sessions $_SESSION
	* cookie: save in cookies $_COOKIE
	* sqlite: save in sqlite (not available)
	*/
	'CORE_METHODS_CACHE_STORAGE_MODE' => 'cookie',

	/**
	* Encryption settings
	*/
	'ENCRYPTION_LIBRARY' => array( 'LIB' => 'MCrypt', 'KEY' => '9a*U~m+I>z8#&¨w7K', 'CYPHER' => MCRYPT_RIJNDAEL_256, 'MODE' => MCRYPT_MODE_CBC ),

);



/**
* Examples for PUBLIC_FOLDER:
*
* No subfolder, simple use [code]PUBLIC_FOLDER = "/"[/code] (URL will be http://localhost/)
* One subfolder, use [code]PUBLIC_FOLDER = "/folder_name/"[/code] (URL will be http://localhost/folder_name/)
* Two subfolders, use [code]PUBLIC_FOLDER = "/folder_name/subfolder/"[/code] (URL will be http://localhost/folder_name/subfolder/)
*
* Remember that the folder level must be defined in .htaccess file too:
*
* [No subfolder]
* RewriteBase /
* RewriteRule (.+) /
*
* [Subfolder "folder_name"]
* RewriteBase /folder_name/
* RewriteRule (.+) /folder_name/
*/



/**
* Required by core processes. Recommended to not change here
* Used by PHP_INI_SET.php file
*/
$bootstrap = $array;