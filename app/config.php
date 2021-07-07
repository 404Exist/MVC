<?php
const PUBLIC_PATH = '1Apps/MVC/public';

define('DS', '/'); // returns [ / ] value to DS
define('APP_PATH', str_replace('\\', '/', dirname(__FILE__))); // now we back to app/ folder
define('VIEWS_PATH', APP_PATH. DS. 'views'. DS); // now we back to app/views/ folder


defined('DATABASE_HOST_NAME') ? null : define('DATABASE_HOST_NAME', 'locaslhost');
defined('DATABASE_USER_NAME') ? null : define('DATABASE_USER_NAME', 'root');
defined('DATABASE_PASSWORD') ? null : define('DATABASE_PASSWORD', '');
defined('DATABASE_DB_NAME') ? null : define('DATABASE_DB_NAME', 'MVC');
defined('DATABASE_PORT_NUBER') ? null : define('DATABASE_PORT_NUBER', 3306);
defined('DATABASE_CONN_DRIVER') ? null : define('DATABASE_CONN_DRIVER', 1);