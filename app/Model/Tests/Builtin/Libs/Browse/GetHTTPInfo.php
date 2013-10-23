<?php

/**
* @class  GetHTTPInfo
* @file   GetHTTPInfo.php
* @brief  GetHTTPInfo Tests/Builtin/Libs/Browse Module.
* @date   2013-10-04 03:08:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-04 03:08:00
*/

namespace Tipui\App\Model\Tests\Builtin\Libs\Browse;

use \Tipui\Builtin\Libs as Libs;

class GetHTTPInfo
{

	/**
	* @brief Data to be rendered
	*/
    public function View()
    {

		return array(
			'rs' => Libs\Browse::GetHTTPInfo(),
		);

    }

}