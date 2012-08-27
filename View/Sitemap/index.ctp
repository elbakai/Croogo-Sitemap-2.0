<?php echo $this->Html->css("/sitemap/css/sitemap.css"); ?>
<div class="sitemap">
    <h2>Sitemap</h2>
    <ul>
    <?php
        foreach ($sitemapData as $node) {
            echo "<li>".$this->Html->link($node['Node']['title'],$node['Node']['path'])."</li>" ;   
        }
    ?>
    </ul>
</div>
