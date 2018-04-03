<?php

// $arr=array(
// '2'=>'a',
// '8'=>'b',
// '2'=>'c',
// '4'=>'d'
// );

// var_dump(array_merge($arr));



    // foreach ($arr as $key=>&$item) {
    //       $arr[$key]['c'] = $item['a'] + $item['b'];  
          
    // }
    // var_dump($arr);

// echo sprintf('%.1f', 1.36);
// echo bcmul(1.36, 1,1);
  
//     bcmul(bcdiv(11.5, 360), 26,)
// $a= 1008;

// echo $a-($a%1000);

// echo intval(mb_substr('360天', 0,3));

// echo (strtotime('2017-03-07')-strtotime('2016-03-05'))/86400;
// $a=2;
// $b=2;
// $c=5;
// $a=$b;
// echo "12323";
// if ($a==1 &&  $b==7 || $c==7) {
//     echo " 2299991111";
// }else{
//     echo "88118";
// }
// $date1= "2017-07-18";
// echo date('Y-m-d',strtotime("$date1 -3 day"));

// var_dump(dateformat('Y-m-d',strtotime('2017-04-18','+1 day'))));

// echo phpinfo();


// $time=time();

//  $preWeek = date('Y-m-d', $time + 24 * 3600 * 7);

//  var_dump($preWeek);

// if (empty(null)){
//     echo "111";
// }else{
//     echo "2222";
// }

// $dataTemp = [];
// $dataTemp[1]['stop_status'] =9999; 
// if (isset($dataTemp[1]['stop_status']) && $dataTemp[1]['stop_status']==9999) {
//     echo "211212";
//     # code...
// }else{
//     echo 5455;
// }
// $a=[];
// var_dump(count($a));
// $page =2;
// $pageCount =5;
//  $start_offset = ($page-1) * $pageCount;


// $arrayName = array('1' => 1, '2' => 2,'3' => 3,'4' => 4,'5' => 5,'6'=>6);

// $bv=array_slice($arrayName ,$start_offset ,$pageCount);
// var_dump($bv);
// $time=time();
// $preWeek = date('Y-m-d', $time + 24 * 3600 * 7);

// var_dump($preWeek);

// echo substr("2017-05-02 12:50:25",0,10);
// if(!0){
//     echo "121212";
// }else {
//     # code...
//     echo "33";
// }

// echo bcadd(4.566, 0.001,2);


// $array = array(
//     1    => "a",
//     "1"  => "b",
//     1.5  => "c",
//     true => "d",
// );
// var_dump($array);
// $a='KT5911557EBE047B25DC000010_交易试算文件_001.txt';
// $b='KT5911557EBE047B25DC000010_交易试算文件_001.txt';
// if($a=$b){
// 	echo "123312";
// }else{
// 	echo "999";
// }



// $a=[
// 1,3,4

// ];

// $b=[
// 1,2,3,4

// ];

// foreach ($b as $key => $value) {
// 	echo "00";
// $i=0;

// foreach ($a as $key => $value) {
// 	if ($value==1) {
// 		$i++;
// 		break;
// 	}
// }
// if ($i>0) {

// 	continue;
// }else{
	
// 	echo "9";
// }

// }


// var_dump(());
// die();	
// $starttime = get_microtime();
// $arr = array();
// for($i=0; $i<1000000; $i++){
//     array_push($arr, $i);
// }
// $endtime = get_microtime();
// printf("run time %f ms\r\n", ($endtime-$starttime)*1000);

// function get_microtime(){


//     list($usec, $sec) = explode(' ', microtime());

//     return (float)$usec + (float)$sec;
// }


// $sa=[
// 'a'=>0,
// '1'=>1,
// '11'=>3
// ];

// $c=array_push($sa, '12');
// var_dump($sa);



// class Singleton{ 


// //存放实例 private static $_instance = null; 
// //私有化构造方法、
//  private function __construct(){ echo "单例模式的实例被构造了"; } 

//  //私有化克隆方法 private function __clone(){ } 

//  //公有化获取实例方法 public static function getInstance()
//  { if (!(self::$_instance instanceof Singleton)){

//   self::$_instance = new Singleton(); 

//  } 
//  return self::$_instance; 
//  } } 


//  $singleton=Singleton::getInstance();


// class Factory{ 
// 	static public function createDb()
// 	{ $db = new Db(); 
// 		return $db; 
// 	} } 

// 	$db = Imooc\Factory::createDb();


// $a='2017-06-13 12:50:08';

// $b=date('Y-m-d 15:00:00',strtotime($a));
// var_dump($b);



// $c=date('Y-m-d H:i:s',strtotime("$b +15 hours"));

// var_dump($c);



// $a = [

// '',2,4,5,55,9

// ];


// if (in_array(0, $a)) {
// 	echo "22332";
// 	# code...
// }else{
// 	echo "111";
// }

// require 'test1.php';
// require 'test2.php';



///////
spl_autoload_register('autoload1');
spl_autoload_register('autoload2');


test1::test();
test2::test();


function autoload1($class){


	require __DIR__.'/'.$class.'.php';
}

function autoload2($class){


	require __DIR__.'/'.$class.'.php';
}

















 
