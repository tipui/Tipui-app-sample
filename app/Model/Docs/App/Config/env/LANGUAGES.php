<?php

/**
* @class  LANGUAGES
* @file   LANGUAGES.php
* @brief  LANGUAGES Docs/App/Config/env Module.
* @date   2014-02-28 00:08:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2014-02-28 00:08:00
*/

namespace Tipui\App\Model\Docs\App\Config\env;

class LANGUAGES
{

	/**
	* @brief Data to be rendered
	*/
	public function View()
	{
		/**
		* Loading the file source and assign for template.
		*/
		//echo \Tipui\Core::GetConf() -> ENV -> PATH . 'URL' . TIPUI_CORE_ENV_FILE_EXTENSION; exit;
		return array( 'code' => highlight_file( \Tipui\Core::GetConf() -> ENV -> PATH . 'LANGUAGES' . TIPUI_CORE_ENV_FILE_EXTENSION, true ) );
	}

}