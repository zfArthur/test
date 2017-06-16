<?php
/**
 * Created by PhpStorm.
 * User: zhangfu
 * Date: 2017/6/12
 * Time: 上午10:30
 *
 *
 * 抽象观察者接口
 */

namespace App\Http\Controllers\Home;
interface Observer
{
    function update($event_info = null);
}
