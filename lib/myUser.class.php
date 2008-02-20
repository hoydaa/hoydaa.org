<?php

class myUser extends sfBasicSecurityUser
{
  public function signIn($user)
  {
    $this->setAttribute('subscriber_id', $user->getId(), 'subscriber');
    $this->setAuthenticated(true);
 
    $this->setAttribute('username', $user->getUsername(), 'subscriber');
    $credentials = explode(",", $user->getRoles());
    foreach($credentials as $credential)
    {
      $this->addCredential($credential);
    }
    
  }
  
  public function signOut()
  {
    $this->getAttributeHolder()->removeNamespace('subscriber');
 
    $this->setAuthenticated(false);
    $this->clearCredentials();
  }
  
  public function getSubscriberId()
  {
    return $this->getAttribute('subscriber_id', '', 'subscriber');
  }
 
  public function getSubscriber()
  {
    return UserPeer::retrieveByPk($this->getSubscriberId());
  }
 
  public function getUsername()
  {
    return $this->getAttribute('username', '', 'subscriber');
  }
  
}
