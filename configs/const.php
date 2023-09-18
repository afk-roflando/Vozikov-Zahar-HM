<?php

const DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASSWORD = 'KJKszpj';

const APP_DIR = BASE_DIR .'/app/';

const VIEWS_DIR = BASE_DIR . '/views/';
const PAGE_DIR = VIEWS_DIR . '/pages/';
const PARTS_DIR = VIEWS_DIR .'/parts/';

define('DOMAIN', $_SERVER ['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);

const ASSETS_URI = DOMAIN . '/assets/';
const ASSETS_DIR = BASE_DIR . '/assets/';

const IMAGES_URI = ASSETS_URI . '/img';
const IMAGES_DIR = ASSETS_DIR . '/img';

echo '<pre>' .print_r(ASSETS_URI, true).  '</pre>';
die ();

