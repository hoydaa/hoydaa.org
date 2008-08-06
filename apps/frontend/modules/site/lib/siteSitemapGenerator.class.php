<?php
class siteSitemapGenerator implements sitemapGenerator
{
    public static function generate() {
    	$urls = array();
    	$urls[] = new sitemapURL('about_us', date('Y-m-d\TH:i:s\Z'), 'monthly', 0.8);
    	return $urls;
    }
}