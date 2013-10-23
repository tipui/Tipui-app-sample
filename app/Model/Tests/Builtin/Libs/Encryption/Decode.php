<?php

/**
* @class  Decode
* @file   Decode.php
* @brief  Decode Builtin/Libs/Encryption Module.
* @date   2013-10-04 03:08:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-04 03:08:00
*/

namespace Tipui\App\Model\Tests\Builtin\Libs\Encryption;

use \Tipui\Builtin\Libs as Libs;

class Decode
{

	/**
	* @brief Data to be rendered
	*/
    public function View()
    {

		return array(
			'encryption_lib' => \Tipui\Core::GetConf() -> BOOTSTRAP -> ENCRYPTION_LIBRARY,
			'str' => $str = 'xR4bvckNLr4d2SQBx6zFbVIsW2rEgavgpVMAOf7LIFtqyq+QQ2WJLxjXxZEmHqyjgiphULwpHj3dCnR6t0CB4A==',
			'rs'  => Libs\Encryption::Auto() -> Decode( $str ),
		);

    }

}