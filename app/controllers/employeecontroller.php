<?php
namespace PHPMVC\Controllers;
use PHPMVC\Models\EmployeeModel;

class EmployeeController extends AbstractController{
  public function defaultAction()
  {
    $this->_data['employees'] = EmployeeModel::getAll();
    $this->_renderView();

    // echo '<pre>';var_dump(EmployeeModel::getAll());echo '</pre>';
    // echo '<pre>';var_dump(EmployeeModel::getByPK(5));echo '</pre>';
    
    // Create
      // $mohamed = new EmployeeModel('mahmoud', 10, 'menofia', 20, 30000);
      // $mohamed->save();

    // Update
      // $mohamed = EmployeeModel::getByPK(5);
      // $mohamed->name = 'Ahmed';
      // $mohamed->age = 25;
      // $mohamed->address = 'Menofia';
      // $mohamed->tax = 20;
      // $mohamed->salary = 20000;
      // $mohamed->save();
    // echo '<pre>';var_dump($mohamed);echo '</pre>';

    // Custome Select
      // echo '<pre>';
      // var_dump(EmployeeModel::get(
      //   'SELECT * FROM employees WHERE age = :age',
      //   array(
      //     'age' => array(EmployeeModel::DATA_TYPE_INT, 25)
      //   )
      // ));
      // echo '</pre>';

    // Delete
      // EmployeeModel::getByPK(3)->delete();
  }
  public function addAction()
  {
    if (isset($_POST['submit'])) {
      $employee = new EmployeeModel();
      var_dump($_POST);
    }
    $this->_renderView();
  }
}