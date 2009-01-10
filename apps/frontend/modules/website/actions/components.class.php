<?php

class websiteComponents extends sfComponents
{
    public function executeWebsites()
    {
        $this->websites = WebsitePeer::doSelect(new Criteria());
    }
}
