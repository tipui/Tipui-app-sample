<?php

/**
* @class  StripTags
* @file   StripTags.php
* @brief  StripTags Builtin/Libs/Strings Module.
* @date   2013-10-04 03:08:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-24 00:26:00
*/

namespace Tipui\App\Model\Tests\Builtin\Libs\Strings;

use \Tipui\Builtin\Libs as Libs;

class StripTags
{

	/**
	* @brief Data to be rendered
	*/
    public function View()
    {

		return array(
			'str'   => $str = '<b>Foo<b>',
			'rs'    => Libs\Strings::StripTags( $str ),

			'str2'  => $str2  = '<b>Foo<b>',
			'allow' => $allow = '<b>',
			'rs2'   => Libs\Strings::StripTags( $str2, $allow ),
		);

    }

}