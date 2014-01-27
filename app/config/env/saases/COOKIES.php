<?php
/**
* Cookies settings
*/

$array = array( 
	/**
	* Time to expiration
	*/
	'COOKIE_TIME'                   => '+30',

	/**
	* Time mode, according to PHP strtime() function parameters
	* seconds, minutes, hours, days, months, years
	*
	* If COOKIE_TIME is "+30" and COOKIE_TIME_MODE is "days", means that the cookie lifetime is "+30 days"
	* If want make an invalid cookie, then, define COOKIE_TIME to negative number "-30", for example. This will set a cookie to some past date.
	*/
	'COOKIE_TIME_MODE'  => 'days',
);