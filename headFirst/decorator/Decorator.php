<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/16
 * Time: 18:17
 */

namespace headFirst\decorator;


abstract class Decorator implements Beverage
{
    public $beverage;
    public $description = 'Unknown  Decorator';

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    abstract public function getDescription();
    abstract public function cost();
}