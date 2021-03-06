<?php

/**
* @class  AddURLParam
* @file   AddURLParam.php
* @brief  AddURLParam Docs/Builtin/Helpers/HTML/Form Module.
* @date   2014-01-27 18:21:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2014-01-27 18:21:00
*/

namespace Tipui\App\Model\Docs\Builtin\Helpers\HTML\Form;

use \Tipui\Builtin\Libs\Form as Form;

class AddURLParam
{

	/**
	* @brief Form rules
	*/
    public function Form()
    {
		Form::SetAction()
		->SetURLParam( 'Docs/Builtin/Libs/Form/SetURLParam' );
	}

	/**
	* @brief Data to be rendered
	*/
    public function View(){}

}