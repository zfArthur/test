<?php
/**
 * Created by PhpStorm.
 * User: zhangfu
 * Date: 2017/6/12
 * Time: 上午10:23i
 *
 * 事件发生
 */

namespace App\Http\Controllers\Home;


//抽象被观察者
abstract  class EventGenerator {


    //定义一个观察者数组
    private $observers = array();
//增加观察者方法
    function addObserver(Observer $observer)
    {
        $this->observers[] = $observer;
        echo "添加观察者成功".'<br>';
    }

    //删除观察者方法
    public function delObserver(Observer $observer){

        $key = array_search($observer,$this->observers); //判断是否有该观察者存在

        if($observer===$this->observers[$key]) { //值虽然相同 但有可能不是同一个对象 ，所以使用全等判断
            unset($this->observers[$key]);
            echo '删除观察者成功'.'<br>';
        } else{
            echo '观察者不存在，无需删除'.'<br>';
        }
    }
////通知所有观察者
    function notify()
    {

        foreach($this->observers as $observer)
        {
            $observer->update();
        }
    }

}
