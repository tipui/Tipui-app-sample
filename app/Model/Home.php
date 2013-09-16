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
	* Handles strings Lib instance.
	*/
	private $strings;

	/**
	* @brief Model logic
	*/
    public function Prepare()
    {

		$this -> browse  = new Libs\Browse;
		$this -> strings = new Libs\Strings;

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
			'browse::GetHTTPInfo' => Libs\Browse::GetHTTPInfo(),
			'browse->GetHTTPInfo' => $this -> browse -> GetHTTPInfo(),
			'browse->GetUserNavigation' => $this -> browse -> GetUserNavigation(),
			'browse->GetRemoteInfo' => $this -> browse -> GetRemoteInfo(),
			'Strings->Trim' => $this -> strings -> Trim(' foo '),
			'Strings::Trim' => Libs\Strings::Trim(' foo '),
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