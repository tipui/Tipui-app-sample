<?php

/**
* @class  SetTagParams
* @file   SetTagParams.php
* @brief  SetTagParams Docs/Builtin/Helpers/HTML/Form Module.
* @date   2013-12-05 17:59:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-12-05 17:59:00
*/

namespace Tipui\App\Model\Docs\Builtin\Helpers\HTML\Form;

use \Tipui\Builtin\Libs\Form as Form;

class SetTagParams
{
	/**
	* @brief Form rules
	*/
    public function Form()
    {
		Form::SetElement( 'foo', 'input_text', false );
	}

	/**
	* @brief Data to be rendered
	*/
    public function View(){}

}