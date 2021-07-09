<?php
namespace PHPMVC\LIB;

class Template
{
  private $_templateParts;
  private $_actionView;
  private $_data;

  public function __construct(array $parts) 
  {
    $this->_templateParts = $parts;
  }

  public function setActionViewFile($actionViewPath)
  {
    $this->_actionView = $actionViewPath;
  }

  public function setAppData($data)
  {
    $this->_data = $data;
  }

  private function renderTemplateHeaderStart()
  {
    require_once TEMPLATE_PATH . 'templateheaderstart.php';
  }

  private function renderTemplateHeaderEnd()
  {
    require_once TEMPLATE_PATH . 'templateheaderend.php';
  }

  private function renderTemplateFooter()
  {
    require_once TEMPLATE_PATH . 'templatefooter.php';
  }

  private function renderTemplateBlocks()
  {
    if (array_key_exists('template', $this->_templateParts))
    {
      $parts = $this->_templateParts['template'];
      if(!empty($parts))
      {
        extract($this->_data);
        foreach($parts as $partKey => $file)
        {
          if ($partKey == ':view')
          {
            require_once $this->_actionView;
          }
          else
          {
            require_once $file;
          }
        }
      }

    }
    else
    {
      trigger_error('Sorry you have to define the template blocks', E_USER_WARNING);
    }
  }

  private function renderHeaderResources()
  {
    $output = '';
    if (array_key_exists('header_resources', $this->_templateParts))
    {
      $resources = $this->_templateParts['header_resources'];
      
      $css = $resources['css'];
      $js = $resources['js'];
      if(!empty($css)) {
        foreach($css as $cssKey => $path) {
          $output .= '<link rel="stylesheet" href="'.$path.'" />';
        }
      }

      if(!empty($js)) {
        foreach($js as $jsKey => $path) {
          $output .= '<script src="'.$path.'"></script>';
        }
      }
      echo $output;
    }
    else
    {
      trigger_error('Sorry you have to define the header resources', E_USER_WARNING);
    }
  }

  private function renderFooterResources()
  {
    $output = '';
    if (array_key_exists('footer_resources', $this->_templateParts))
    {
      $resources = $this->_templateParts['footer_resources'];
      if(!empty($resources)) {
        foreach($resources as $resourceKey => $path) {
          $output .= '<script src="'.$path.'"></script>';
        }
      }
      echo $output;
    }
    else
    {
      trigger_error('Sorry you have to define the footer resources', E_USER_WARNING);
    }
  }

  public function renderApp()
  {
    $this->renderTemplateHeaderStart();
    $this->renderHeaderResources();
    $this->renderTemplateHeaderEnd();

    $this->renderTemplateBlocks();

    $this->renderFooterResources();
    $this->renderTemplateFooter();
  }
}