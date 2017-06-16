<?php

namespace  IMooc;

class Database{

protected  $db;
private function __construct(){



}

public  static function getInstance(){

    if(self::$db){
        return self::$db;
    }else{

        self::$db = new self();

        return self::$db;
    }

}

}