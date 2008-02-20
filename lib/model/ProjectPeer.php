<?php

/**
 * Subclass for performing query and update operations on the 'hoydaa_project' table.
 *
 * 
 *
 * @package lib.model
 */ 
class ProjectPeer extends BaseProjectPeer
{
    public static function retrieveByTag($tag) {
        $c = new Criteria();
        $c->add(ProjectPeer::TAG, $tag);
        return ProjectPeer::doSelectOne($c);
    }
}
