<?php 
define('PATH_BASE', dirname(__DIR__));
define('PATH_VENDOR', PATH_BASE . DIRECTORY_SEPARATOR . 'vendor');

// Load Composer's autoloader
require_once PATH_VENDOR . DIRECTORY_SEPARATOR . 'autoload.php';

// Load dotenv
if (file_exists(PATH_BASE. DIRECTORY_SEPARATOR . '.env'))  (new Dotenv\Dotenv(PATH_BASE))->load();

// session_start();
// if (!$_SESSION['test']) {
//     $_SESSION['test'] = 'true';
// } else {
//     unset($_SESSION['test']);
//     echo 'double already <br />';
//     echo __FILE__;
//     die;
// }


// Run appication
$app = require_once PATH_VENDOR . '/mlaxwong/paws/bootstrap/web.php';
$app->run();