<?php

/**
* @class  ValidMailAddress
* @file   ValidMailAddress.php
* @brief  ValidMailAddress Builtin/Libs/Strings Module.
* @date   2013-10-04 03:08:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-24 00:26:00
*/

namespace Tipui\App\Model\Tests\Builtin\Libs\Strings;

use \Tipui\Builtin\Libs as Libs;

class ValidMailAddress
{

	/**
	* @brief Data to be rendered
	*/
    public function View()
    {

		return array(
			'str' => $str    = 'info@foo.bar',
			'rs'  => Libs\Strings::ValidMailAddress( $str ),
		);

    }

}