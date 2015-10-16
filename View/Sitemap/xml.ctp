<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?php echo Router::url('/', true); ?> </loc>
        <lastmod><?php echo trim($this->Time->toAtom(time())); ?></lastmod>
        <changefreq>monthly</changefreq>
        <priority>1</priority>
    </url>
    <?php
    $allowedTypes = array_values(preg_split('/,\s*/', $defaults['types']['value']));
    foreach ($sitemapData as $node):
        if (in_array($node['Node']['type'], $allowedTypes)):
            ?>
            <url>
                <loc> <?php echo Router::url('/', true) . ltrim($node['Node']['path'], '/'); ?> </loc>
                <lastmod> <?php echo trim($this->Time->toAtom(time())); ?> </lastmod>
                <priority> <?php if (isset($node['Node']['CustomFields']['priority']))
                echo $node['Node']['CustomFields']['priority']; else
                echo $defaults['priority']['value']; ?></priority>
                <changefreq> <?php if (isset($node['Node']['CustomFields']['changefreq']))
            echo $node['Node']['CustomFields']['changefreq']; else
            echo $defaults['changefreq']['value']; ?> </changefreq>
            </url>
    <?php endif;
endforeach; ?>
</urlset>
