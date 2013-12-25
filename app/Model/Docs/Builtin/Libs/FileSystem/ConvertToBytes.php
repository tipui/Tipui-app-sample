<?php

/**
* @class  ConvertToBytes
* @file   ConvertToBytes.php
* @brief  ConvertToBytes Docs/Builtin/Libs/FileSystem Module.
* @date   2013-12-25 19:04:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-12-25 19:04:00
*/

namespace Tipui\App\Model\Docs\Builtin\Libs\FileSystem;

class ConvertToBytes
{

	/**
	* @brief Data to be rendered
	*/
    public function View()
	{
		$val  = 32;
		$unit = 'mb';
		return array( 
				'value' => $val, 
				'unit'  => $unit, 
				'rs'    => \Tipui\Builtin\Libs\FileSystem::ConvertToBytes( $val, $unit ) 
			);
	}

}