<?php
/**
* PHP paths
*/

$array = array( 
	// PHP binary
	'PHP_PATH'       => '/usr/bin/php',

	// PHP errors and warning erros log file path
	// The file name will be generated appended with current year and month. Example: php_logs_201309.log
	'error_log'      => TIPUI_APP_PUBLIC_PATH . '..' . DIRECTORY_SEPARATOR . 'logs' . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'php_logs_',

	// Stores temporary files from uploads
	'UPLOAD_PATH'    => TIPUI_APP_PUBLIC_PATH . '..' . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'upload' . DIRECTORY_SEPARATOR,

	// Stores session files generated by $_SESSION
	'SESSION_PATH'   => TIPUI_APP_PUBLIC_PATH . '..' . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'session' . DIRECTORY_SEPARATOR,
);

/**
* Loads PHP_INI_SET.php
*
* The $env array cames from Core.php
* Recommended to not change here
*/
require_once( $env['PATH'] . 'PHP_INI_SET' . TIPUI_CORE_ENV_FILE_EXTENSION );