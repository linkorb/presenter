<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use LinkORB\Presenter\BasePresenter;
use LinkORB\Presenter\PresenterTrait;

class Contact
{
    public $firstname;
    public $lastname;
    public static $presenterClassName = 'ContactPresenter';
    
    use PresenterTrait;
    
    public function getFirstname()
    {
        return $this->firstname;
    }
    
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }
    
    public function getLastname()
    {
        return $this->lastname;
    }
    
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
        return $this;
    }
}

class ContactPresenter extends BasePresenter
{
    public function getDisplayName()
    {
        return $this->presenterObject->getFirstname() . ' ' . $this->presenterObject->getLastname();
    }
}


$contact = new Contact();
$contact->setFirstname('John');
$contact->setLastname('Johnson');

$contactPresenter = $contact->getPresenter();

echo $contactPresenter->getDisplayName() . "\n";
echo $contactPresenter->getFirstname() . "\n";
echo $contactPresenter->lastname . "\n";
