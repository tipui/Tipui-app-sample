<?php

/**
* @class  NotFound
* @file   NotFound.php
* @brief  NotFound Module (HTTP Status 404).
* @date   2013-06-22 04:07:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: yyyy-mm-dd hh:ii:ss
*/

namespace Tipui\App\Model;

class NotFound
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
			'http_status'  => 404,
		);

    }

}