<?php

const  DB_HOST = 'localhost';
const DB_USER = 'root';
const DB_PASSWORD = 'KJKszpj';

const APP_DIR = BASE_DIR . '/app/';

const VIEW_DIR = BASE_DIR . '/views/';
const PAGE_DIR = VIEW_DIR . 'peges/';
const PARTS_DIR = VIEW_DIR . 'parts/';

define('DOMAIN', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST']);

const ASSETS_URI = DOMAIN .'/assets';

const ASSETS_DIR = BASE_DIR .'/assets';


const IMAGE_URI = ASSETS_URI .'/img';

const IMAGE_DIR = ASSETS_DIR .'img';
