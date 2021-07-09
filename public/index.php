<?php 
namespace PHPMVC;
use PHPMVC\LIB\FrontController;
use PHPMVC\LIB\Template;
use PHPMVC\LIB\Language;

require_once '../app/config/config.php';
require_once '../app/lib/autoload.php';
$template_parts = require_once '../app/config/templateconfig.php';

session_start();
if (!isset($_SESSION['lang'])) {
  $_SESSION['lang'] = DEFAULT_LANGUAGE;
}

$template = new Template($template_parts);
$language = new Language();

$frontController = new FrontController($template, $language);
$frontController->dispatch();

