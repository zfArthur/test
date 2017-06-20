<?php
/**
 * Created by PhpStorm.
 * User: zhangfu
 * Date: 2017/6/19
 * Time: 上午10:56
 */

namespace IMooc\Database;

use IMooc\IDatabase;

class PDO implements IDatabase{

    protected  $conn;

    public function connect($host, $user, $passwd, $dbname)
    {

       $conn1 = new PDO("mysql:host = $host;dbname = $dbname",$user,$passwd);
        $this->conn = $conn1;
    }

    public function  query($sql)
    {
        return $this->conn->query($sql);
    }

    public function close()
    {
        unset($this->conn);
    }

}