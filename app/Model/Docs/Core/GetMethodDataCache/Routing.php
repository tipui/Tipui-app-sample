<?php

/**
* @class  Routing
* @file   Routing.php
* @brief  Routing Core/GetMethodDataCache Module.
* @date   2013-10-04 03:08:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-04 03:08:00
*/

namespace Tipui\App\Model\Docs\Core\GetMethodDataCache;

class Routing
{

	/**
	* @brief Data to be rendered
	*/
	public function View()
	{

		return array(
			'rs'   => \Tipui\Core::GetConf()->GetMethodDataCache( 'Routing' ),
		);

	}

}