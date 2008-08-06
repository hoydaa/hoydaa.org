<?php
class projectAnnouncementSitemapGenerator implements sitemapGenerator
{
    public static function generate() {
    	$urls = array();
    	$items = ProjectAnnouncementPeer::doSelect(new Criteria());
    	foreach($items as $item) {
    		$urls[] = new sitemapURL('project/showAnnouncement?id='.$item->getId(), date('Y-m-d\TH:i:s\Z', strtotime($item->getCreatedAt())), 'monthly', 1.0);
    	}
    	return $urls;
    }
}