<?php
$rs = array (
	'type'           => 'checkbox',
	'exact_value'    => 1,
	'size'           => 1,
	'validation'     => 'number',
	'value'          => null,
	'default'        => null,
	'pre_filter'     => array( array( '\Tipui\Builtin\Libs\Strings', 'NumbersOnly' ) ),
);