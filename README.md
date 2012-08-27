README

Sitemap Croogo Plugin

Author: Nicolas Traeder (traedamatic)
Email : traedamatic@gmail.com

############################################################################

LICENSE

ALL files in this repository are licensed under the MIT license:

Url:  http://www.opensource.org/licenses/mit-license.php 

Copyright (c) <2010> Nicolas Traeder <traedamatic@gmail.com> 

#############################################################################

27. Aug 2012

This version now fully works with Croogo 1.4 and higher (CakePHP 2.0 and higher)
Marek Sebera

19. Jan 2010

Version 0.1 

This Plugin generates automatically a sitemap of you croogo site

It should work with no extra installation just copy this files into the app/plugin folder

!The upload from the adminpanel doesn't work right now. I dont know why!? I will fix it today or tomorrow!!!

#What does it do?#

First it adds some routes:

your-site/sitemap -> a simple html sitemap
your-site/sitemap.xml -> a valid http://www.sitemap.org xml sitemap   

The Sitemap is created from the data in your site. All Nodes which have one of the three types blog, node and  page are used. 

In the admin dashboard you can find a new menu called "Sitemap". Here you can set you default changefreq and priority.

Furthermore you can add to any node the Customfields "changefreq" and "priority". These values will be used instead of the default if set.

#What does it not do?#

The plugin does not submit the sitemap to any search engine.

The logic behind the html view is very simple. It does not support the parent_id for a better view.

#Next Release Features#

Probably the submit function for the search engines.


New Verion 23.09.10 

- migrated to Croogo 1.3.2 


Further Reading:

http://bakery.cakephp.org/articles/view/automatically-generate-dynamic-sitemaps
http://bakery.cakephp.org/articles/view/sitemap-deluxe
http://www.sitemap.org

