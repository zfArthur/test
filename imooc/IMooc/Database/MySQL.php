<?php
/**
 * Created by PhpStorm.
 * User: zhangfu
 * Date: 2017/6/19
 * Time: 上午10:55
 */

namespace IMooc\Database;

use IMooc\IDatabase;


class MySQL implements IDatabase{


        protected $conn;
        function connect($host, $user, $passwd, $dbname)
        {
            $conn=mysql_connect($host,$user, $passwd);
            mysql_select_db($dbname,$conn);
            $this->conn = $conn;

        }

        function query($sql)
        {

            $res=mysql_query($sql,$this->conn);
            return $res;
        }

        function close()
        {
           mysql_close($this->conn);
        }

}


