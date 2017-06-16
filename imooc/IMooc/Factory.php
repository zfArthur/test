<?php

namespace  IMooc;

class Factory{


    public static function createDatabase(){


        $Db = Database::getInstance();

        return $Db;
    }


}