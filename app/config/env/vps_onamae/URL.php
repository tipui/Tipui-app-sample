<?php
// URL settings and parameters

	$array = array( 
		// normal: use the normal mode, mod_rewrite: use mod rewrite style
		'MODE'              => 'mod_rewrite',
		// URL Base of parameters
		'HREF_BASE'         => $this -> GetENV( 'BOOTSTRAP', 'PUBLIC_FOLDER' ),
		// URL parameter folder slash
		'PFS'               => '/',
		// Main parameter. Defines the module to be loaded. Example: http://localhost/?p=ModuleName
		'PARAM_NAME'        => 'p',
		// parameter argumentor. Example: http://localhost/?x=y
		'PARAM_ARGUMENTOR'  => '?',
		// parameter separator. Example: http://localhost/?x=1&y=1
		'PARAM_SEPARATOR'  => '&',
		// Limit of folder levels (Core routing scanner). @see Core::RoutingPathScanner()
		'FOLDER_LEVELS'    => 10,
	);

	// <form action="URL -> FORM_ACTION">
	$array['FORM_ACTION'] = $array['HREF_BASE'];

?>