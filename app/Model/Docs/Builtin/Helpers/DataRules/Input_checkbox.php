<?php

/**
* @class  Input_checkbox
* @file   Input_checkbox.php
* @brief  Input_checkbox Docs/Builtin/Helpers/DataRules Module.
* @date   2013-12-08 03:19:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-12-08 03:19:00
*/

namespace Tipui\App\Model\Docs\Builtin\Helpers\DataRules;

use \Tipui\Builtin\Libs\DataRules as DataRules;

class Input_checkbox
{

	/**
	* @brief Data to be rendered
	*/
    public function View()
	{

		/**
		* Debug Purposes
		*/
		//echo $path = TIPUI_PATH . \Tipui\Core::ENV_FOLDER_BUILTIN . DIRECTORY_SEPARATOR . DataRules::RuleFileName( 'Input_checkbox' ); exit;

		/**
		* Loading the file source and assign for template.
		*/
		return array( 'rule' => highlight_file( TIPUI_PATH . \Tipui\Core::ENV_FOLDER_BUILTIN . DIRECTORY_SEPARATOR . DataRules::RuleFileName( 'Input_checkbox' ), true ) );
	}

}