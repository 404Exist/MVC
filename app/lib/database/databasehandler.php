<?php
namespace PHPMVC\LIB\Database;

abstract class DatabaseHandler
{
  // const DATABASE_DRIVER_PDO = 1;
  private static $_instance;
  private static $_handler;

  public static function factory() {
    try {
      self::$_handler = new \PDO(
        'mysql://hostname='. DATABASE_HOST_NAME. 
        ';dbname='. DATABASE_DB_NAME, 
        DATABASE_USER_NAME,
        DATABASE_PASSWORD
      );
      self::$_handler->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    } catch(\PDOException $e) {
      echo $e->getMessage();
    }
    return self::$_handler;
  }
}