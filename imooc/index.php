<?php

define('BASEDIR', __DIR__);


include 'IMooc/Loader.php';

spl_autoload_register('IMooc\Loader::autoload');


// IMooc\Object::test();

// App\Controller\Home\Index::test();

$obj= new IMooc\Object();


//__set __get
//$obj->title = 'hello';
//echo $obj->title;


//__call
//$obj->test('hello',123);


//__callStatic
//IMooc\Object::test('hello33',111);


//__toString

//echo $obj;


//invoke
echo $obj('kkkk');

