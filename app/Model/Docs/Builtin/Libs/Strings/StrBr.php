<?php

/**
* @class  StrBr
* @file   StrBr.php
* @brief  StrBr Builtin/Libs/Strings Module.
* @date   2013-10-04 03:08:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-24 00:26:00
*/

namespace Tipui\App\Model\Docs\Builtin\Libs\Strings;

use \Tipui\Builtin\Libs as Libs;

class StrBr
{

	/**
	* @brief Data to be rendered
	*/
    public function View()
    {

		return array(
			'str' => $str = "Foo\n\rbar",
			'rs'  => Libs\Strings::StrBr( $str ),
		);

    }

}