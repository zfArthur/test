<?php

namespace  IMooc;

class Factory{


    public static function createDatabase(){


        $Db = new Database;

        return $Db;
    }


}