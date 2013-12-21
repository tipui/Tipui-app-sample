<?php

/**
* @class  Text
* @file   Text.php
* @brief  Text Docs/Builtin/Helpers/HTML/Form/Elements/Input Module.
* @date   2013-08-31 23:35:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-11-16 12:27:00
*/

namespace Tipui\App\Model\Docs\Builtin\Helpers\HTML\Form\Elements\Input;

use \Tipui\Builtin\Libs\Form as Form;

class Text
{
	/**
	* @brief Form rules
	*/
    public function Form()
    {
		Form::SetElement( 'foo', 'input_text' );
	}

	/**
	* @brief Data to be rendered
	*/
    public function View(){}

}