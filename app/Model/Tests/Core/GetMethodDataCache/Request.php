<?php

/**
* @class  Request
* @file   Request.php
* @brief  Request Core/GetMethodDataCache Module.
* @date   2013-10-04 03:08:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-04 03:08:00
*/

namespace Tipui\App\Model\Tests\Core\GetMethodDataCache;

use \Tipui\Builtin\Libs as Libs;

class Request
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
			'Core::GetConf()->GetMethodDataCache(Request)' => \Tipui\Core::GetConf()->GetMethodDataCache( 'Request' ),
			'Core->GetMethodDataCache(Request)' => $this -> core -> GetMethodDataCache( 'Request' ),
		);

    }

}