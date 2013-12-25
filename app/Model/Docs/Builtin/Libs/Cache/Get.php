<?php

/**
* @class  Get
* @file   Get.php
* @brief  Get Docs/Builtin/Libs/Cache Module.
* @date   2013-12-22 23:40:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-12-22 23:40:00
*/

namespace Tipui\App\Model\Docs\Builtin\Libs\Cache;

use \Tipui\Builtin\Libs\Cache as Cache;
use \Tipui\Core as Core;

class Get
{

	/**
	* @brief Data to be rendered
	*/
    public function View(){

		/**
		* Debug purposes
		*/
		
		//$c = new Cache;
		//$rs = $c -> Get('Tipui::App::Model');
		//$rs = $c -> Cookie() -> Get('Tipui::App::Model');

		//$rs = Cache::Get('Tipui::App::Model');
		//$rs = Cache::Cookie()->Get('Tipui::App::Model');
		//$rs = Cache::Session()->Get('Tipui::App::Model');

		//var_dump( $rs ); exit;

		/*
		$rs = Cache::Get( Core::STORAGE_CACHE_MODE_COOKIE, array( 'Tipui::App::Model', 'Tipui::Core::IsCliMode' ) );
		var_dump( $rs ); exit;
		var_dump( \Tipui\Builtin\Libs\Encryption::Auto() -> Decode( $rs['Tipui::Core::IsCliMode'] ) ); exit;
		//$rs = Cache::Get( Core::STORAGE_CACHE_MODE_COOKIE, 'Tipui::App::Model' );
		var_dump( \Tipui\Builtin\Libs\Encryption::Auto() -> Decode( $rs ) ); exit;
		var_dump( $rs ); exit;
		*/

	}

}