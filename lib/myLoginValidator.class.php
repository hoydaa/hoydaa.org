<?php
 
class myLoginValidator extends sfValidator
{    
  public function initialize($context, $parameters = null)
  {
    // initialize parent
    parent::initialize($context);
 
    // set defaults
    $this->setParameter('login_error', 'Invalid input');
 
    $this->getParameterHolder()->add($parameters);
 
    return true;
  }
 
  public function execute(&$value, &$error)
  {
    $password_param = $this->getParameter('password');
    $password = $this->getContext()->getRequest()->getParameter($password_param);
 
    $login = $value;
 
    // anonymous is not a real user
    if ($login == 'anonymous')
    {
      $error = $this->getParameter('login_error');
      return false;
    }
    
    $user = UserPeer::retrieveByUsername($login);
 
    // nickname exists?
    if ($user)
    {
      // password is OK?
      if (sha1($user->getSalt().$password) == $user->getSha1Password())
      {
      	$this->getContext()->getUser()->signIn($user);
 
        return true;
      }
    }
 
    $error = $this->getParameter('login_error');
    return false;
  }
}