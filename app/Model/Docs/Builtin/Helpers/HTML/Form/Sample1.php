<?php

/**
* @class  Sample1
* @file   Sample1.php
* @brief  Sample1 Docs/Builtin/Helpers/HTML/Form Module.
* @date   2013-08-31 23:35:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-12-08 03:19:00
*/

namespace Tipui\App\Model\Docs\Builtin\Helpers\HTML\Form;

use \Tipui\Builtin\Libs\Form as Form;
use \Tipui\Builtin\Libs\DataRules as DataRules;

class Sample1
{

	/**
	* @brief Form rules
	*/
    public function Form()
    {

		Form::SetElement( 'id', 'id' );
		Form::SetElement( 'option', 'input_radio', false, array( DataRules::OPTIONS => array( 1 => 'option 1', 2 => 'option 2' ) ) );
		Form::SetElement( 'array_option', 'input_radio', false, array( DataRules::OPTIONS => array( 1 => 'option 1', 2 => 'option 2' ) ) );
		Form::SetElement( 'array_multi_option', 'input_radio', false, array( DataRules::OPTIONS => array( 1 => 'option 1', 2 => 'option 2' ) ) );
		Form::SetElement( 'ok', 'input_checkbox' );
		Form::SetElement( 'email', 'email' );
		Form::SetElement( 'message', 'message' );
		Form::SetElement( 'choices', 'checkbox-array' );
		Form::SetElement( 'choices', 'checkbox-array', false, array( DataRules::OPTIONS => array( 1 => 'choice 1', 2 => 'choice 2', 3 => 'choice 3', 4 => 'choice 4' ) ) );
		Form::SetElement( 'array_choices', 'checkbox-array', false, array( DataRules::OPTIONS => array( 1 => 'choice 1', 2 => 'choice 2', 3 => 'choice 3', 4 => 'choice 4' ) ) );
		Form::SetElement( 'array_multi_choices', 'checkbox-array', false, array( DataRules::OPTIONS => array( 1 => 'choice 1', 2 => 'choice 2', 3 => 'choice 3', 4 => 'choice 4' ) ) );
		Form::SetElement( 'select', 'select_active', false, array( DataRules::OPTIONS => array( 1 => 'option 1', 2 => 'option 2', 3 => 'option 3') ) );
		Form::SetElement( 'select_optgroup', 'select_optgroup', false, 
								array( DataRules::OPTIONS => array( 
									'g1' => array( 'optgroup' => 'group 1', 'options' => array( 1 => 'g1 option 1', 2 => 'g1 option 2' ) ), 
									'g2' => array( 'optgroup' => 'group 2', 'options' => array( 3 => 'g2 option 1', 4 => 'g2 option 2' ) )
								) )
						);
		Form::SetElement( 'img', 'upload-img' );

		return null;

    }

	/**
	* @brief Model logic
	*/
    public function Prepare()
    {

		return null;

    }

	/**
	* @brief Data to be rendered
	*/
    public function View(){}

}