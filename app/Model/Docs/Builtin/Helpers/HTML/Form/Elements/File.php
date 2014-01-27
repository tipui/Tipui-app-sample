<?php

/**
* @class  File
* @file   File.php
* @brief  File Docs/Builtin/Helpers/HTML/Form/Elements Module.
* @date   2013-08-31 23:35:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2014-01-23 20:59:00
*/

namespace Tipui\App\Model\Docs\Builtin\Helpers\HTML\Form\Elements;

use \Tipui\Builtin\Libs\Form as Form;

class File
{
	/**
	* @brief Form rules
	*/
    public function Form()
    {
		Form::SetAction()
		->SetMethod( 'POST' )
		->SetURLParam( 'Docs/Builtin/Helpers/HTML/Form/Elements/File' )
		->SetElement( 'foo', 'input_file' );
	}

	/**
	* @brief Model logic
	*/
    public function Prepare()
    {

		$rs = Form::GetElement( 'foo' );
		//print_r( $rs ); exit;

		\Tipui\Builtin\Libs\FileSystem::MoveUploadedFile( $rs['value']['tmp_name'], TIPUI_APP_PUBLIC_PATH . \Tipui\Core::GetConf() -> BOOTSTRAP -> PUBLIC_FOLDER_IMAGES . DIRECTORY_SEPARATOR . $rs['value']['name'] );
		unset( $rs );

		return null;

    }

	/**
	* @brief Data to be rendered
	*/
    public function View(){}

}