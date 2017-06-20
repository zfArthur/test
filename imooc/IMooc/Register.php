<?php


namespace IMooc;
//注册器模式

class Register{

protected static $objects;

    public static  function set($alias,$object){

        self::$objects[$alias] = $object;


    }

    public static  function get($name){

       return self::$objects[$name];
    }


    public static  function _unset($alias){

        unset(self::$objects[$alias]);
    }
}
