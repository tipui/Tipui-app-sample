<?php

/**
* @file   index.php
* @brief  Tipui Framework public index file.
* @date   2013-06-21 18:51:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-01 00:26:00
*
* Git: https://github.com/tipui/Tipui-app-sample

* Settings files
* Enviroment names: /app/config/env/ENV.json
* Base: /app/config/env/ENV_NAME/
* 	BOOTSTRAP.php (domain, subdomain, charset, session and upload paths, etc)
*	URL.php (public folders, form action, mod_rewrite, etc)

* /public/.htaccess file
* RewriteBase [BOOTSTRAP -> PUBLIC_FOLDER]
* RewriteRule (.+) [BOOTSTRAP -> PUBLIC_FOLDER]

*/

date_default_timezone_set('Asia/Tokyo');

// Load Tipui Framework
require( dirname( __FILE__ ) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'app' . DIRECTORY_SEPARATOR . 'Tipui' . DIRECTORY_SEPARATOR . 'Start.php' );
?>