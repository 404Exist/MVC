<?php

return [
  'template' => [
    'header'  => TEMPLATE_PATH.'header.php',
    'nav'     => TEMPLATE_PATH.'nav.php',
    'view_start'    => TEMPLATE_PATH.'viewstart.php',
    ':view'   => ':action_view',
    'view_end'    => TEMPLATE_PATH.'viewend.php'
  ],
  'header_resources' => [
    'css' => [
      'font'  => 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css',
      'style' =>  CSS.'style.css'
    ],
    'js' => [

    ]
  ],
  'footer_resources' => [
    'cookies'  => JS.'cookies.js',
    'main'     => JS.'main.js'
  ]
];