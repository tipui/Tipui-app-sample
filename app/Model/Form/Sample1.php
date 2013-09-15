<?php

/**
* @class  Sample1
* @file   Sample1.php
* @brief  Form/Sample1 Module.
* @date   2013-08-31 23:35:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-09-13 00:28:00
*/

namespace Tipui\App\Model\Form;

use \Tipui\Builtin\Libs\DataRules as DataRules;
use \Tipui\Builtin\Libs\Form as Form;

class Sample1
{

	/**
	* @brief Form rules
	*/
    public function Form()
    {

		Form::SetAction( 'Form/Sample1' );
		Form::SetField( 'id', 'id' );
		Form::SetFieldMultiValue( 'option', 'radio', array( 1 => 'option 1', 2 => 'option 2' ) );
		Form::SetFieldMultiValue( 'array_option', 'radio', array( 1 => 'option 1', 2 => 'option 2' ) );
		Form::SetFieldMultiValue( 'array_multi_option', 'radio', array( 1 => 'option 1', 2 => 'option 2' ) );
		Form::SetField( 'ok', 'checkbox' );
		Form::SetField( 'email', 'email' );
		Form::SetField( 'message', 'message' );
		Form::SetField( 'choices', 'checkbox-array' );
		Form::SetFieldMultiValue( 'choices', 'checkbox-array', array( 1 => 'choice 1', 2 => 'choice 2', 3 => 'choice 3', 4 => 'choice 4' ) );
		Form::SetFieldMultiValue( 'array_choices', 'checkbox-array', array( 1 => 'choice 1', 2 => 'choice 2', 3 => 'choice 3', 4 => 'choice 4' ) );
		Form::SetFieldMultiValue( 'array_multi_choices', 'checkbox-array', array( 1 => 'choice 1', 2 => 'choice 2', 3 => 'choice 3', 4 => 'choice 4' ) );
		Form::SetFieldMultiValue( 'select', 'select_active', array(1 => 'option 1', 2 => 'option 2', 3 => 'option 3') );
		Form::SetFieldMultiValue( 'select_optgroup', 'select_optgroup', array( 
									'g1' => array( 'optgroup' => 'group 1', 'options' => array( 1 => 'g1 option 1', 2 => 'g1 option 2') ), 
									'g2' => array( 'optgroup' => 'group 2', 'options' => array( 3 => 'g2 option 1', 4 => 'g2 option 2') )
								) );
		Form::SetField( 'img', 'upload-img' );

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
    public function View()
    {

		return array( 
			'get_declared_classes' => get_declared_classes(),
			//'ClassName' => __CLASS__
		);

    }

}