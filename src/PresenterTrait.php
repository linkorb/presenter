<?php

namespace LinkORB\Presenter;

use LinkORB\Presenter\Exception\PresenterException;

trait PresenterTrait
{
    protected $presenter;
        
    public function getPresenter()
    {
        $className = get_class($this);
        if (!$this->presenter) {
            $presenterClassName = $this->getPresenterClassName();
            $this->presenter = new $presenterClassName($this);
        }
        return $this->presenter;
    }
    
    public function getPresenterClassName()
    {
        $className = get_class($this);
        // Use static public property on self
        if (isset(self::$presenterClassName)) {
            $presenterClassName = self::$presenterClassName;
            if (class_exists($presenterClassName)) {
                return $presenterClassName;
            }
        }
        // Use current classname, and append `Presenter`
        $presenterClassName = $className . 'Presenter';
        if (class_exists($presenterClassName)) {
            return $presenterClassName;
        }
        
        // Use namespace convention
        $presenterClassName = str_replace('\\Model\\', '\\Presenter\\', $className) . 'Presenter';
        if (class_exists($presenterClassName)) {
            return $presenterClassName;
        }

        throw new PresenterException("Can't resolve presenterClassName for class: " . $className);
    }
}
