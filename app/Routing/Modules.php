<?php

/**
* @class  Modules
* @file   Modules.php
* @brief  Routing/Bar Module.
* @date   2013-07-01 03:55:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-22 21:43:00
*/

namespace Tipui\App\Routing;

class Modules
{

    public function Get( $alias = false )
    {

		//echo $alias; exit;
		$alias = str_replace( '\\', '/', $alias );

		$arr = array(
			'Foo2/Bar' => array( 
								'class'            => 'Tests\App\Routing\Modules\Foo\Bar',
								'default_language' => 'en',
								'force_language'   => false,
							),
			'ダミー'      => array( 
								'class'            => 'Tests\App\Routing\Modules\Foo\Bar',
								'default_language' => 'ja',
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