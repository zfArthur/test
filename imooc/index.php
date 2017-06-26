<?php

define('BASEDIR', __DIR__);


include 'IMooc/Loader.php';

spl_autoload_register('IMooc\Loader::autoload');

// IMooc\Object::test();

// App\Controller\Home\Index::test();

// $obj= new IMooc\Object();


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
//echo $obj('kkkk');



//$db = new \IMooc\Factory();


//注册树模式
//$db= \IMooc\Register::get('db1');
//var_dump($db);


//单例模式

//$db=  \IMooc\Database::getInstance();

//var_dump($db);
//$db1=  \IMooc\Database::getInstance();
//$db2=  \IMooc\Database::getInstance();


//抽象方法
//$abstrct01 = new abstrct02();
//echo  $abstrct01->test();
//var_dump($abstrct01->hell());

//数据对象映射模式

//$user = new User(2);
//
////var_dump($user->mobile);
//
//$user->uid =3;
//$user->mobile =18500191163;

//原型模式

//$Canvas = new IMooc\Canvas();
//$Canvas->init();
//
//$Canvas1 = clone $Canvas;
//
//
////装饰器模式
//$Canvas1->addDecorator(new \IMooc\ColorDrawDecorator('green'));
//
//$Canvas1->addDecorator(new \IMooc\SizeDrawDecorator('10px'));
//
//
//$Canvas1->rect(3,6,4,12);
//$Canvas1->draw();
//
//echo '---------------<br>';

//$Canvas2 = clone $Canvas;
//
//$Canvas2->rect(3,6,4,12);
//$Canvas2->draw();

// 配置文件的加载
//
//$config = new IMooc\Config(__DIR__.'/configs');
//
//var_dump($config['controller']);


//从配置文件时生成数据库连接

//$db = \IMooc\Factory::getDatabase('slave');
//
//var_dump($db);

$abstrct02 = new abstrct02();
$abstrct02->abstract_func2();


















