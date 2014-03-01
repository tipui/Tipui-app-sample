<?php

/**
* @class  Base
* @file   Base.php
* @brief  Base Docs/Builtin/Helpers/Languages Module.
* @date   2014-03-01 19:25:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2014-03-01 19:25:00
*/

namespace Tipui\App\Model\Docs\Builtin\Helpers\Languages;

class Base
{

	/**
	* @brief Data to be rendered
	*/
    public function View()
	{
		return array( 'languages_folder' => \Tipui\Core::LANGUAGE_FOLDER, 'templates_folder' => \Tipui\Core::GetConf() -> TEMPLATES -> FOLDER );
	}

}