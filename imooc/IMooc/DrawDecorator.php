<?php
/**
 * Created by PhpStorm.
 * User: zhangfu
 * Date: 2017/6/20
 * Time: 下午2:34
 */

namespace IMooc;

interface DrawDecorator
{
    function beforeDraw();
    function afterDraw();
}