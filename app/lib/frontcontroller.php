<?php 
namespace PHPMVC\LIB;

class FrontController
{
  const NOT_FOUND_CONTROLLER = 'PHPMVC\Controllers\\NotFoundController';
  const NOT_FOUND_ACTION = 'notFoundAction';

  private $_controller = 'index';
  private $_action = 'default';
  private $_params = array();


  public function __construct()
  {
    $this->_parseUrl();
  }

  private function _parseUrl()
  {
    $url = explode('/', trim($_SERVER['REQUEST_URI'], '/'), 3);
    if ($url[0] != '') 
    {
      $this->_controller = $url[0];
      if (count($url) >= 2) 
      {
        $this->_action = $url[1];
      }
      if (count($url) == 3) 
      {
        $this->_params = explode('/', $url[2]);
      }
    }
    // return $this;
  }

  public function dispatch() 
  {
    $controllerClassName = 'PHPMVC\Controllers\\'. ucfirst($this->_controller). 'Controller';
    $actionName = $this->_action. 'Action';
    if (!class_exists($controllerClassName))
    {
      $controllerClassName = self::NOT_FOUND_CONTROLLER;
    }
    $controller = new $controllerClassName();
    if (!method_exists($controller, $actionName))
    {
      $this->_action = $actionName = self::NOT_FOUND_ACTION;
    }
    $controller->setContoller($this->_controller);
    $controller->setAction($this->_action);
    $controller->setParams($this->_params);
    $controller->$actionName();
  }
  
}