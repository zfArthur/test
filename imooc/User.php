<?php



ini_set('display_errors', 1);
error_reporting(E_ALL);//排除NOTICE错误

//数据对象映射模式

class User {

    public  $uid;
    public  $mobile;
    protected  $db;
    protected  static $userObj;

    public function __construct()
    {
        $this->db = new IMooc\Database\MySQLi();
        $this->db->connect('127.0.0.1','root','123456','test01');

        $res= $this->db->query("select * from xboss_account limit 1");
        $data = $res->fetch_assoc();
        $this->uid = $data['uid'];
        $this->mobile = $data['mobile'];

    }

    public function __destruct()
    {

        $this->db->query("update xboss_account set  uid ='$this->uid ', mobile ='$this->mobile' where uid = 2");
    }

    /**
     * @return \IMooc\Database\MySQLi
     */
    public static function getInstance()
    {
        if (self::$userObj){
            return self::$userObj;
        }else{
            self::$userObj = new self();
            return self::$userObj;
        }

    }




}
