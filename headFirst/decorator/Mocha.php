<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/16
 * Time: 18:20
 */

namespace headFirst\decorator;


class Mocha extends Decorator
{
    public $description = 'Mocha';
    public $cost = .5;

    public function getDescription()
    {
        // TODO: Implement getDescription() method.
        return $this->beverage->getDescription().', '.$this->description;
    }

    public function cost()
    {
        // TODO: Implement cost() method.
        return $this->beverage->cost() + $this->cost;
    }
}