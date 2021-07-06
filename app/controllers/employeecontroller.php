<?php
namespace PHPMVC\Controllers;
use PHPMVC\Models\EmployeeModel;

class EmployeeController extends AbstractController{
  public function defaultAction()
  {
    $this->_data['employees'] = EmployeeModel::getAll();

    echo '<pre>';var_dump(EmployeeModel::getAll());echo '</pre>';
    // echo '<pre>';var_dump(EmployeeModel::getByPK(1));echo '</pre>';
    
    
    

    // Create
    // $mohamed = new EmployeeModel('mahmoud', 10, 'menofia', 20, 30000);
    // $mohamed->save();

    // Update
    $mohamed = EmployeeModel::getByPK(7);
    $mohamed->setName('Mahmooooud');
    $mohamed->save();
    // echo '<pre>';var_dump($mohamed);echo '</pre>';

    // Custome Select
    // echo '<pre>';
    // var_dump(EmployeeModel::get(
    //   'SELECT * FROM employees WHERE age = :age',
    //   array(
    //     'age' => array(EmployeeModel::DATA_TYPE_INT, 21)
    //   )
    // ));
    // echo '</pre>';

    // Delete
    // EmployeeModel::getByPK(3)->delete();

    $this->_renderView();
  }
}