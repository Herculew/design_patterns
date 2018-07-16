<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/29
 * Time: 16:53
 */

namespace headFirst\behavior;


class FlyNoWay implements  FlyBehavior
{
    public function fly()
    {
        echo  'FlyNoWay';
    }
}