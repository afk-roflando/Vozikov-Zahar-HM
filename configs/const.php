<?php

const DB_HOST = 'base';
const DB_USER = 'root';
const DB_PASSWORD = 'KJKszpj';

const DATABASE = 'PS_shop';
const DSN = 'mysql:host=' . DB_HOST . ';dbname='. DATABASE;
const APP_DIR = BASE_DIR .'/app/';

const VIEW_DIR = BASE_DIR . '/views/';
const PAGE_DIR = VIEW_DIR . '/pages/';
const PARTS_DIR = VIEW_DIR .'/parts/';

define('DOMAIN', $_SERVER ['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);

const ASSETS_URI = DOMAIN . 'assets/';
const ASSETS_DIR = BASE_DIR . 'assets/';

const IMAGES_URI = ASSETS_URI . 'img/';
const IMAGES_DIR = ASSETS_DIR . '/img/';

enum Tables: string
{
    case Content = 'content';
    case Users = 'users';
    case Orders = 'orders';
    case Products = 'products';
    case OrderProducts = 'order_products';

}

enum SESSION_KEYS: string
{
    case REGISTER = 'registration';
}
