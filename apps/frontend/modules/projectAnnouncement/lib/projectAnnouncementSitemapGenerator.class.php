<?php
class projectAnnouncementSitemapGenerator implements sitemapGenerator
{
    public static function generate() {
    	$urls = array();
    	$items = ProjectAnnouncementPeer::doSelect(new Criteria());
    	foreach($items as $item) {
    		$urls[] = new sitemapURL('project/showAnnouncement?id='.$item->getId(), date('M j, Y', strtotime($item->getCreatedAt())));
    	}
    	return $urls;
    }
}