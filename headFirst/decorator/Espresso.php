<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/16
 * Time: 18:14
 */

namespace headFirst\decorator;


class Espresso implements  Beverage
{

    private $description = 'Espresso';
    public function getDescription()
    {
        return $this->description;
    }

    public function cost()
    {
        return 1.99;
    }
}