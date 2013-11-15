<?php

/**
* @class  NumbersOnly
* @file   NumbersOnly.php
* @brief  NumbersOnly Builtin/Libs/Strings Module.
* @date   2013-10-04 03:08:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-24 00:26:00
*/

namespace Tipui\App\Model\Docs\Builtin\Libs\Strings;

use \Tipui\Builtin\Libs as Libs;

class NumbersOnly
{

	/**
	* @brief Data to be rendered
	*/
    public function View()
    {

		return array(
			'str' => $str = 'Foo 123　１２３',
			'rs'  => Libs\Strings::NumbersOnly( $str ),

			'str_float' => $str = 'Foo 1.23',
			'rs_float'  => Libs\Strings::NumbersOnly( $str, true ),
		);

    }

}