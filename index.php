<?php
const BASE_DIR = __DIR__;

require_once BASE_DIR . '/vendor/autoload.php';

require_once BASE_DIR . '/configs/const.php';


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


try {
   require_once APP_DIR . 'index.php';

    require_once BASE_DIR . '/configs/router.php';

} catch (Exception $exception) {
    d($exception ->getCode() . ' - "' . $exception->getMessage() . '"');
}
