<?php
/**
 * Created by PhpStorm.
 * User: zhangfu
 * Date: 2017/6/19
 * Time: 下午2:41
 */


namespace IMooc;

class FemaleUserStrategy implements UserStrategy{

    function showAd()
    {
        echo '女装展示';
    }
    function showCategory()
    {
        echo '女装分类';
    }

}