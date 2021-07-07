<?php
namespace PHPMVC\Models;

class EmployeeModel extends AbstractModel {
  public $id;
  public $name;
  public $age;
  public $address;
  public $tax;
  public $salary;

  protected static $tableName = 'employees';
  protected static $tableSchema = array(
    'name'     => self::DATA_TYPE_STR,
    'age'      => self::DATA_TYPE_INT,
    'address'  => self::DATA_TYPE_STR,
    'tax'      => self::DATA_TYPE_DECIMAL,
    'salary'   => self::DATA_TYPE_DECIMAL,
  );
  protected static $primaryKey = 'id';

  public function __construct($name, $age, $address, $tax, $salary)
  {
    $this->name = $name;
    $this->age = $age;
    $this->address = $address;
    $this->tax = $tax;
    $this->salary = $salary;
  }

  public function calculateSalary() 
  {
    return $this->salary - ($this->salary * ($this->tax / 100));
  }
}