<?php

/**
* @class  GetRemoteInfo
* @file   GetRemoteInfo.php
* @brief  GetRemoteInfo Docs/Builtin/Libs/Browse Module.
* @date   2013-10-04 03:08:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-04 03:08:00
*/

namespace Tipui\App\Model\Docs\Builtin\Libs\Browse;

use \Tipui\Builtin\Libs as Libs;

class GetRemoteInfo
{

	/**
	* @brief Data to be rendered
	*/
    public function View()
    {

		return array(
			'rs' => Libs\Browse::GetRemoteInfo(),
		);

    }

}