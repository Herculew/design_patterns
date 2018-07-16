<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/4
 * Time: 16:51
 */

namespace headFirst\observer;


class Observer implements \SplObserver
{

    public function update(\SplSubject $splSubject)
    {
        echo  111;
    }
}