<?php

/**
* @class  Modules
* @file   Modules.php
* @brief  Routing/Bar Module.
* @date   2013-07-01 03:55:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2014-03-28 21:24:00
*/

namespace Tipui\App\Routing;

class Modules
{

    public function Get( $alias = false )
    {

		//echo $alias; exit;
		$alias = str_replace( '\\', '/', $alias );

		$arr = array(
			'Foo2/Bar' => (object) array( 
								'class'            => 'Docs\App\Routing\Modules\Foo\Bar',
								'default_language' => 'en',
								'force_language'   => false,
							),
			'ダミー'      => (object) array( 
								'class'            => 'Docs\App\Routing\Modules\Foo\Bar',
								'default_language' => 'pt',
								'force_language'   => true,
							),
		);

		if( $alias )
		{
			if( isset( $arr[$alias] ) )
			{
				return $arr[$alias];
			}
		}else{
			return $arr;
		}

        return false;

    }

}