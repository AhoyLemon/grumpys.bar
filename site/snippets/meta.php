<link rel="apple-touch-icon" sizes="60x60" href="<?= $site->url(); ?>/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?= $site->url(); ?>/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?= $site->url(); ?>/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?= $site->url(); ?>/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?= $site->url(); ?>/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" sizes="32x32" href="<?= $site->url(); ?>/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="<?= $site->url(); ?>/favicon-16x16.png">
<link rel="manifest" href="<?= $site->url(); ?>/site.webmanifest">
<link rel="mask-icon" href="<?= $site->url(); ?>/safari-pinned-tab.svg" color="#ef3e33">
<meta name="msapplication-TileColor" content="#ef3e33">
<meta name="theme-color" content="#00ada8">



<?php 

// Meta description
if ($page->meta_description() != "")  { $description = $page->meta_description()->xml();
} else if ($page->text() != "")       { $description = excerpt($page->text()->xml(), 180);
} else                                { $description = $site->meta_description()->xml(); }

// Twitter Image
if ($page->twitter_image() != "") { $twitter_image = $page->twitter_image()->toFile()->url();
} else                            { $twitter_image = $site->twitter_image()->toFile()->url();
}

// OpenGraph Image
if ($page->og_image() != "") {
                                $og_image  = $page->og_image()->toFile()->url();
                                $og_height = $page->og_image()->toFile()->height();
                                $og_width  = $page->og_image()->toFile()->width();
} else {
                                $og_image  = $site->og_image()->toFile()->url();
                                $og_height = $site->og_image()->toFile()->height();
                                $og_width  = $site->og_image()->toFile()->width();
}

?>

<meta name="description" content="<?php echo $description; ?>">

<!-- Twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:title" content="<?= $page->title(); ?>" />
<meta name="twitter:url" content="<?php echo $page->url() ;?>" />
<meta name="twitter:image" content="<?php echo $twitter_image; ?>" />
<meta name="twitter:description" content="<?php echo $description; ?>" />

<!-- OpenGraph  -->
<meta property="og:type" content="restaurant">
<meta property="og:title" content="<?= $page->title(); ?>">
<meta property="og:url" content="<?php echo $page->url() ;?>">
<meta property="og:image" content="<?php echo $og_image; ?>" />
<meta property="og:image:height" content="<?php echo $og_height; ?>" />
<meta property="og:image:width" content="<?php echo $og_width; ?>" />
<meta property="og:description" content="<?php echo $description; ?>" />