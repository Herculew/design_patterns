<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/29
 * Time: 16:42
 */
use headFirst\DuckSpecific;


spl_autoload_register(function($className) {
    $className = ltrim($className, '\\');
    $fileName  = '';
    $namespace = '';
    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName  =  __DIR__.'\\'.str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }

    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';

    require $fileName;
});

// todo 策略模式

//$object = new \headFirst\behavior\DuckSpecific();
//$object->performFly();
//$object->setFlyBehavior(new \headFirst\behavior\FlyWithWings());
//
//$object->performFly();



//todo 观察者模式

//$object = new \headFirst\observer\Login();
//
//$object->loginAccount();


//todo 装饰者模式

$decorator = new \headFirst\decorator\Espresso();
$decorator = new \headFirst\decorator\Mocha($decorator);
$decorator = new \headFirst\decorator\Soy($decorator);
$decorator = new \headFirst\decorator\Whip($decorator);

echo $decorator->getDescription();
echo PHP_EOL;
echo $decorator->cost();







