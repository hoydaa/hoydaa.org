<?php
class siteSitemapGenerator implements sitemapGenerator
{
    public static function generate() {
    	$urls = array();
    	$urls[] = new sitemapURL('about_us', date('M j, Y'));
    	return $urls;
    }
}