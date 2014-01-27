<?php
// 'url-short':
$rs = array (
	'type'           => 'text',
	'min_length'     => 12,
	'max_length'     => 220,
	'size'           => 40,
	'validation'     => 'text',
	'value'          => '',
	'default'        => '',
	'pre_filter'     => array( array( '\Tipui\Builtin\Libs\Strings', 'Escape' ), array( false ) ),
);