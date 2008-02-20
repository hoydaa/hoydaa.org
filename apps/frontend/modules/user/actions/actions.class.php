<?php

/**
 * user actions.
 *
 * @package    hoydaa
 * @subpackage user
 * @author     Your name here
 * @version    SVN: $Id$
 */
class userActions extends sfActions
{
    public function executeIndex()
    {
        $this->forward('user', 'profile');
    }
  
    public function executeLogin() 
    {
        $this->tab = 'home';
    	$this->pages = array (
    	    array ('label' => 'Home')
    	);
        $this->projects = ProjectPeer::doSelect(new Criteria());
        if ($this->getRequest()->getMethod() != sfRequest::POST)
        {
            // display the form
            $this->getRequest()->getParameterHolder()->set('referer', $this->getRequest()->getReferer()); 
            return sfView::SUCCESS;
        }
        else
        {
            // handle the form submission
            // redirect to last page
            return $this->redirect($this->getRequestParameter('referer', '@homepage'));
        }  	        
    }
    
    public function executeLogout()
    {
        $this->getUser()->signOut(); 
        
        $this->redirect('@homepage');
    }    
    
    public function handleErrorLogin()
    {
        $this->tab = 'home';
    	$this->pages = array (
    	    array ('label' => 'Home')
    	);
        $this->projects = ProjectPeer::doSelect(new Criteria());        
        return sfView::SUCCESS;
    }        
}
