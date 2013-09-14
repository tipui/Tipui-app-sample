<?php
// PHP runtime settings

	$array = array( 
		'PHP_PATH'       => 'C:\php\php5.3.26ts\php.exe',
		'error_log'      => TIPUI_APP_PUBLIC_PATH . '..' . DIRECTORY_SEPARATOR . 'logs' . DIRECTORY_SEPARATOR . 'php' . DIRECTORY_SEPARATOR . 'PHP_errors-' . date('Ym') . '.log',
		'UPLOAD_PATH'    => TIPUI_APP_PUBLIC_PATH . '..' . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'upload' . DIRECTORY_SEPARATOR,
		'SESSION_PATH'   => TIPUI_APP_PUBLIC_PATH . '..' . DIRECTORY_SEPARATOR . 'tmp' . DIRECTORY_SEPARATOR . 'session' . DIRECTORY_SEPARATOR,
	);

$bootstrap = $this -> GetENV( 'BOOTSTRAP' );

// Errors and logs
ini_set( 'error_log', $array['error_log'] );
ini_set( 'display_errors', TRUE ); // TRUE: development, FALSE: production
ini_set( 'error_reporting', E_ALL );
ini_set( 'log_errors', TRUE );
ini_set( 'html_errors', FALSE );

// Charset and MBString
ini_set( 'default_charset', $bootstrap['CHARSET'] );
ini_set( 'mbstring.http_output', $bootstrap['CHARSET'] );
ini_set( 'mbstring.internal_encoding', $bootstrap['CHARSET'] );

// Upload files
ini_set( 'upload_tmp_dir', $array['UPLOAD_PATH'] );

// Session
ini_set( 'session.name', 'SID' );
ini_set( 'session.gc_probability', 1 );
ini_set( 'session.save_path', $array['SESSION_PATH'] ); //session_save_path( $array['SESSION_PATH'] );
ini_set( 'session.use_trans_sid', 0 );
ini_set( 'session.cookie_domain', $bootstrap['DOMAIN'] ); // This is regardless of app/lib/Cookie.php. It's only for $_SESSION

unset( $bootstrap );

?>