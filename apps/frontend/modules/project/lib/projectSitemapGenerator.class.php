<?php
class projectSitemapGenerator implements sitemapGenerator
{
    public static function generate() {
    	$urls = array();
    	$projects = ProjectPeer::doSelect(new Criteria());
    	foreach($projects as $project) {
    		$urls[] = new sitemapURL('projects/'.$project->getTag(), date('F j, Y'));
    		$urls[] = new sitemapURL('project/listDevelopers?id='.$project->getTag(), date('F j, Y'));
    	}
    	return $urls;
    }
}