<?php

/**
* @class  ENV
* @file   ENV.php
* @brief  ENV Docs/Core/GetConf Module.
* @date   2013-10-27 03:16:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-27 03:16:00
*/

namespace Tipui\App\Model\Docs\Core\GetConf;

class ENV
{

	/**
	* @brief Data to be rendered
	*/
    public function View()
	{
		return array(
			'_all' => \Tipui\Core::GetConf() -> ENV -> _all
		);
	}

}