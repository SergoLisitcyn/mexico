<?php '<?xml version="1.0" encoding="utf-8"?' . ">\n"; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?= $host ?></loc>
        <lastmod><?= date( DATE_W3C ) ?></lastmod>
        <priority>1.00</priority>
        <changefreq>weekly</changefreq>
    </url>
    <url>
        <loc><?= $host.'/contacto' ?></loc>
        <lastmod><?= date( DATE_W3C ) ?></lastmod>
        <priority>0.80</priority>
        <changefreq>weekly</changefreq>
    </url>
    <?php foreach($urls as $url): ?>
<url>
        <loc><?= $host.'/' . $url['loc']; ?></loc>
        <lastmod><?= $url['lastmod']; ?></lastmod>
        <priority><?= $url['priority']; ?></priority>
        <changefreq>weekly</changefreq>
    </url>
    <?php endforeach; ?>
</urlset>