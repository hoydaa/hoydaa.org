<?php

class ProjectAnnouncementPeer extends BaseProjectAnnouncementPeer
{
    public static function getRecent($max = 10, $project_id = null)
    {
        $c = new Criteria();
        $c->addDescendingOrderByColumn(self::CREATED_AT);
        if ($project_id)
        {
            $c->add(ProjectAnnouncementPeer::PROJECT_ID, $project_id);
        }
        $c->setLimit($max);

        return self::doSelect($c);
    }

    public static function getPager($page, $project_id = null)
    {
        $c = new Criteria();
        $c->addDescendingOrderByColumn(ProjectAnnouncementPeer::CREATED_AT);

        if ($project_id)
        {
            $c->add(ProjectAnnouncementPeer::PROJECT_ID, $project_id);
        }

        $pager = new sfPropelPager('ProjectAnnouncement', sfConfig::get('app_pager_max'));
        $pager->setCriteria($c);
        $pager->setPage($page);
        $pager->init();

        return $pager;
    }
}