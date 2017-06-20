<?php
$config = array(
    'master' => array(
        'type' => 'MySQL',
        'host' => '127.0.0.1',
        'user' => '123456',
        'password' => 'root',
        'dbname' => 'test01',
    ),
    'slave' => array(
        'slave1' => array(
            'type' => 'MySQL',
            'host' => '127.0.0.1',
            'user' => '123456',
            'password' => 'root',
            'dbname' => 'test01',
        ),
        'slave2' => array(
            'type' => 'MySQL',
            'host' => '127.0.0.1',
            'user' => '123456',
            'password' => 'root',
            'dbname' => 'test01',
        ),
    ),
);
return $config;