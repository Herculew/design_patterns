<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/16
 * Time: 18:16
 */

namespace headFirst\decorator;


class HouseBlend implements Beverage
{
    private $description = 'HouseBlend';

    public function getDescription()
    {
        // TODO: Implement getDescription() method.
        return $this->description;
    }

    public function cost()
    {
        // TODO: Implement cost() method.
        return 2.99;
    }
}