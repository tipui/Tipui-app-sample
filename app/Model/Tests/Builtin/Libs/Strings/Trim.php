<?php

/**
* @class  Trim
* @file   Trim.php
* @brief  Trim Builtin/Libs/Strings Module.
* @date   2013-10-04 03:08:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-04 03:08:00
*/

namespace Tipui\App\Model\Tests\Builtin\Libs\Strings;

use \Tipui\Builtin\Libs as Libs;

class Trim
{

	/**
	* Handles strings Lib instance.
	*/
	private $strings;

	/**
	* @brief Model logic
	*/
    public function Prepare()
    {

		$this -> strings = new Libs\Strings;

		return null;
	}

	/**
	* @brief Data to be rendered
	*/
    public function View()
    {

		return array(
			'Strings->Trim' => $this -> strings -> Trim(' foo '),
			'Strings::Trim' => Libs\Strings::Trim(' foo '),
		);

    }

}