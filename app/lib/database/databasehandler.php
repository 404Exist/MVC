<?php
namespace PHPMVC\LIB\Database;

abstract class DatabaseHandler
{
  private static $_instance;
  private static $_handler;
  // const DATABASE_DRIVER_POD = 1;

  private function __construct() 
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
      echo $e->getMessage();
    }
  }
  public static function factory() {
    
  }
}