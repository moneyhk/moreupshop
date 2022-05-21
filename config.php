<?php
// HTTP
define('HTTP_SERVER', 'http://moreup.shop/');

// HTTPS
define('HTTPS_SERVER', 'http://moreup.shop/');

// DIR
define('DIR_APPLICATION', '/www/wwwroot/moreup.shop/catalog/');
define('DIR_SYSTEM', '/www/wwwroot/moreup.shop/system/');
define('DIR_IMAGE', '/www/wwwroot/moreup.shop/image/');
define('DIR_STORAGE', '/www/wwwroot/moreup.shop/storage/');
define('DIR_LANGUAGE', DIR_APPLICATION . 'language/');
define('DIR_TEMPLATE', DIR_APPLICATION . 'view/theme/');
define('DIR_CONFIG', DIR_SYSTEM . 'config/');
define('DIR_CACHE', DIR_STORAGE . 'cache/');
define('DIR_DOWNLOAD', DIR_STORAGE . 'download/');
define('DIR_LOGS', DIR_STORAGE . 'logs/');
define('DIR_MODIFICATION', DIR_STORAGE . 'modification/');
define('DIR_SESSION', DIR_STORAGE . 'session/');
define('DIR_UPLOAD', DIR_STORAGE . 'upload/');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', '127.0.0.1');
define('DB_USERNAME', 'moreup_shop');
define('DB_PASSWORD', 'faKMZ8Cw3RGJGStK');
define('DB_DATABASE', 'moreup_shop');
define('DB_PORT', '3306');
define('DB_PREFIX', 'oc_');