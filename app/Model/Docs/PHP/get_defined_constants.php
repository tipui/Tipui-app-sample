<?php

/**
* @class  get_defined_constants
* @file   get_defined_constants.php
* @brief  get_defined_constants Docs/PHP Module.
* @date   2013-10-27 03:16:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-27 03:16:00
*/

namespace Tipui\App\Model\Docs\PHP;

class get_defined_constants
{

	/**
	* @brief Data to be rendered
	*/
    public function View()
    {
		return array( 'rs' => get_defined_constants(true) );

    }

}