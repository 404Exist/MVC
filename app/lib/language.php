<?php
namespace PHPMVC\LIB;

class Language
{
  private $_dictionary = [];

  public function load($dictionary)
  {
    $lang = DEFAULT_LANGUAGE;
    if(isset($_SESSION['lang'])) {
      $lang = $_SESSION['lang'];
    }

    $languageFile = LANGUAGE_PATH . DS. $lang . DS . $dictionary . '.lang.php';
    if (file_exists($languageFile)) {
      require $languageFile;
      if(isset($_) && is_array($_) && !empty($_)) {
        foreach ($_ as $textKey => $textValue) {
          $this->_dictionary[$textKey] = $textValue;
        }
      } 
    } else {
      trigger_error('the language file '. $languageFile. ' does not exists', E_USER_WARNING);
    }
  }
  
  public function getDictionary()
  {
    return $this->_dictionary;
  }
}