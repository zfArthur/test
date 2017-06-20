<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);//排除NOTICE错误

define('BASEDIR', __DIR__);


include 'IMooc/Loader.php';

spl_autoload_register('IMooc\Loader::autoload');


//策略模式

class Page
{

    protected  $Strategy1;

    function index(){
        echo "AD: ";
        $this->Strategy1->showAd();

        echo "category:";
        $this->Strategy1->showCategory();

    }

    function setStrategy(IMooc\UserStrategy $UserStrategy){

        $this->Strategy1 = $UserStrategy;
    }



}

$page = new Page();

if (isset($_GET['female'])){

    $Strategy02 = new IMooc\FemaleUserStrategy();

}else{

    $Strategy02 = new IMooc\MaleUserStrategy();
}

$page->setStrategy($Strategy02);
$page->index();
