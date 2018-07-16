<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/16
 * Time: 18:24
 */

namespace headFirst\decorator;


class Soy extends Decorator
{

    public $description = 'Soy';
    public $cost = .65;

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