<?php

/**
* @class  Error
* @file   Error.php
* @brief  Error Module.
* @date   2013-09-10 01:59:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-09-10 01:59:00
*/

namespace Tipui\App\Model;

class Error
{

    public function View()
    {

        return array( 
			'ClassName' => 'Model: ' . __CLASS__ . PHP_EOL
		);

    }

	/**
	* @brief Header output customized
	*/
    public function Header()
    {

        return array( 
			'http_status'  => 500,
		);

    }

}