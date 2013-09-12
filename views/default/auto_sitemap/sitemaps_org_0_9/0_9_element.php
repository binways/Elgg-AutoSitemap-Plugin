<?php
/* ######################################################
 *  Ramón Iglesias
 *  monchomail@gmail.com 
 *  12-08-2012
 * ###################################################### */

$body ='';

//hprint_r($vars['urls']);
foreach ($vars['urls'] as $element) {

	
		$body .= '	<url>';
		$body .= '		<loc>' . $element['loc'] . '</loc>';
		if ( $element['priority'] != 'none'){
			$body .= '		<priority>' . $element['priority'] . '</priority>';	
		}
		if ( $element['lastmod'] ){
			$body .= '		<lastmod>' . date('Y-m-d', $element['lastmod']  ) . '</lastmod>';	
		}
		if ( $element['changefreq'] && $element['changefreq'] != 'disabled'){
			$body .= '		<changefreq>' . $element['changefreq'] . '</changefreq>';	
		}
		$body .= '	</url>';
}

echo $body;

