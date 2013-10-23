<?php

/**
* @class  Escape
* @file   Escape.php
* @brief  Escape Builtin/Libs/Strings Module.
* @date   2013-10-23 21:57:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-23 21:57:00
*/

namespace Tipui\App\Model\Tests\Builtin\Libs\Strings;

use \Tipui\Builtin\Libs as Libs;

class Escape
{

	/**
	* @brief Data to be rendered
	*/
    public function View()
    {

		return array(
			'str'                  => $str = '<b>Foo Bar</b>',
			'rs_all'               => Libs\Strings::Escape( $str ),
			'rs_php'               => Libs\Strings::Escape( $str, array( 'php' ) ),
			'rs_php_form'          => Libs\Strings::Escape( $str, array( 'php', 'form' ) ),
			'rs_strip_tags_except' => Libs\Strings::Escape( $str, array( 'strip_tags' ), '<b><i>' ),
		);

    }

}