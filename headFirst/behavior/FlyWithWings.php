<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/29
 * Time: 16:53
 */

namespace headFirst\behavior;


class FlyWithWings implements  FlyBehavior
{
    public function fly()
    {
        echo  'FlyWithWings';
    }
}