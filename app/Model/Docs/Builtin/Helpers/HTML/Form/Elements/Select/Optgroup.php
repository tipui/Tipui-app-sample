<?php

/**
* @class  Optgroup
* @file   Optgroup.php
* @brief  Optgroup Docs/Builtin/Helpers/HTML/Form/Elements/Select Module.
* @date   2013-11-16 17:52:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-12-08 03:19:00
*/

namespace Tipui\App\Model\Docs\Builtin\Helpers\HTML\Form\Elements\Select;

use \Tipui\Builtin\Libs\Form as Form;
//use \Tipui\Builtin\Libs\DataRules as DataRules;

class Optgroup
{
	/**
	* @brief Form rules
	*/
    public function Form()
    {
		Form::SetElement( 'foo', 'select_optgroup' );

		/**
		* Alternative way, defining options dynamically
		*
		Form::SetElement( 'foo', 'select_optgroup', false, array( DataRules::OPTIONS => array( 
							'g1' => array( 'optgroup' => 'group 1', 'options' => array( 1 => 'g1 option 1', 2 => 'g1 option 2') ), 
							'g2' => array( 'optgroup' => 'group 2', 'options' => array( 3 => 'g2 option 1', 4 => 'g2 option 233') )
						) ) );
		*/
	}

	/**
	* @brief Data to be rendered
	*/
    public function View(){}

}