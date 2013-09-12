DESCRIPTION
=======
	Adds a dynamic sitemap.xml file to your site for SEO purposes. (No physicall file, the sitemap is generated for each request)
	
	The sitemap is splitted in various sub-sitemaps indexed in a sitemapindex file, this allows lightweight crawling.

	Each entity type will be placed in it's own sitemap
	
	Additionally you can manually specify custom URLs of your website.

	Check out the screenshots

	Sitemaps can be formated with XSL for candy reading	
	
	Pleas, give me some feedback


INSTALL
=======

	- Unzip the code to your mod directory
	- Enable the plugin in the admin panel
	- Add the following lines to the end off your elgg .htaccess file:

			RewriteRule ^sitemap.xml$ auto_sitemap/index [L]
			RewriteRule ^sitemap.xsl$ mod/auto_sitemap/views/default/auto_sitemap/sitemap.xsl [L]
			RewriteRule ^sitemapindex.xsl$ mod/auto_sitemap/views/default/auto_sitemap/sitemapindex.xsl [L]

	- Configure the sitemap (If blank sitemap is displayed, flush the cache)
	- Submit http://YOURSITE/sitemap.xml to Google !!!



