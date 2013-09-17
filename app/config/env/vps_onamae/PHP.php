<?php
// PHP runtime settings

$array = array( 
	'PHP_PATH'       => '/usr/bin/php',
	'error_log'      => TIPUI_APP_PUBLIC_PATH . '..' . DIRECTORY_SEPARATOR . 'logs' . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'PHP_errors-' . date('Ym') . '.log',
	'UPLOAD_PATH'    => TIPUI_APP_PUBLIC_PATH . '..' . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'upload' . DIRECTORY_SEPARATOR,
	'SESSION_PATH'   => TIPUI_APP_PUBLIC_PATH . '..' . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'session' . DIRECTORY_SEPARATOR,
);

// Loads PHP_INI_SET.php
require_once( $env['PATH'] . 'PHP_INI_SET' . TIPUI_CORE_ENV_FILE_EXTENSION );