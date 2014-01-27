<?php
$rs = array (
	'type'           => 'hidden',
	'min_length'     => 1,
	'max_length'     => 6,
	'size'           => 25,
	'validation'     => 'number',
	'value'          => '',
	'default'        => '',
	'pre_filter'     => array( array( '\Tipui\Builtin\Libs\Strings', 'NumbersOnly' ) ),
);