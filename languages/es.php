<?php
/* ######################################################
 *  Ramón Iglesias
 *  monchomail@gmail.com 
 *  12-08-2012
 * ###################################################### */
$spanish = array(

	'auto_sitemap:sitemap-learn-more' => 'Si quieres aprender más sobre los sitemaps visita: ',	
	'auto_sitemap:recordatorio:htaccess' => 'Recuerda añadir las lineas necesarias en tu .htaccess (Lee el README.TXT)',

	'auto_sitemap:entity-urls:title' =>'Entity URLs',
	'auto_sitemap:entity-urls:description' =>'Escoge que objetos deseas añadir a tu sitemap',
	'auto_sitemap:custom-urls:title' =>'Custom URLs',
	'auto_sitemap:custom-urls:description' =>'Adicionalmente puedes especificar de forma manual URLs especificas de tu sitio web. Por ejemplo páginas estáticas, paginas, de ayuda, etc.',

	'auto_sitemap:basic-config:title' => 'Configuración básica',
	'auto_sitemap:max_urls:title' => 'Número máximo de URLs por sitemap (5000 por defecto)',
	'auto_sitemap:max_urls:description' => 'Google recomienda mantener en el sitemap solo las URLs más recientes. Esto te ahorrará un montón de tráfico y tus urls antiguas seguirán indexadas en los buscadores',
	'auto_sitemap:use_xsl:title' => 'Utilizar hoja de estilos en el sitemap?',
	'auto_sitemap:use_xsl:description' => 'Añadir la hoja de estilos hará que puedas navegar entre los diferentes sitemaps por medio de enlaces como si se tratase de un documento html, y no influirá en la forma en la que los buscadores tratan tu sitemap. <b>Si tienes algún tipo de problema para ver el sitemap desactiva esta opción</b>',

	'auto_sitemap:esquema:title' => 'Esquema del sitemap',
	'auto_sitemap:esquema:description' => 'Por ahora solo hay implementada la version 0.9 de sitemaps.org.',
	'auto_sitemap:main_url:title' => 'URL principal del sitio',


	/* Opciones dropdown*/
	'auto_sitemap:updatefreq:disabled' => 'descativado (Omitir este valor)',
	'auto_sitemap:updatefreq:always' => 'continuamente (always)',
	'auto_sitemap:updatefreq:hourly' => 'cada hora (hourly)',
	'auto_sitemap:updatefreq:daily' => 'cada día (daily)',
	'auto_sitemap:updatefreq:weekly' => 'cada semana (weekly)',
	'auto_sitemap:updatefreq:monthly' => 'cada mes (monthly)',
	'auto_sitemap:updatefreq:yearly' => 'cada año (yearly)',
	'auto_sitemap:updatefreq:never' => 'nunca (never)',

	'auto_sitemap:module:header:changefreq' => 'URLs que se actualizan ',
	'auto_sitemap:changefreq_url:description' => 'Introduce una URL por cada linea',

	'auto_sitemap:other_entities:description' => 'Selecciona otras entidades que se deben añadir al sitemap',
	
	'auto_sitemap:module:active:entity' => 'Añadir %s al sitemap? ',
	'auto_sitemap:entity:user:title' => 'los perfiles de los usuarios',
	'auto_sitemap:entity:group:title' => 'los perfiles de los grupos',
	'auto_sitemap:entity:blog:title' => 'las entradas del blog',
	'auto_sitemap:entity:file:title' => 'los archivos',
	'auto_sitemap:entity:event:title' => 'los eventos del calendario',
	'auto_sitemap:entity:otros:title' => 'otras entidades',

	'option:yes' => 'Si',
	'option:no' => 'No',
		
	'auto_sitemap:priority:none' => 'Omitir',
	'auto_sitemap:changefreq:description' => 'Selecciona un valor para el atributo changefreq',
	'auto_sitemap:priority:description' => 'Selecciona una prioridad para estas URLs',

);
add_translation("es", $spanish);		 
