<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/16
 * Time: 18:24
 */

namespace headFirst\decorator;


class Whip extends Decorator
{
    public $description = 'Whip';

    public $cost = 1.2;

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