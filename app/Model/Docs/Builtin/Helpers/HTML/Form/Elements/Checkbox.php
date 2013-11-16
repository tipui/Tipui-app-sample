<?php

/**
* @class  Checkbox
* @file   Checkbox.php
* @brief  Checkbox Docs/Builtin/Helpers/HTML/Form/Elements Module.
* @date   2013-11-16 17:52:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-11-16 17:52:00
*/

namespace Tipui\App\Model\Docs\Builtin\Helpers\HTML\Form\Elements;

//use \Tipui\Builtin\Libs\DataRules as DataRules;
use \Tipui\Builtin\Libs\Form as Form;

class Checkbox
{
	/**
	* @brief Form rules
	*/
    public function Form()
    {
		Form::SetField( 'foo', 'checkbox' );

		/**
		* Alternative way, defining options dynamically
		*/
		//Form::SetFieldMultiValue( 'foo', 'checkbox', array(1 => 'option 1', 2 => 'option 2', 3 => 'option 3') );
	}

	/**
	* @brief Data to be rendered
	*/
    public function View(){}

}