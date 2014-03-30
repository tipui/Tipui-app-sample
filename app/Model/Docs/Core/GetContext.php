<?php

/**
* @class  GetContext
* @file   GetContext.php
* @brief  GetContext Docs/Core Module.
* @date   2014-03-29 00:40:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2014-03-29 19:09:00
*/

namespace Tipui\App\Model\Docs\Core;

class GetContext
{

	/**
	* @brief Data to be rendered
	*/
    public function View(){
		//echo __CLASS__ . PHP_EOL . PHP_EOL; //exit;
		//Tipui\App\Model\Docs\Core\GetContext

		$c = \Tipui\Core::GetContext();
		//print_r( $c -> {'\\'.__CLASS__} ); exit;
		//print_r( $c -> config ); exit;
		/*
		foreach( $c as $k => $v )
		{
			echo $k . ': ';
			//print_r( $v );
			echo PHP_EOL . PHP_EOL;
		}
		exit;
		*/
		//var_dump( $c -> LanguageCodeFromParameters ); exit;
		//var_dump( $c -> Routing ); exit;
		//var_dump( $c -> IsCliMode ); exit;
		//var_dump( \Tipui\Core::GetContext()->LanguageCodeFromParameters ); exit;
		//var_dump( \Tipui\Core::GetContext()->Routing ); exit;
		//var_dump( \Tipui\Core::GetContext()->IsCliMode ); exit;
	}

}