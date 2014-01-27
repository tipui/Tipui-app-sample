<?php

/**
* @class  Sample1
* @file   Sample1.php
* @brief  Sample1 Docs/Builtin/Helpers/HTML/Form Module.
* @date   2013-08-31 23:35:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2014-01-20 13:8:00
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

		Form::SetAction()
		->SetMethod( 'POST' )
		->SetElement( 'id', 'id' )
		->SetElement( 'option', 'input_radio', false, array( DataRules::OPTIONS => array( 1 => 'option 1', 2 => 'option 2' ) ) )
		->SetElement( 'array_option', 'input_radio', false, array( DataRules::OPTIONS => array( 1 => 'option 1', 2 => 'option 2' ) ) )
		->SetElement( 'array_multi_option', 'input_radio', false, array( DataRules::OPTIONS => array( 1 => 'option 1', 2 => 'option 2' ) ) )
		->SetElement( 'ok', 'input_checkbox' )
		->SetElement( 'email', 'email' )
		->SetElement( 'message', 'message' )
		->SetElement( 'choices', 'checkbox-array' )
		->SetElement( 'choices', 'checkbox-array', false, array( DataRules::OPTIONS => array( 1 => 'choice 1', 2 => 'choice 2', 3 => 'choice 3', 4 => 'choice 4' ) ) )
		->SetElement( 'array_choices', 'checkbox-array', false, array( DataRules::OPTIONS => array( 1 => 'choice 1', 2 => 'choice 2', 3 => 'choice 3', 4 => 'choice 4' ) ) )
		->SetElement( 'array_multi_choices', 'checkbox-array', false, array( DataRules::OPTIONS => array( 1 => 'choice 1', 2 => 'choice 2', 3 => 'choice 3', 4 => 'choice 4' ) ) )
		->SetElement( 'select', 'select_active', false, array( DataRules::OPTIONS => array( 1 => 'option 1', 2 => 'option 2', 3 => 'option 3') ) )
		->SetElement( 'select_optgroup', 'select_optgroup', false, 
								array( DataRules::OPTIONS => array( 
									array( 'group 1' => array( 1 => 'g1 option 1', 2 => 'g1 option 2' ) ), 
									array( 'group 2' => array( 3 => 'g2 option 1', 4 => 'g2 option 2' ) )
								) )
						)
		->SetElement( 'img', 'upload-img' );

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
    public function View(){
	
		//echo $this -> prepare; exit;
	
	}

}