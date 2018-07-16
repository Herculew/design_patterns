<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/4
 * Time: 16:47
 */

namespace headFirst\observer;


class Subject implements \SplSubject
{

    protected $_observers;
    protected $changed;

    public function __construct()
    {
        $this->_observers = new \SplObjectStorage();
    }

    public function attach(\SplObserver $splObserver)
    {
        $this->_observers->attach($splObserver);
    }

    public function detach(\SplObserver $splObserver)
    {
        $this->_observers->detach($splObserver);
    }

    /**                       todo 新增的三个东西                                              */
    /**
     * 开关
     * @Author:hercule<wenhaoquan>
     * @date:ct
     */
    public function setChanged(){$this->changed = true;}

    public function clearChanged(){$this->changed = false;}


    public function hasChanged(){return $this->changed;}

    /**-------------------------------------------------------*/
    /**
     * @Author:hercule<wenhaoquan>
     * @date:2018/7/4 20:22
     */
    public function notify()
    {
        if(!empty($this->_observers)){
            foreach ($this->_observers as $observer){
                $observer->update($this);
            }
            $this->setChanged();
        }
    }
}