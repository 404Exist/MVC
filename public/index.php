<?php 
namespace PHPMVC;
use PHPMVC\LIB\FrontController;

require_once '../app/config.php';
require_once '../app/lib/autoload.php';

$frontController = new FrontController();
$frontController->dispatch();

