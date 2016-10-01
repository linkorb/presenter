<?php

require_once(__DIR__ . '/../vendor/autoload.php');

use LinkORB\Presenter\BasePresenter;

class Contact
{
    protected $firstname;
    protected $lastname;
    
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

$contactPresenter = new ContactPresenter($contact);
echo $contactPresenter->getDisplayName() . "\n";
