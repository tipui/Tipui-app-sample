<?php
$rs = array (
	'type'           => 'checkbox',
	'size'           => 1,
	'validation'     => 'number',
	'multiple'       => true, // indicates that field name must be array with unique indices
	'options'        => array(1 => 'choice 1', 2 => 'choice 2'), // values and labels
	'value'          => null,
	'default'        => array( 1, 3 ),
	'pre-filter'     => array( array( 'Strings', 'NumbersOnly' ) ),
);