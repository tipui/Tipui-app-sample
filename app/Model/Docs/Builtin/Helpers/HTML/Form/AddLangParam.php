<?php

/**
* @class  AddLangParam
* @file   AddLangParam.php
* @brief  AddLangParam Docs/Builtin/Helpers/HTML/Form Module.
* @date   2014-02-22 00:58:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2014-02-22 00:58:00
*/

namespace Tipui\App\Model\Docs\Builtin\Helpers\HTML\Form;

use \Tipui\Builtin\Libs\Form as Form;

class AddLangParam
{
	/**
	* @brief Form rules
	*/
    public function Form()
    {
		Form::SetAction()
		->SetMethod();
	}

	/**
	* @brief Data to be rendered
	*/
    public function View(){}

}