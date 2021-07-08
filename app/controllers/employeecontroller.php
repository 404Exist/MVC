<?php
namespace PHPMVC\Controllers;
use PHPMVC\Models\EmployeeModel;
use PHPMVC\LIB\InputFilter;
use PHPMVC\LIB\Helper;

class EmployeeController extends AbstractController
{
  use InputFilter;
  use Helper;
  
  public function defaultAction()
  {
    $this->_data['employees'] = EmployeeModel::getAll();
    $this->_renderView();
  }
  public function addAction()
  {
    if (isset($_POST['submit'])) {
      $employee = new EmployeeModel(
        $this->filterString($_POST['name']), 
        $this->filterInt($_POST['age']),
        $this->filterString($_POST['address']),
        $this->filterFloat($_POST['tax']),
        $this->filterFloat($_POST['salary'])
      );
      if ($employee->save())
      {
        $this->redirect('/employee');
      }
    }
    $this->_renderView();
  }
  public function editAction()
  {
    $id = $this->filterInt($this->_params[0]);
    $employee = EmployeeModel::getByPK($id);

    if(!isset($this->_params[0]) || empty($this->filterInt($this->_params[0])) || !$employee)
    {
      $this->redirect('/employee');
    }

    $this->_data['employee'] = $employee;
    if (isset($_POST['submit'])) {
      $employee->name = $this->filterString($_POST['name']);
      $employee->age = $this->filterInt($_POST['age']);
      $employee->address = $this->filterString($_POST['address']);
      $employee->tax = $this->filterFloat($_POST['tax']);
      $employee->salary = $this->filterFloat($_POST['salary']);
      if ($employee->save())
      {
        $this->redirect('/employee');
      }
    }
    $this->_renderView();
  }
  public function deleteAction()
  {
    $id = $this->filterInt($this->_params[0]);
    $employee = EmployeeModel::getByPK($id);

    if(!isset($this->_params[0]) || empty($this->filterInt($this->_params[0])) || !$employee)
    {
      $this->redirect('/employee');
    }
    if ($employee->delete())
    {
      $this->redirect('/employee');
    }
    
  }

  // Custome Select
    // echo '<pre>';
    // var_dump(EmployeeModel::get(
    //   'SELECT * FROM employees WHERE age = :age',
    //   array(
    //     'age' => array(EmployeeModel::DATA_TYPE_INT, 25)
    //   )
    // ));
    // echo '</pre>';
}