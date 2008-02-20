<?php

/**
 * Subclass for performing query and update operations on the 'hoydaa_user' table.
 *
 * 
 *
 * @package lib.model
 */ 
class UserPeer extends BaseUserPeer
{
    public static function retrieveByUserName($username)
    {
        $c = new Criteria();
        $c->add(UserPeer::USERNAME, $username);
        return UserPeer::doSelectOne($c);
    }
}
