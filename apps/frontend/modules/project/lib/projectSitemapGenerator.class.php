<?php
class projectSitemapGenerator implements sitemapGenerator
{
    public static function generate() {
    	$urls = array();
    	$urls[] = new sitemapURL('projects', date('Y-m-d\TH:i:s\Z'), 'weekly', 1.0);
    	$projects = ProjectPeer::doSelect(new Criteria());
    	foreach($projects as $project) {
    		$urls[] = new sitemapURL('projects/'.$project->getTag(), date('Y-m-d\TH:i:s\Z'), 'weekly', 0.8);
    		$urls[] = new sitemapURL('project/listDevelopers?id='.$project->getTag(), date('Y-m-d\TH:i:s\Z'), 'weekly', 0.8);
    	}
    	return $urls;
    }
}