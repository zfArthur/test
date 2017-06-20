<?php
/**
 * Created by PhpStorm.
 * User: zhangfu
 * Date: 2017/6/19
 * Time: 下午2:41
 */


namespace IMooc;

class MaleUserStrategy implements UserStrategy{

    function showAd()
    {
        echo '男装展示';
    }
    function showCategory()
    {
        echo '男装分类';
    }

}