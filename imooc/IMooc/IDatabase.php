<?php

namespace  IMooc;


//适配器模式

interface  IDatabase
{
    public function connect($host,$user,$passwd,$dbname);

    public function query($sql);

    public function close();

}
