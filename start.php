<?php
/* ######################################################
 *  Ramón Iglesias
 *  monchomail@gmail.com 
 *  12-08-2012
 * ###################################################### */

elgg_register_event_handler('init', 'system', 'auto_sitemap_init');

// Busco las entidades que deben aparecer en el sitemap y se las paso a la vista
global $relevantEntities;
$relevantEntities = Array('user' , 'group' , 'blog' ,'file' , 'event');	


/* =============================================================== */
function auto_sitemap_init() {
	
	// Registro el controlador
	elgg_register_page_handler('auto_sitemap','auto_sitemap_page_handler');

}

/* =============================================================== */
function auto_sitemap_page_handler($page) {

	$esquema = elgg_get_plugin_setting('esquema');
	if ( empty( $esquema )){
		$esquema = 'sitemap_org_0_9';
	}
	
	// incluir o no los estilos
	$flagXsl = elgg_get_plugin_setting('use_xsl');
	
	switch ($page[0]) {
		
		// ------------------------------------------------------------------------------------
		case 'index':		

			// custom URLs
			$sitemaps[] = 'custom' ;

			// relevant entities
			global $relevantEntities;
			
			foreach ($relevantEntities as $entity) {
				if ( elgg_get_plugin_setting( $entity . '_url') ){
					$sitemaps[] = $entity;
				}
			}			
			
			// other entities
			$otherActiveEntities = array_filter(explode(',' , elgg_get_plugin_setting('other_urls_types')));
			
			if ( !empty($otherActiveEntities)){
				$sitemaps[] = 'other' ;
			}

			// Pinto el sitemap (indice) 
			echo elgg_view('auto_sitemap/' . $esquema . "/sitemapindex", array('sitemaps' => $sitemaps,'flagXsl'=> $flagXsl));
			
			return true;
			
		break;

		// ------------------------------------------------------------------------------------
		case 'custom':		
			
			$tipos = Array( 'always' , 'hourly' , 'daily' ,'weekly' , 'monthly', 'yearly', 'never');					
			$urls = auto_sitemap_getCustomUrls( $tipos );

			// if no custom urls configured, sitemap doesnt exists
			if ( empty($urls) ){				
				// sitemap doesnt exists
				return false;
								
			}else{
				echo elgg_view('auto_sitemap/' . $esquema . "/0_9_scheme", array('urls' => $urls,'flagXsl'=> $flagXsl));				
				return true;
												
			}
			
			
		break;
		
		// ------------------------------------------------------------------------------------		
		case 'user':		
		case 'group':		
		case 'blog':		
		case 'file':		
		case 'event':					
				
			$urls = auto_sitemap_getEntityUrls( $page[0] );			

			// if this entity is not active in settigs sitemap doesnt exists
			if ( ! elgg_get_plugin_setting($page[0] . '_url') ){				
				return false;
								
			}else{
				echo elgg_view('auto_sitemap/' . $esquema . "/0_9_scheme", array('urls' => $urls,'flagXsl'=> $flagXsl));				
				return true;
												
			}			
			
		break;
		
		// ------------------------------------------------------------------------------------				
		case 'other':	
			
			$otherActiveEntities = array_filter(explode(',' , elgg_get_plugin_setting('other_urls_types')));
			
			$urls = auto_sitemap_getOtherEntityUrls( $otherActiveEntities );	

			// if no other entities selected in settings, sitemap doesnt exists
			if ( empty($urls) ){				
				return false;
								
			}else{
				echo elgg_view('auto_sitemap/' . $esquema . "/0_9_scheme", array('urls' => $urls,'flagXsl'=> $flagXsl));				
				return true;
												
			}
			
		break;			
		
		// ------------------------------------------------------------------------------------		
		default:
			return false;
		break;
	}
}





