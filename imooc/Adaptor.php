<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);//排除NOTICE错误

define('BASEDIR', __DIR__);


include 'IMooc/Loader.php';

spl_autoload_register('IMooc\Loader::autoload');


//适配器模式
//mysql
// $db = new IMooc\Database\MySQL();
//
//$db->connect('127.0.0.1','root','123456','test01');
//$a=$db->query('show databases');
//$db->close();


////mysqli
//$db = new IMooc\Database\MySQLi();
//
//$conn=$db->connect('127.0.0.1','root','123456','test01');
//
//$a=$db->query("select * from 'xboss_account' WHERE uid = 3");
//
//$db->close();
//
//
//
////pdo
$db = new IMooc\Database\PDO();

$db->connect('127.0.0.1','root','123456','test01');
$a=$db->query("show databases");
var_dump($a);
$db->close();