<?php
namespace PHPMVC\Controllers;
use PHPMVC\Models\EmployeeModel;

class EmployeeController extends AbstractController{
  public function defaultAction()
  {
    EmployeeModel::getAll();
    $this->_renderView();
  }
}