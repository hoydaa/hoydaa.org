<?php

class projectAnnouncementActions extends sfActions
{
    public function executeList()
    {
        $this->tab = 'none';
        $this->pages = array (
    	    array ('label' => 'Home', 'url' => '@homepage'),
    	    array ('label' => 'Announcements')
    	);
        $this->projectAnnouncementPager = ProjectAnnouncementPeer::getPager($this->getRequestParameter('page', 1));
    }
}