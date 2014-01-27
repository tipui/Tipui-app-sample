<?php
$rs = array (
	'type'           => 'textarea',
	'min_length'     => 3,
	'max_length'     => 150,
	'cols'           => 25,
	'rows'           => 3,
	'validation'     => 'text',
	'value'          => '',
	'default'        => '',
	'pre_filter'     => array( array( '\Tipui\Builtin\Libs\Strings', 'Escape' ), array( false ) ),
);