<?php
/**
 * Created by PhpStorm.
 * User: zhangfu
 * Date: 2017/6/19
 * Time: 上午11:01
 */


abstract class abstrct01
{
    /** 抽象类中可以定义变量 */
    protected $value1 = 0;
    private $value2 = 1;
    public $value3 = 2;
    /** 也可以定义非抽象方法 */
    public function my_print()
    {
        echo "hello,world/n";
    }
    /**
     * 大多数情况下，抽象类至少含有一个抽象方法。抽象方法用abstract关键字声明，其中不能有具体内容。
     * 可以像声明普通类方法那样声明抽象方法，但是要以分号而不是方法体结束。也就是说抽象方法在抽象类中不能被实现，也就是没有函数体“{some codes}”。
     */
    abstract protected function abstract_func1();
    abstract protected function abstract_func2();
}
