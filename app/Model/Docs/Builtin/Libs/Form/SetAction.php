<?php

/**
* @class  SetAction
* @file   SetAction.php
* @brief  SetAction Docs/Builtin/Libs/Form Module.
* @date   2014-01-27 18:21:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2014-01-27 18:21:00
*/

namespace Tipui\App\Model\Docs\Builtin\Libs\Form;

use \Tipui\Builtin\Libs\Form as Form;

class SetAction
{

	/**
	* @brief Form rules
	*/
	public function Form()
	{
		Form::SetAction();
	}

	/**
	* @brief Data to be rendered
	*/
    public function View(){}

}