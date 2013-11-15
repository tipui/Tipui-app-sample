<?php

/**
* @class  Modules
* @file   Modules.php
* @brief  Modules Docs/App/Routing Module.
* @date   2013-10-23 20:57:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-23 20:57:00
*/

namespace Tipui\App\Model\Docs\App\Routing;

class Modules
{

	/**
	* @brief Data to be rendered
	*/
	public function View()
	{
		return array(
			'file_extension' => TIPUI_CORE_ENV_FILE_EXTENSION,
		);
	}

}