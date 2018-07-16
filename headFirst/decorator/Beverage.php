<?php
namespace headFirst\decorator;
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/16
 * Time: 18:12
 * 装饰者模式
 */
interface  Beverage
{
    public function cost();
    public function getDescription();
}