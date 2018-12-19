<?php
// send the right header
header('Content-type: text/xml; charset="utf-8"');

// echo the doctype
echo '<?xml version="1.0" encoding="utf-8"?>';
/* echo '<?xml-stylesheet type="text/xsl" href="https://gitcdn.xyz/repo/pedroborges/xml-sitemap-stylesheet/master/sitemap.xsl"?>'; */
echo '<?xml-stylesheet type="text/xsl" href="' . $site->url() . '/assets/xsl/pedro.xsl"?>';
	$ignore = array('sitemap', 'error');
?>
<urlset
  xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
  xmlns:xhtml="http://www.w3.org/1999/xhtml"
  xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

  <?php foreach($pages->index() as $p): ?>

    <?php 
    if(in_array($p->uri(), $ignore)) {
      // Page is marked ignore.
    } else if ($p->isInvisible() && !$p->isHomePage()) {
      // Hide invisible pages (other than the home page)
    } else if ($p->intendedTemplate() == "booze-type" || $p->intendedTemplate() == "menu-section") {
      // Ignore menu items as pages.
    } else if (!$p->isHomePage() && $p->intendedTemplate() != "location" && $p->parent()->isInvisible()) {
      // Ignore pages with invisible parents.
    } else { ?>
      <url>
        <loc><?php echo html($p->url()) ?></loc>
        <lastmod><?php echo $p->modified('c') ?></lastmod>
        <priority><?php echo ($p->isHomePage()) ? 1 : number_format(0.5/$p->depth(), 1) ?></priority>

        <?php if ($p->homeshot()->isNotEmpty()) { ?>
          <image:image>
              <image:loc>
                <?= $p->url() . '/' . $p->homeshot(); ?>
              </image:loc>
          </image:image>
        <?php } ?>

      </url>

    <?php } ?>
  
  <?php endforeach ?>
</urlset>