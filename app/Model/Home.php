<?php

/**
* @class  Home
* @file   Home.php
* @brief  Home Module.
* @date   2013-06-22 04:07:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-09-26 03:59:00
*/

namespace Tipui\App\Model;

use \Tipui\Builtin\Libs as Libs;

class Home
{

	/**
	* Handles Encryption Lib instance.
	*/
	private $encryption;

	/**
	* Handles the name of Encryption Lib instance.
	*/
	private $encryption_lib;

	/**
	* Handles Browse Lib instance.
	*/
	private $browse;

	/**
	* Handles strings Lib instance.
	*/
	private $strings;

	/**
	* Handles Core instance.
	*/
	private $core;

	/**
	* @brief Model logic
	*/
    public function Prepare()
    {

		$this -> browse      = new Libs\Browse;
		$this -> strings     = new Libs\Strings;
		$this -> core        = new \Tipui\Core;
		$this -> encryption  = new Libs\Encryption;

		/**
		* Debug purposes
		(conf): TXBJIfILXndaR6s0Tg24/BbEjPx4Va/Yvigru7AkhUtAsuv0yIh3rHSj0Z5+sfyLvkCZbUnT6FvFjjjFLFeYZg==
		key123: 5Y6q8Y69JLy6TpWsMiiGaj2z/R2k2IVurv4lhCQPYwgF5E+G4OMEbM0rN7/ZxCeZDES1p92Vnx+zDW5mF9s7qQ==
		*/
		/*
		echo $this -> encryption -> Auto() -> Encode( 'foo' );
		echo PHP_EOL . $this -> encryption -> Auto( 'key123' ) -> Encode( 'foo' );
		echo PHP_EOL . $this -> encryption -> Auto(  ) -> Decode( '5Y6q8Y69JLy6TpWsMiiGaj2z/R2k2IVurv4lhCQPYwgF5E+G4OMEbM0rN7/ZxCeZDES1p92Vnx+zDW5mF9s7qQ==' );
		//echo PHP_EOL . $this -> encryption -> Auto( 'key123' ) -> Decode( 'kw6fD9jIVIXgJUJhdAvtS9viYmrekyZnxIZBaVahOxl6XP0srdSnj192ZxWXtMG9oVzzUgTdGKva9utVPUAiGw==' );
		exit;
		*/

		$encryption_conf = $this -> core -> GetConf() -> BOOTSTRAP -> ENCRYPTION_LIBRARY;
		$encryption_lib  = $encryption_conf['LIB'];
		$this -> encryption_lib  = $encryption_lib;
		$this -> encryption      = $this -> encryption -> $encryption_lib();

		/**
		* Debug purposes
		$encrypted = $encryption -> Encode( 'foo', $encryption_conf['KEY'] );
		echo $encrypted . PHP_EOL;
		$decrypted = $encryption -> Decode( $encrypted, $encryption_conf['KEY'] );
		echo $decrypted . PHP_EOL;
		exit;
		*/

    }

	/**
	* @brief Data to be rendered
	*/
    public function View()
    {

		$encrypted = $this -> encryption -> Encode( 'foo' );

		return array( 
			'ClassName' => __CLASS__,
			'get_declared_classes' => get_declared_classes(),
			'get_called_class' => get_called_class(),
			'browse::GetHTTPInfo' => Libs\Browse::GetHTTPInfo(),
			'browse->GetHTTPInfo' => $this -> browse -> GetHTTPInfo(),
			'browse->GetUserNavigation' => $this -> browse -> GetUserNavigation(),
			'browse->GetRemoteInfo' => $this -> browse -> GetRemoteInfo(),
			'Core->GetMethodDataCache->IsCliMode' => $this -> core -> GetMethodDataCache( 'IsCliMode' ),
			'Core->GetMethodDataCache->Request' => $this -> core -> GetMethodDataCache( 'Request' ),
			'Core->GetMethodDataCache->Routing' => $this -> core -> GetMethodDataCache( 'Routing' ),
			'Strings->Trim' => $this -> strings -> Trim(' foo '),
			'Strings::Trim' => Libs\Strings::Trim(' foo '),
			'encryption_lib'            => $this -> encryption_lib,
			'Encryption::(lib)->Encode' => $encrypted,
			'Encryption::(lib)->Decode' => $this -> encryption -> Decode( $encrypted ),
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