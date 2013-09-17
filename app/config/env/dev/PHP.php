<?php
// PHP runtime settings

$array = array( 
	'PHP_PATH'       => 'C:\php\php5.3.26ts\php.exe',
	'error_log'      => TIPUI_APP_PUBLIC_PATH . '..' . DIRECTORY_SEPARATOR . 'logs' . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'php_logs_',
	'UPLOAD_PATH'    => TIPUI_APP_PUBLIC_PATH . '..' . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'upload' . DIRECTORY_SEPARATOR,
	'SESSION_PATH'   => TIPUI_APP_PUBLIC_PATH . '..' . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'session' . DIRECTORY_SEPARATOR,
);

// Loads PHP_INI_SET.php
require_once( $env['PATH'] . 'PHP_INI_SET' . TIPUI_CORE_ENV_FILE_EXTENSION );