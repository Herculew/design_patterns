<?php
namespace headFirst\behavior;

use headFirst\behavior\FlyBehavior;
use headFirst\behavior\FlyNoWay;
use headFirst\behavior\QuackBehavior;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/29
 * Time: 16:38
 */
abstract class Duck
{
    public  $flyBehavior;
    public  $quackBehavior;


    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
//        $this->flyBehavior = new FlyNoWay();
    }

    /**
     * @param FlyBehavior $flyBehavior
     * @Author:hercule<wenhaoquan>
     * @date:2018/7/2 14:39
     */
    public function  setFlyBehavior(FlyBehavior $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    /**
     * @param QuackBehavior $quackBehavior
     * @Author:hercule<wenhaoquan>
     * @date:2018/7/2 14:39
     */
    public function  setQuackBehavior(QuackBehavior $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }

    public function  performQuack(){
        $this->quackBehavior->quack();
    }
    public function  performFly(){
        $this->flyBehavior->fly();
    }

}