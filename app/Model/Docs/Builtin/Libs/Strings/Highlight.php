<?php

/**
* @class  Highlight
* @file   Highlight.php
* @brief  Highlight Builtin/Libs/Strings Module.
* @date   2013-10-24 00:26:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-24 00:26:00
*/

namespace Tipui\App\Model\Docs\Builtin\Libs\Strings;

use \Tipui\Builtin\Libs as Libs;

class Highlight
{

	/**
	* @brief Data to be rendered
	*/
    public function View()
    {

		return array(
			'str'      => $str      = 'Foobar',
			'str_find' => $str_find = 'bar',
			'str_tags' => $str_tags = array( '<span style="background-color:#333;color:#fff;">', '</span>' ),
			'rs'  => Libs\Strings::Highlight( $str, $str_find, $str_tags ),
		);

    }

}