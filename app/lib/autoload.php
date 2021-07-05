<?php 
namespace PHPMVC\LIB;

class Autoload {
  public static function autoload ( $className ) {
    $className = str_replace('PHPMVC', '', $className);
    $classFile = APP_PATH . strtolower($className) . '.php';
    $classFile = str_replace('\\', '/', $classFile);
    if(file_exists($classFile)) {
      require $classFile;
    }
  }
}

spl_autoload_register(__NAMESPACE__.'\Autoload::autoload');