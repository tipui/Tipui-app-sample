<?php

/**
* @class  get_declared_classes
* @file   get_declared_classes.php
* @brief  get_declared_classes Tests/PHP Module.
* @date   2013-10-04 03:08:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-04 03:08:00
*/

namespace Tipui\App\Model\Tests\PHP;

class get_declared_classes
{

	/**
	* @brief Data to be rendered
	*/
    public function View()
    {

		return array( 'get_declared_classes' => get_declared_classes() );

    }

}