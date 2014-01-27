<?php

/**
* @class  Text
* @file   Text.php
* @brief  Text Docs/Builtin/Helpers/HTML/Form/Elements/Input Module.
* @date   2013-08-31 23:35:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2014-01-19 12:23:00
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
		Form::SetAction()
		->SetMethod( 'GET' )
		->SetElement( 'foo', 'input_text', false );
	}

	/**
	* @brief Data to be rendered
	*/
    public function View(){
	
	//print_r( $this -> parameters ); exit;
	
	}

}