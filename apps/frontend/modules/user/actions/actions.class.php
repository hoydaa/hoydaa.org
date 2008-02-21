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

    public function executeProfile() {
        $this->tab = 'home';
    	$this->pages = array (
    	    array ('label' => 'Home')
    	);        
        $this->user = UserPeer::retrieveByPK($this->getContext()->getUser()->getSubscriberId());
        if(sizeof($this->user->getDevelopers()) > 0) {
            $this->developer =  $this->user->getDevelopers();
            $this->developer = $this->developer[0];
        } else {
            $this->developer = null;   
        }        
        return sfView::SUCCESS;
    }
    
    public function executeChangeProfile() {
        $this->tab = 'home';
    	$this->pages = array (
    	    array ('label' => 'Home')
    	);
        if ($this->getRequest()->getMethod() != sfRequest::POST)
        {
            $this->user = UserPeer::retrieveByPK($this->getContext()->getUser()->getSubscriberId());
            if(sizeof($this->user->getDevelopers()) > 0) {
                $this->developer =  $this->user->getDevelopers();
                $this->developer = $this->developer[0];
            } else {
                $this->developer = null;   
            }
            return sfView::SUCCESS;
        }
        else
        {
            $this->user = UserPeer::retrieveByPK($this->getContext()->getUser()->getSubscriberId());
            if(sizeof($this->user->getDevelopers()) > 0) {
                $this->developer =  $this->user->getDevelopers();
                $this->developer = $this->developer[0];
                $this->developer->setOrganizationName($this->getRequestParameter('organization_name'));
                $this->developer->setOrganizationUrl($this->getRequestParameter('organization_url'));
                $this->developer->save();                
            } else {
                $this->developer = null;   
            }
            $this->user->setFirstName($this->getRequestParameter('first_name'));
            $this->user->setLastName($this->getRequestParameter('last_name'));
            $this->user->save();
            $this->getRequest()->setError('form-message', 'Profile saved.');
            return sfView::SUCCESS;
        }  	                
    }
    
    public function handleErrorChangeProfile() {
            $this->ready();;
            $this->user = UserPeer::retrieveByPK($this->getContext()->getUser()->getSubscriberId());
            if(sizeof($this->user->getDevelopers()) > 0) {
                $this->developer =  $this->user->getDevelopers();
                $this->developer = $this->developer[0];
            } else {
                $this->developer = null;   
            }
            return sfView::SUCCESS;
    }
    
    public function executeEmailSettings() {
        $this->ready();
        if ($this->getRequest()->getMethod() != sfRequest::POST)
        {
            return sfView::SUCCESS;
        }
        else
        {
            $this->getRequest()->setError('form-message', 'Email address saved.');            
            return sfView::SUCCESS;
        }  	                        
    }
    
    public function handleErrorEmailSettings() {
        $this->ready();
        return sfView::SUCCESS;
    }
    
    public function executeProjects() {
        $this->ready();
        $criteria = new Criteria();
        $criteria->addJoin(ProjectPeer::ID, ProjectDeveloperPeer::PROJECT_ID);
        $criteria->addJoin(ProjectDeveloperPeer::DEVELOPER_ID, DeveloperPeer::ID);
        $criteria->add(DeveloperPeer::USER_ID, $this->getContext()->getUser()->getSubscriberId());
        $this->projects = ProjectPeer::doSelect($criteria);
        return sfView::SUCCESS;
    }
    
    public function ready() {
        $this->tab = 'home';
    	$this->pages = array (
    	    array ('label' => 'Home')
    	);        
    }
}
