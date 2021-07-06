<?php
namespace PHPMVC\Controllers;
use PHPMVC\Models\EmployeeModel;

class EmployeeController extends AbstractController{
  public function defaultAction()
  {
    // $this->_data['employees'] = EmployeeModel::getAll();

    echo '<pre>';var_dump(EmployeeModel::getAll());echo '</pre>';
    // echo '<pre>';var_dump(EmployeeModel::getByPK(1));echo '</pre>';
    
    
    // echo '<pre>';
    // var_dump(EmployeeModel::get(
    //   'SELECT * FROM employees WHERE age = :age',
    //   array(
    //     'age' => array(EmployeeModel::DATA_TYPE_INT, 21)
    //   )
    // ));
    // echo '</pre>';
    $mohamed = new EmployeeModel('mahmoud', 10, 'menofia', 20, 30000)->getByPK(3);
    $mohamed->save();
    $this->_renderView();
  }
}