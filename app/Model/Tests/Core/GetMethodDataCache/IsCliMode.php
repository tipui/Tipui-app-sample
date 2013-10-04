<?php

/**
* @class  IsCliMode
* @file   IsCliMode.php
* @brief  IsCliMode Core/GetMethodDataCache Module.
* @date   2013-10-04 03:08:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-04 03:08:00
*/

namespace Tipui\App\Model\Tests\Core\GetMethodDataCache;

use \Tipui\Builtin\Libs as Libs;

class IsCliMode
{

	/**
	* Handles Core instance.
	*/
	private $core;

	/**
	* @brief Model logic
	*/
    public function Prepare()
    {

		$this -> core = new \Tipui\Core;

		return null;
	}

	/**
	* @brief Data to be rendered
	*/
    public function View()
    {

		return array(
			'Core::GetConf()->GetMethodDataCache(IsCliMode)' => \Tipui\Core::GetConf()->GetMethodDataCache( 'IsCliMode' ),
			'Core->GetMethodDataCache(IsCliMode)' => $this -> core -> GetMethodDataCache( 'IsCliMode' ),
		);

    }

}