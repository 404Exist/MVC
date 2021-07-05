<?php
namespace PHPMVC\LIB\Database;

class pdodatabasehandler extends DatabaseHandler
{
  private static $_instance;
  private static $_handler;

  private function __construct() 
  {
    self::init();
  }

  protected static function init() 
  {
    try {
      self::$_handler = new \PDO(
        'mysql:host='. DATABASE_HOST_NAME. 
        ';dbname='. DATABASE_DB_NAME, 
        DATABASE_USER_NAME,
        DATABASE_PASSWORD
      );
      self::$_handler->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    } catch(\PDOException $e) {

    }
  }
}