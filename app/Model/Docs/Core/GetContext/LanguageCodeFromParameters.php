<?php

/**
* @class  LanguageCodeFromParameters
* @file   LanguageCodeFromParameters.php
* @brief  LanguageCodeFromParameters Core/GetContext Module.
* @date   2014-02-02 00:37:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2014-03-29 00:40:00
*/

namespace Tipui\App\Model\Docs\Core\GetContext;

class LanguageCodeFromParameters
{

	/**
	* @brief Data to be rendered
	*/
	public function View()
	{

		return array(
			'rs'   => \Tipui\Core::GetContext()->LanguageCodeFromParameters,
		);

	}

}