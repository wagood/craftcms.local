<?php
/**
 * Craft web bootstrap file
 */

switch (strtolower($_SERVER['SERVER_NAME'])) {
    case "craftcms.local":
        define('CRAFT_ENVIRONMENT', 'craftcms.local');
        break;
    case "prestaclub.ru":
        define('CRAFT_ENVIRONMENT', 'prestaclub.ru');
        break;
    default:   // Covers "www" and non-"www"
        define('CRAFT_ENVIRONMENT', 'prestaclub.ru');
        break;
}

// Set path constants
define('CRAFT_BASE_PATH', dirname(__DIR__));
define('CRAFT_VENDOR_PATH', CRAFT_BASE_PATH.'/vendor');

// Load Composer's autoloader
require_once CRAFT_VENDOR_PATH.'/autoload.php';

// Load dotenv?
if (class_exists('Dotenv\Dotenv') && file_exists(CRAFT_BASE_PATH.'/.env')) {
    (new Dotenv\Dotenv(CRAFT_BASE_PATH))->load();
}

// Load and run Craft
//define('CRAFT_ENVIRONMENT', getenv('ENVIRONMENT') ?: 'production');
$app = require CRAFT_VENDOR_PATH.'/craftcms/cms/bootstrap/web.php';
$app->run();
