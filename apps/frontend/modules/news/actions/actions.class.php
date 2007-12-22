<?php

class newsActions extends sfActions
{
    public function executeList()
    {
        $c = new Criteria();
        $c->add(NewsPeer::PROJECT_ID, $this->getRequestParameter('project_id'));

        $this->newss = NewsPeer::doSelect($c);
    }

    public function executeShow()
    {
        $this->news = NewsPeer::retrieveByPK($this->getRequestParameter('id'));
    }
}