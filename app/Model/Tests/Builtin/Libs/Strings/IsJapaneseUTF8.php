<?php

/**
* @class  IsJapaneseUTF8
* @file   IsJapaneseUTF8.php
* @brief  IsJapaneseUTF8 Builtin/Libs/Strings Module.
* @date   2013-10-04 03:08:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-24 00:26:00
*/

namespace Tipui\App\Model\Tests\Builtin\Libs\Strings;

use \Tipui\Builtin\Libs as Libs;

class IsJapaneseUTF8
{

	/**
	* @brief Data to be rendered
	*/
    public function View()
    {

		return array(
			'str_roman'    => $str_roman    = 'Foo',
			'str_jp_kanji' => $str_jp_kanji = '漢字',
			'rs_roman'     => Libs\Strings::IsJapaneseUTF8( $str_roman ),
			'rs_jp_kanji'  => Libs\Strings::IsJapaneseUTF8( $str_jp_kanji ),
		);

    }

}