<?php

/**
* @class  GetElementProperty
* @file   GetElementProperty.php
* @brief  GetElementProperty Docs/Builtin/Helpers/HTML/Form Module.
* @date   2013-11-16 12:27:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-11-16 12:27:00
*/

namespace Tipui\App\Model\Docs\Builtin\Helpers\HTML\Form;

use \Tipui\Builtin\Libs\Form as Form;

class GetElementProperty
{
	/**
	* @brief Form rules
	*/
    public function Form()
    {
		Form::SetElement( 'foo', 'input_hidden' );
		Form::SetElement( 'bar', 'input_radio' );
	}

	/**
	* @brief Data to be rendered
	*/
    public function View(){}

}