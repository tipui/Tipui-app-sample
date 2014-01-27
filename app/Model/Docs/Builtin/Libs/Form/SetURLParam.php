<?php

/**
* @class  SetURLParam
* @file   SetURLParam.php
* @brief  SetURLParam Docs/Builtin/Libs/Form Module.
* @date   2014-01-27 18:21:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2014-01-27 18:21:00
*/

namespace Tipui\App\Model\Docs\Builtin\Libs\Form;

use \Tipui\Builtin\Libs\Form as Form;

class SetURLParam
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