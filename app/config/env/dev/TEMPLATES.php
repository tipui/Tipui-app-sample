<?php
/**
* Template library settings
*/

$array = array( 
	/**
	* read: holds the results (do not print out)
	* print: dispatch results (print out)
	*/
	'OUTPUT'                 => 'print',

	/**
	* Main tag name to print variables from models.
	* Example:
	* On the model View() method
	* [code]
	*	return array( 
	*		'foo' => 'bar',
	*		);
	* [/code]
	*
	* To print the value of 'foo' on template file, just do [code]echo $T['foo'][/code]
	*/
	'TAG'                    => 'T',

	/**
	* folder name of template files
	*/
	'FOLDER'                 => 'Template',

	/**
	* Template files name extension (ie: Foo.html)
	*/
	'DEFAULT_FILE_EXTENSION' => '.html',

	/**
	* Default Header content-type
	*/
	'DEFAULT_CONTENT_TYPE'   => 'text/html',

	/**
	* Interface default language code
	*/
	'DEFAULT_LANGUAGE'       => 'en',

	/**
	* Indicates the base path of template files organized into separated folders.
	* ie: 
	*	app/Template/en/
	*	app/Template/pt/
	*
	* Recommended for cases when the template files must or may have different labels for each language.
	*/
	'LANGUAGES_IN_FOLDER'    => false,
);

/**
* Template settings overriding
*
* The template settings can be changed by model files by adding a public method called Template()
* Example:

    public function Template()
    {

        return array( 
			'language'     => 'en',
			'charset'      => 'UTF-8',
			'content_type' => 'text/html',
			'dir'          => 'Foo' . DIRECTORY_SEPARATOR,
			'file'         => 'Test.html',
		);

    }
*
* If the method is not defined, will be performed the settings of this file.
* The name of template file must be equal to model file name.
* To change template file name to a name different of the model file name, then, declare Template() method and set the 'file' directive.
*/