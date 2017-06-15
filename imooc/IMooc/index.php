<?php

define('BASEDIR', __DIR__);


include 'IMooc/Loader.php';

spl_autoload_register('IMooc\Loader::autoload');


IMooc\Object::test();

App\Controller\Home\Index::test();

