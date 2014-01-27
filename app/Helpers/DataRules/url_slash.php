<?php
$rs = array (
	'type'           => 'text',
	'min_length'     => 5,
	'max_length'     => 220,
	'size'           => 80,
	'validation'     => 'text',
	'value'          => '',
	'default'        => '',
	'pre_filter'     => array( array( '\Tipui\Builtin\Libs\Strings', 'Escape' ), array( 'url_slash' ) ),
);