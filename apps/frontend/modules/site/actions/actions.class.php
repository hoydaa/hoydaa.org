<?php

class siteActions extends sfActions
{
    public function executeIndex()
    {
        $this->tab = 'home';
    	$this->pages = array (
    	    array ('label' => 'Home')
    	);
        $this->announcements = ProjectAnnouncementPeer::getRecent(5);
        $this->projects = ProjectPeer::doSelect(new Criteria());
    }

    public function executeAboutUs()
    {
        $this->tab = 'about_us';
        $this->pages = array (
    	    array ('label' => 'Home', 'url' => '@homepage'),
    	    array ('label' => 'About Us')
    	);
    }

    public function executeContent()
    {
        $this->content = $this->getRequestParameter("content");
        $this->forward404Unless($this->partialExists($this->getContext(), $this->content));
    }

    protected function partialExists($context, $name) {
        $directory = $context->getModuleDirectory();

        if (is_readable($directory . DIRECTORY_SEPARATOR ."templates". DIRECTORY_SEPARATOR ."_". $name .".php")) {
            return true;
        } else {
            return false;
        }
    }
}