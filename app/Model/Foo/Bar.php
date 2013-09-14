<?php

/**
* @class  Bar
* @file   Bar.php
* @brief  Foor/Bar Module.
* @date   2013-07-01 02:18:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: yyyy-mm-dd hh:ii:ss
*/

namespace Tipui\App\Model\Foo;

class Bar
{

    function View()
    {

        return array( 
			'ClassName' => 'Model: ' . __CLASS__ . PHP_EOL
		);

    }

}