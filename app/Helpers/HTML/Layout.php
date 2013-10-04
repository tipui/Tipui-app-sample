<?php

/**
* @class  Layout
* @file   Layout.php
* @brief  HTML Layout Helper functions.
* @date   2013-10-04 13:57:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-04 13:57:00
*/

namespace Tipui\app\Helpers\HTML;

class Layout
{

	/**
	* Statically.
	*
	* sample
	* [code]Layout::Top();[/code]
	*/
    public static function __callStatic( $name, $arguments )
    {
		return \Tipui\Builtin\Helpers\HTML\Factory::Exec( __NAMESPACE__ . '\\Layout', $name, $arguments );
    }

}