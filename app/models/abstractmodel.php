<?php
namespace PHPMVC\Models;
use PHPMVC\LIB\Database\DatabaseHandler;

class AbstractModel {
  const DATA_TYPE_BOOL = \PDO::PARAM_BOOL;
  const DATA_TYPE_STR = \PDO::PARAM_STR;
  const DATA_TYPE_INT = \PDO::PARAM_INT;
  const DATA_TYPE_DECIMAL = 4;
  const DATA_TYPE_DATE = 5;

  private static $db;

  public static function getAll()
  {
    // $sql = 'SELECT * FROM '. static::$tableName;
    // $stmt = DatabaseHandler::factory()->prepare($sql);
    // $stmt->execute();
    // if (method_exists(get_called_class(), '__construct'))
    // {
    //   $results = $stmt->fetchAll(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, get_called_class());
    // }
    // else 
    // {
    //   $results = $stmt->fetchAll(\PDO::FETCH_CLASS, get_called_class());
    // }
    // return $results;
  }
}