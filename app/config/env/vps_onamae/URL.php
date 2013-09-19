<?php
/**
* URL settings and parameters
*/

$array = array( 
	/**
	* normal: use the normal mode
	* mod_rewrite: use mod rewrite style (friendly URL)
	*
	* Not that regardless of witch mode is setted, both will be accessible.
	*/
	'MODE'              => 'mod_rewrite',

	/**
	* URL Base of parameters
	* the object $this came from Core
	* @see Core::LoadSettings()
	*/
	'HREF_BASE'         => $this -> GetENV( 'BOOTSTRAP', 'PUBLIC_FOLDER' ),

	/**
	* URL parameter folder slash
	*
	* Separator char to identify folders and subfolders.
	* The Core will identify if module name is inside subfolders according to the limit of FOLDER_LEVELS directive
	*/
	'PFS'               => '/',

	/**
	* Limit of folder levels (Core routing scanner)
	* @see Core::RoutingPathScanner()
	*
	* Example of long deep subfolder module
	* http://localhost/folder1/folder2/folder3/folder4/folder5/folder6/folder7/folder8/Foo
	*/
	'FOLDER_LEVELS'    => 10,

	/**
	* Main parameter name
	* Defines the module to be loaded
	* ie: http://localhost/?p=Foo will call and load the module called "Foo" if exists in app/Model/Foo.php
	*/
	'PARAM_NAME'        => 'p',

	/**
	* URL parameter argumentor
	* The normal default is ? (http://localhost/?)
	* Composes URLs in normal mode
	*/
	'PARAM_ARGUMENTOR'  => '?',

	/**
	* URL parameter separator
	* The normal default is & (http://localhost/?foo=1&bar=1)
	* Composes URLs in normal mode
	*/
	'PARAM_SEPARATOR'  => '&',
);

/**
* The HTML tag form action parameter
* <form action="URL -> FORM_ACTION">
*
* Recommended to not change here
*/
$array['FORM_ACTION'] = $array['HREF_BASE'];