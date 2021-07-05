<?php 
namespace PHPMVC\Controllers;

class NotFoundController extends AbstractController
{
  public function defaultAction() {
    echo '<h1>Controller not found</h1>';
  }
}