/* =============================================================== */
function auto_sitemap_getCustomUrls( $tipos ){
	
	// get main url
	$mainurl = elgg_get_plugin_setting('main_url');
	$changefreq = elgg_get_plugin_setting('main_url_changefreq');
	$priority = elgg_get_plugin_setting('main_url_priority');

	if ( !empty($mainurl) ){
		$urls[] = Array(
						'loc' => $mainurl,
						'changefreq' => $changefreq,
						'priority' => $priority
					);
	}
	
	// get custmo urls
	foreach ($tipos as $tipo) {

		$urlList = Array();	
		$urlList = explode("\n", elgg_get_plugin_setting( $tipo . '_url'));				
		$priority = elgg_get_plugin_setting( $tipo . '_url_priority');
		
		foreach ($urlList as $url) {
			if ( ! empty($url) ){								
				$urls[] = Array(
								'loc' => $url,
								'changefreq' => $tipo,
								'priority' => $priority
							);
			}
		}
	}
	

	return $urls;
}

/* =============================================================== */
function auto_sitemap_getEntityUrls( $tipo ){
	
	switch ($tipo) {
		case 'user':
			$options['type'] = 'user';			
		break;
		
		case 'group':
			$options['type'] = 'group';			
		break;
		
		
		case 'blog':
		case 'file':
			$options['type'] = 'object';
			$options['subtypes'] = $tipo;			
		break;
		
		case 'event':
			$options['type'] = 'object';
			$options['subtypes'] = 'event_calendar';
		break;		
	}
	
	$changefreq = elgg_get_plugin_setting( $tipo . '_url_changefreq');
	$priority = elgg_get_plugin_setting( $tipo . '_url_priority');	
	$max_urls = elgg_get_plugin_setting('max_urls');
	
	if ( ! is_numeric($max_urls) || $max_urls < 1 ){
		$max_urls = 5000;
	}
	
	$options['limit'] = $max_urls;
			
	$entradas = elgg_get_entities($options);
			
	foreach ($entradas as $value) {
		
		$entityUrls[] = array('loc' => $value->getURL(),
								'lastmod' => $value->getTimeUpdated(),
								'changefreq' => $changefreq,
								'priority' => $priority
							);
	}		
		
	// Ordeno por fecha
	usort($entityUrls, 'auto_sitemap_comparar');
	
	return $entityUrls;
	
}


/* =============================================================== */
function auto_sitemap_getOtherEntityUrls( $entities ){
	
	foreach ($entities as $entity) {

		$options['type'] = 'object';
		$options['subtypes'] = $entity;			
		
		$changefreq = elgg_get_plugin_setting('other_url_changefreq');
		$priority = elgg_get_plugin_setting('other_url_priority');
		$max_urls = elgg_get_plugin_setting('max_urls');
	
		if ( ! is_numeric($max_urls) || $max_urls < 1 ){
			$max_urls = 5000;
		}
		
		$options['limit'] = $max_urls;
				
		$entradas = elgg_get_entities($options);
				
		foreach ($entradas as $value) {
			
			$entityUrls[] = array('loc' => $value->getURL(),
									'lastmod' => $value->getTimeUpdated(),
									'changefreq' => $changefreq,
									'priority' => $priority
								);
		}		
	}
		
	// Ordeno por fecha
	usort($entityUrls, 'auto_sitemap_comparar');
	
	return $entityUrls;
	
}


/* =============================================================== */
function xml_plugin_get_otherEntityTypes() {
	$valid_types = array();
	$entity_stats = get_entity_statistics();
	
	foreach($entity_stats['object'] as $subtype => $counter) {
		if ($subtype != 'plugin' && 
			$subtype != '__base__' && 
			$subtype != 'admin_notice' && 
			$subtype != 'messages' && 
			$subtype != 'widget' &&
			$subtype != 'blog' &&
			$subtype != 'file' &&
			$subtype != 'event_calendar'
			) {
				$valid_types[elgg_echo($subtype)] = $subtype;
		}
	}
	return $valid_types;
}


/* =============================================================== */
function auto_sitemap_comparar($x,$y){
	if ( $x['lastmod'] == $y['lastmod'] )
		return 0;
	else if ( $x['lastmod'] > $y['lastmod'] )
		return -1;
	else
		return 1;
}


?>
