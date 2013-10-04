<?php

/**
* @class  Bottom
* @file   Bottom.php
* @brief  Bottom app HTML Helpers Layout functions.
* @date   2013-10-04 13:57:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-04 13:57:00
*/

namespace Tipui\app\Helpers\HTML\Layout;

class Bottom
{

	/**
	* Includes the file for bottom part of layout
	* @param $file, allow to point another file to include.
	*/
	public function Exec( $file = false )
	{
		include !$file ? DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . '_html_bottom.html' :  $file;
	}

}