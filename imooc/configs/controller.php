<?php
$config = array(
//    'controller' => array(
//     'controllercontent'=>'controller'
//    ),
    'home' => array(
        'decorator' => array(
            'App\Decorator\Login',
            'App\Decorator\Template',
            'App\Decorator\Json',
        ),
    ),
    'default' => 'hello world',
);
return $config;