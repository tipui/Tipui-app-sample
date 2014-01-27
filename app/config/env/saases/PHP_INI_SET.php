<?php
/**
* PHP runtime settings
*
* The variable $bootstrap is declared in BOOTSTRAP.php file
* @see Core::LoadSettings
* @see ./BOOTSTRAP.php
* @see ./PHP.php
*/

/**
* Errors and warnings logs files
*/
ini_set( 'error_log', $array['error_log'] . date('Ym') . '.log' );

/**
* Displaying Errors and warnings
* TRUE: development, FALSE: production
*/
ini_set( 'display_errors', TRUE ); // TRUE: development, FALSE: production

/**
* Enables errors and warnings logs
*/
ini_set( 'log_errors', TRUE );

/**
* Reporting errors and warnings
* For PHP 5.4+, set error_reporting as "E_ALL & ~E_NOTICE & ~E_STRICT" if want to skip the standards strict warnings.
* In alternative way, for .htaccess file: php_value error_reporting 30711
*
* Note: If display_errors is FALSE, the errors and warnings will not be displayed. However, if error_log is defined and log_errors is TRUE, the errors and warnings will be stored inlog files.
*/
ini_set( 'error_reporting', E_ALL );
ini_set( 'html_errors', FALSE );

/**
* Multibyte strings and charset encoding settings
* @see ./BOOTSTRAP.php
* Recommended use UTF-8
*/
ini_set( 'default_charset', $bootstrap['CHARSET'] );
ini_set( 'mbstring.http_output', $bootstrap['CHARSET'] );
ini_set( 'mbstring.internal_encoding', $bootstrap['CHARSET'] );

/**
* Directory for temporary uploaded files
*/
ini_set( 'upload_tmp_dir', $array['UPLOAD_PATH'] );

/**
* PHP Sessions general settings
*/

/**
* Default PHP session.name is PHPSESSID.
* The main reasons is to not conflict with others URL parameters when session.use_trans_sid is enabled.
* Another reason is to increase security about server information in browser headers.
*/
ini_set( 'session.name', 'SID' );

/**
* Directory for temporary PHP sessions files
*/
ini_set( 'session.save_path', $array['SESSION_PATH'] ); //session_save_path( $array['SESSION_PATH'] );

/**
* Enables or disables session id (see: session.name directive).
* TRUE or 1 enable it (append parameter 'session.name' to URLS and hidden field of all <form> tags)
* FALSE or 0 disable it (do not append parameter 'session.name' on URLS and hidden field of all <form> tags)
*/
ini_set( 'session.use_trans_sid', 0 );

/**
* Sets the entire domain permitted to access the cookies.
* If want the cookie access permissions only for specific subdomain, then change to
* [code]ini_set( 'session.cookie_domain', $bootstrap['SUBDOMAIN'] . $bootstrap['DOMAIN'] )[/code]
*/
ini_set( 'session.cookie_domain', $bootstrap['DOMAIN'] ); // This is regardless of app/lib/Cookie.php. It's only for $_SESSION

/**
* Debug purposes
*/
//print_r( $array ); exit;
//echo time(); exit;

/**
* lear variable
*/
unset( $bootstrap );