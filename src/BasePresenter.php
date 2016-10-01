<?php

namespace LinkORB\Presenter;

use InvalidArgumentException;

class BasePresenter
{
    protected $presenterObject;
    
    public function __construct($presenterObject)
    {
        if (!is_object($presenterObject)) {
            throw new InvalidArgumentException("Constructor expects a model class");
        }
        
        $this->presenterObject = $presenterObject;
    }
    
    public function __call($method, $arguments)
    {
        $res = call_user_func_array(array($this->presenterObject, $method), $arguments);
        return $res;
    }
    
    public function __get($var)
    {
        return $this->presenterObject->$var;
    }
}
