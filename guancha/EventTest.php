<?php
/**
 * Created by PhpStorm.
 * User: zhangfu
 * Date: 2017/6/12
 * Time: 上午9:49
 */
namespace App\Http\Controllers\Home;

//具体被观察者 服务端
class Event extends    EventGenerator
{
    //具体被观察者业务 发布一条信息，并通知所有客户端
    public    function   trigger(){

        echo '今天天气很好，我发布了更新包'.'<br>';

        $this->notify();

    }
}
//具体观察者类

//具体的观察者1
class observer1 implements Observer{

    function update($event_info = null)
    {
        echo '逻辑1<br>';
    }

}

//具体的观察者2
class observer2 implements Observer{

    function update($event_info = null)
    {
        echo '逻辑2<br>';
    }

}
//测试例子
class EventTest{
    public  function  test(){

        //实例化被观察者
        $event = new Event();
        //增加观察者
        $event->addObserver(new observer1);
        $event->addObserver(new observer2);
        //被观察者 发布信息 更新事件
        $event->trigger();

        //删除观察者
        $event->delObserver(new observer1);
    }

}

