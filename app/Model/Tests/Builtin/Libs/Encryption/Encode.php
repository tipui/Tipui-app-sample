<?php

/**
* @class  Encode
* @file   Encode.php
* @brief  Encode Builtin/Libs/Encryption Module.
* @date   2013-10-04 03:08:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-04 03:08:00
*/

namespace Tipui\App\Model\Tests\Builtin\Libs\Encryption;

use \Tipui\Builtin\Libs as Libs;

class Encode
{

	/**
	* @brief Data to be rendered
	*/
	public function View()
	{
		return array(
			'encryption_lib' => \Tipui\Core::GetConf() -> BOOTSTRAP -> ENCRYPTION_LIBRARY,
			'str' => $str = 'foo',
			'rs'  => Libs\Encryption::Auto() -> Encode( $str ),
		);
	}

}