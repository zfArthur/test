<?php
/**
 * Created by PhpStorm.
 * User: zhangfu
 * Date: 2017/6/20
 * Time: 下午2:37
 */

namespace IMooc;

class ColorDrawDecorator implements DrawDecorator
{
    protected $color;
    function __construct($color = 'red')
    {
        $this->color = $color;
    }
    function beforeDraw()
    {
        echo "<div style='color: {$this->color};'>";
    }
    function afterDraw()
    {
        echo "</div>";
    }
}