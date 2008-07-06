<?php
class homeSitemapGenerator implements sitemapGenerator
{
    public static function generate() {
    	$urls = array();
    	$urls[] = new sitemapURL('about_us', date('F j, Y'));
    	return $urls;
    }
}