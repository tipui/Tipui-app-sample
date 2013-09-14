<?php

/**
* @class  Home
* @file   Home.php
* @brief  Home Module.
* @date   2013-06-22 04:07:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-09-09 19:34:00
*/

namespace Tipui\App\Model;

use \Tipui\Builtin\Libs as Libs;

class Home
{

	/**
	* Handles Browse Lib instance.
	*/
	private $browse;

	/**
	* @brief Model logic
	*/
    public function Prepare()
    {

		$this -> browse = new Libs\Browse;

    }

	/**
	* @brief Data to be rendered
	*/
    public function View()
    {

		return array( 
			'ClassName' => __CLASS__,
			'get_declared_classes' => get_declared_classes(),
			'get_called_class' => get_called_class(),
			'browse' => $this -> browse -> GetData(),
			//'core_data' => $this -> core_data,
			//'core_data' => Core -> GetCoreCachedData(),
			//'debug_backtrace' => debug_backtrace(),
		);

    }

	/**
	* @brief Template settings overriding
	*/
	/*
    public function Template()
    {

        return array( 
			'language'     => 'en',
			'charset'      => 'UTF-8',
			'content_type' => 'text/html',
			'dir'          => 'Foo' . DIRECTORY_SEPARATOR,
			'file'         => 'Test.html',
		);

    }
	*/

}