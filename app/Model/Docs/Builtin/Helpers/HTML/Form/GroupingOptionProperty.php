<?php

/**
* @class  GroupingOptionProperty
* @file   GroupingOptionProperty.php
* @brief  GroupingOptionProperty Docs/Builtin/Helpers/HTML/Form Module.
* @date   2013-12-05 17:59:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-12-05 17:59:00
*/

namespace Tipui\App\Model\Docs\Builtin\Helpers\HTML\Form;

use \Tipui\Builtin\Libs\Form as Form;
use \Tipui\Builtin\Libs\DataRules as DataRules;

class GroupingOptionProperty
{
	/**
	* @brief Form rules
	*/
    public function Form()
    {
		Form::SetElement( 'foo', 'checkbox-array', false, array( DataRules::OPTIONS => array( 1 => 'choice 1', 2 => 'choice 2', 3 => 'choice 3', 4 => 'choice 4' ) ) );
	}

	/**
	* @brief Data to be rendered
	*/
    public function View(){}

}