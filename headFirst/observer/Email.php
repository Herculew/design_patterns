<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/4
 * Time: 20:02
 */

namespace headFirst\observer;


class Email implements \SplObserver
{
    public function update(\SplSubject $subject)
    {
        echo 2222;
    }
}