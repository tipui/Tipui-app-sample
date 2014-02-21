<?php

/**
* @class  LANGUAGES
* @file   LANGUAGES.php
* @brief  LANGUAGES Docs/Core/GetConf Module.
* @date   2014-02-02 19:24:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2014-02-02 19:24:00
*/

namespace Tipui\App\Model\Docs\Core\GetConf;

class LANGUAGES
{

	/**
	* @brief Data to be rendered
	*/
    public function View()
	{
		return array(
			'_all' => \Tipui\Core::GetConf() -> LANGUAGES -> _all
		);
	}

}