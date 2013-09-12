<?php
/* ######################################################
 *  Ramón Iglesias
 *  monchomail@gmail.com 
 *  12-08-2012
 * ###################################################### */
$english = array(

	'auto_sitemap:sitemap-learn-more' => 'If you want to learn more about sitemaps visit: ',
	'auto_sitemap:recordatorio:htaccess' => 'Remember to add the necessary lines to your .htaccess (Read the README.TXT)',

	'auto_sitemap:entity-urls:title' =>'Entity URLs',
	'auto_sitemap:entity-urls:description' =>'Choose which items you want to add to your sitemap',
	'auto_sitemap:custom-urls:title' =>'Custom URLs',
	'auto_sitemap:custom-urls:description' =>'Additionally you can manually specify custom URLs of your website. For example static pages, help pages, etc.',

	'auto_sitemap:basic-config:title' => 'Basic configuration',
	'auto_sitemap:max_urls:title' => 'Max number of URLs in each sitemap',
	'auto_sitemap:max_urls:description' => 'Google recommends to keep in the sitemap only latest URLs. This will save you a lot of traffic and your old urls will remain indexed in the search engines ',
	'auto_sitemap:use_xsl:title' => 'Use stylesheet in the sitemap?',
	'auto_sitemap:use_xsl:description' => 'If enabled, you will be able to navigate between different sitemaps via links as in a html document, and will not affect the way that search engines treat your sitemap. <b>If you have some kind of problem to see the sitemap disable this option</b>',
	
	'auto_sitemap:esquema:title' => 'Scheme of the sitemap',
	'auto_sitemap:esquema:description' => 'For the time being there is only implemented version 0.9 of sitemaps.org.',
	'auto_sitemap:main_url:title' => 'Main URL of the site',


	/* Opciones dropdown*/
	'auto_sitemap:updatefreq:disabled' => 'disabled (Skip this value)',
	'auto_sitemap:updatefreq:always' => 'continuously (always)',
	'auto_sitemap:updatefreq:hourly' => 'every hour (hourly)',
	'auto_sitemap:updatefreq:daily' => 'every day (daily)',
	'auto_sitemap:updatefreq:weekly' => 'every week (weekly)',
	'auto_sitemap:updatefreq:monthly' => 'every month (monthly)',
	'auto_sitemap:updatefreq:yearly' => 'every year (yearly)',
	'auto_sitemap:updatefreq:never' => 'never (never)',
	
	'auto_sitemap:module:header:changefreq' => 'URLs that get updated ',
	'auto_sitemap:changefreq_url:description' => 'Each URL in one line',
	
	'auto_sitemap:other_entities:description' => 'Choose other entities to include in the sitemap',

	'auto_sitemap:module:active:entity' => 'Add %s to sitemap? ',
	'auto_sitemap:entity:user:title' => 'user profiles',
	'auto_sitemap:entity:group:title' => 'groups profiles',
	'auto_sitemap:entity:blog:title' => 'blog posts',
	'auto_sitemap:entity:file:title' => 'uploaded files',
	'auto_sitemap:entity:event:title' => 'events from event_calendar',
	'auto_sitemap:entity:otros:title' => 'other entities',
		
	'option:yes' => 'Yes',
	'option:no' => 'No',

	'auto_sitemap:priority:none' => 'None',
	'auto_sitemap:changefreq:description' => 'Choose a value for the changefreq atribute',
	'auto_sitemap:priority:description' => 'Choose a priority for this URLs',

);
add_translation("en", $english);	
