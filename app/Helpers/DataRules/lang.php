<?php
$rs = array (
	'type'           => 'select',
	'min_length'     => 2,
	'max_length'     => 6,
	'size'           => 4,
	'validation'     => 'options',
	'value'          => '',
	'default'        => LANG_DEFAULT,
	'options'        => LanguagesLabels::Get(),
	'pre_filter'     => array( array( '\Tipui\Builtin\Libs\Strings', 'Escape' ), array( false ) ),
);