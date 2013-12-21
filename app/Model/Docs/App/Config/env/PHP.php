<?php

/**
* @class  PHP
* @file   PHP.php
* @brief  PHP Docs/App/Config/env Module.
* @date   2013-12-12 03:11:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-12-12 03:11:00
*/

namespace Tipui\App\Model\Docs\App\Config\env;

class PHP
{

	/**
	* @brief Data to be rendered
	*/
	public function View()
	{
		/**
		* Loading the file source and assign for template.
		*/
		//echo \Tipui\Core::GetConf() -> ENV -> PATH . 'PHP' . TIPUI_CORE_ENV_FILE_EXTENSION; exit;
		return array( 'code' => highlight_file( \Tipui\Core::GetConf() -> ENV -> PATH . 'PHP' . TIPUI_CORE_ENV_FILE_EXTENSION, true ) );
	}

}