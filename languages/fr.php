<?php
/* ######################################################
 *  Ramón Iglesias
 *  monchomail@gmail.com 
 *  12-08-2012
 * ###################################################### */
$french = array(

	'auto_sitemap:sitemap-learn-more' => "Pour en savoir plus sur les sitemaps, visitez : ",
	'auto_sitemap:recordatorio:htaccess' => "Pensez à ajouter les lignes nécessaires dans votre fichier .htaccess (consultez le fichier README.TXT)",

	'auto_sitemap:entity-urls:title' => "URLs de entités",
	'auto_sitemap:entity-urls:description' => "Choisissez quels éléments vous souhaitez ajouter à votre sitemap",
	'auto_sitemap:custom-urls:title' => "URLs personnalisées",
	'auto_sitemap:custom-urls:description' => "Vous pouvez préciser une série d'URLs personnalisées supplémentaires pour votre site. Par exemple dezs pages statiques, pages d'aide, etc.",

	'auto_sitemap:basic-config:title' => "Configuration simple",
	'auto_sitemap:max_urls:title' => "Nombre maximum d'URLs dans chaque sitemap",
	'auto_sitemap:max_urls:description' => "Google recommende de ne conserver que les dernières URLs dans la sitemap. Ceci vous économisera beaucoup de trafic, et vos anciennes URLs resteront indexées par les moteurs de recherche ",
	'auto_sitemap:use_xsl:title' => "Utilisez une feuille de style dans la sitemap ?",
	'auto_sitemap:use_xsl:description' => "Si activé, vous pourrez naviguer à travers les différentes sitemap du site via des liens comme dans un document HTML, et ceci n'affectera aucunement la manière dont les moteurs de recherche traitenet votre sitemap. <b>Si vous rencontrez des difficulté pour accéder à la sitemap, veuillez désactiver cette option</b>",
	
	'auto_sitemap:esquema:title' => "Schéma de la sitemap",
	'auto_sitemap:esquema:description' => "Pour le moment, seule la version 0.9 de sitemaps.org est implémentée.",
	'auto_sitemap:main_url:title' => "Adresse principale du site",


	/* Opciones dropdown*/
	'auto_sitemap:updatefreq:disabled' => "désactivé (skip this value)",
	'auto_sitemap:updatefreq:always' => "continuellement (always)",
	'auto_sitemap:updatefreq:hourly' => "toutes les heures (hourly)",
	'auto_sitemap:updatefreq:daily' => "tous les jours (daily)",
	'auto_sitemap:updatefreq:weekly' => "toutes les semaines (weekly)",
	'auto_sitemap:updatefreq:monthly' => "tous les mois (monthly)",
	'auto_sitemap:updatefreq:yearly' => "tous les ans (yearly)",
	'auto_sitemap:updatefreq:never' => "jamais (never)",
	
	'auto_sitemap:module:header:changefreq' => "URLs mises à jour ",
	'auto_sitemap:changefreq_url:description' => "Une seule URL par ligne",
	
	'auto_sitemap:other_entities:description' => "Choisissez les autres entités à inclure dans la sitemap",

	'auto_sitemap:module:active:entity' => "Ajouter %s à la sitemap? ",
	'auto_sitemap:entity:user:title' => "profiles des membres",
	'auto_sitemap:entity:group:title' => "profiles des groupes",
	'auto_sitemap:entity:blog:title' => "articles de blog",
	'auto_sitemap:entity:file:title' => "fichiers publiés",
	'auto_sitemap:entity:event:title' => "événements de event_calendar",
	'auto_sitemap:entity:otros:title' => "autres entités",
		
	'option:yes' => "Oui",
	'option:no' => "Non",

	'auto_sitemap:priority:none' => "Aucune",
	'auto_sitemap:changefreq:description' => "Choisissez une valeur pour l'attribut changefreq",
	'auto_sitemap:priority:description' => "Choisissez une priorité pour ces URLs",

);
add_translation("fr", $french);
