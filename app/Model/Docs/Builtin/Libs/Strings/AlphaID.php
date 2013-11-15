<?php

/**
* @class  AlphaID
* @file   AlphaID.php
* @brief  AlphaID Builtin/Libs/Strings Module.
* @date   2013-10-23 21:57:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-23 21:57:00
*/

namespace Tipui\App\Model\Docs\Builtin\Libs\Strings;

use \Tipui\Builtin\Libs as Libs;

class AlphaID
{

	/**
	* @brief Data to be rendered
	*/
    public function View()
    {

		return array(
			'str' => $str = time(),
			'rs'  => Libs\Strings::AlphaID($str),
		);

    }

}