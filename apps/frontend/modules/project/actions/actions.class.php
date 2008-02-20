<?php

class projectActions extends sfActions
{
    public function executeIndex()
    {
        $this->forward('project', 'list');
    }

    public function executeList()
    {
        $this->tab = 'projects';
        $this->pages = array (
    	    array ('label' => 'Home', 'url' => '@homepage'),
    	    array ('label' => 'Projects')
    	);
        $this->projects = ProjectPeer::doSelect(new Criteria());
    }

    public function executeShow()
    {
        $this->tab = 'projects';
        $this->project = ProjectPeer::retrieveByTag($this->getRequestParameter('id'));
        $this->pages = array (
    	    array ('label' => 'Home', 'url' => '@homepage'),
    	    array ('label' => 'Projects', 'url' => 'project/list'),
    	    array ('label' => $this->project->getName())
    	);
        $this->announcements = ProjectAnnouncementPeer::getRecent(5, $this->getRequestParameter('id'));
        $this->forward404Unless($this->project);
    }

    public function executeListAnnouncements()
    {
        $this->project = ProjectPeer::retrieveByTag($this->getRequestParameter('id'));
        $this->projectAnnouncementPager = ProjectAnnouncementPeer::getPager($this->getRequestParameter('page', 1), $this->getRequestParameter('id'));
        $this->tab = 'projects';
        $this->pages = array (
    	    array ('label' => 'Home', 'url' => '@homepage'),
    	    array ('label' => 'Projects', 'url' => 'project/list'),
    	    array ('label' => $this->project->getName(), 'url' => 'project/show?id='.$this->project->getTag()),
    	    array ('label' => 'Announcements')
    	);
    }

    public function executeShowAnnouncement()
    {
        $this->announcement = ProjectAnnouncementPeer::retrieveByPK($this->getRequestParameter('id'));
        $this->project = $this->announcement->getProject();
        $this->tab = 'projects';
        $this->pages = array (
    	    array ('label' => 'Home', 'url' => '@homepage'),
    	    array ('label' => 'Projects', 'url' => 'project/list'),
    	    array ('label' => $this->project->getName(), 'url' => 'project/show?id='.$this->project->getTag()),
    	    array ('label' => 'Announcements')
    	);
    }

    public function executeListDevelopers()
    {
        $this->tab = 'projects';
        $this->project = ProjectPeer::retrieveByTag($this->getRequestParameter('id'));
        $this->pages = array (
    	    array ('label' => 'Home', 'url' => '@homepage'),
    	    array ('label' => 'Projects', 'url' => 'project/list'),
    	    array ('label' => $this->project->getName(), 'url' => 'project/show?id='.$this->project->getTag()),
    	    array ('label' => 'Project Team')
    	);
        $this->developers = $this->project->getDevelopers();
    }
}