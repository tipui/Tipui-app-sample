<?php

/**
* @class  Modules
* @file   Modules.php
* @brief  Routing/Bar Module.
* @date   2013-07-01 03:55:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: yyyy-mm-dd hh:ii:ss
*/

namespace Tipui\App\Routing;

class Modules
{

    public function Get( $alias = false )
    {
		//echo $alias; exit;
		$arr = array(
			'Foo2/Bar' => array( 
								'class'            => 'Foo\Bar',
								'default_language' => 'en',
								'force_language'   => false,
							),
			'Fuu/Bar'  => array( 
								'class'            => 'Foo\Bar',
								'default_language' => 'en',
								'force_language'   => false,
							),
			'ダミー'      => array( 
								'class'            => 'Foo\Bar',
								'default_language' => 'ja',
								'force_language'   => true,
							),
			'模型'      => array( 
								'class'            => 'Foo\Bar',
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