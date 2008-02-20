<?php

class userActions extends autouserActions
{
    protected function updateUserFromRequest()
    {
        if(!$this->user->getId() && !$this->getRequestParameter('password')) {
            $password = substr(md5(rand(100000, 999999)), 0, 6);
            $this->user->setPassword($password);
        }
        
        if($this->getRequestParameter('password')) {
            $this->user->setPassword($this->getRequestParameter('password'));
        }
        
        parent::updateUserFromRequest();
    }
}