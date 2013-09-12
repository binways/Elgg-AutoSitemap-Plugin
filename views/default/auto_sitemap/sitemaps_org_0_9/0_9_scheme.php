<?php
header ("Content-Type:text/xml");

$body .='<?xml version="1.0" encoding="UTF-8"?>';

if ( $vars['flagXsl'] ){
	$body .='<?xml-stylesheet type="text/xsl" href="' . $CONFIG->url. 'sitemap.xsl"?>
<urlset
	xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
	xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
	xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9
	http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

';
		
}else{
	$body .='
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
';
	
}


$body .= elgg_view('auto_sitemap/sitemaps_org_0_9/0_9_element',array('urls' => $vars['urls']));

$body .='
</urlset>';

echo $body;