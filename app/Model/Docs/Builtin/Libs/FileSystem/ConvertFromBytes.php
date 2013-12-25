<?php

/**
* @class  ConvertFromBytes
* @file   ConvertFromBytes.php
* @brief  ConvertFromBytes Docs/Builtin/Libs/FileSystem Module.
* @date   2013-12-25 19:04:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-12-25 19:04:00
*/

namespace Tipui\App\Model\Docs\Builtin\Libs\FileSystem;

class ConvertFromBytes
{

	/**
	* @brief Data to be rendered
	*/
    public function View()
	{
		$val = 697044;
		return array( 'value' => $val, 'rs' => \Tipui\Builtin\Libs\FileSystem::ConvertFromBytes( $val ) );
	}

}