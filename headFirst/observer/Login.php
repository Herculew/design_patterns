<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/4
 * Time: 19:58
 */

namespace headFirst\observer;


class Login
{

    protected $subject;
    public function __construct()
    {
        $this->subject = new Subject;
    }

    public function loginAccount()
    {
        $this->subject->attach(new Email);
        $this->subject->attach(new Observer);
        $this->subject->notify();
    }
}