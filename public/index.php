<?php 
namespace PHPMVC;
use PHPMVC\LIB\FrontController;

require_once '../app/config/config.php';
require_once '../app/lib/autoload.php';
$template_parts = require_once '../app/config/templateconfig.php';
echo '<pre>';var_dump($template_parts);echo '</pre>';

$frontController = new FrontController();
$frontController->dispatch();

