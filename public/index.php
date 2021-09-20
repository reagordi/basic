<?php
define('ROOT_DIR', str_replace('\\', '/', dirname(__DIR__)));
define('VENDOR_DIR', ROOT_DIR . '/vendor');
define('APP_DIR', ROOT_DIR . '/app');

require_once VENDOR_DIR . '/autoload.php';
require_once VENDOR_DIR . '/reagordi/framework/include.php';

Reagordi::$app->getResponse()->sendContent();

echo '<pre>';
print_r(get_included_files());
echo '</pre>';
