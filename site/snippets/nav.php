<header class="desktop">
  <div class="inner">
    <nav>
      <?php if ($page->template() == "location") { ?>
        <?php foreach ($page->children()->visible() as $anchor) { ?>
          <div class="link">
            <a scroll-to="<?= $anchor->slug(); ?>">
              <?= $anchor->title(); ?>
            </a>
          </div>
        <?php } ?>  
      <?php } else if ($page->parent()->template() == "location") { ?>
        <?php foreach ($page->parent()->children()->visible() as $anchor) { ?>

          <div class="link <?php if ($anchor->isOpen()) { echo 'active'; } ?>">
            <a href="<?= $anchor->url(); ?>">
              <?= $anchor->title(); ?>
            </a>
          </div>
        <?php } ?>
      <?php } ?>
      <div class="logo-holder"><a href="<?= $site->url(); ?>"><img class="logo" src="<?= $site->url(); ?>/assets/svg/logo_header.svg"></a></div>
      
      <?php foreach ($site->children()->visible()->filterBy('template', 'location') as $location) { ?>
        <?php if (strpos($page->url(), $location->slug()) !== false) { ?>
          <div class="link active">
            <a href="<?= $location->url(); ?>">
              <?= $location->title(); ?>
            </a>
          </div>
        <?php } else { ?>
          <div class="link">
            <a href="<?= $location->url(); ?>">
              <?= $location->title(); ?>
            </a>
          </div>
        <?php } ?>
      <?php } ?>

    </nav>
  </div>
</header>

<header class="mobile">
  <div class="inner hamburger-bar">
    <div class="hamburger"><a class="hamburger-toggle">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
          <path class="open" d="M29.5 5.3h-27C1.1 5.3 0 4.2 0 2.8v-.3C0 1.1 1.1 0 2.5 0h27C30.9 0 32 1.1 32 2.5v.3c0 1.4-1.1 2.5-2.5 2.5zM29.5 31.3h-27c-1.4 0-2.5-1.1-2.5-2.5v-.3C0 27.1 1.1 26 2.5 26h27c1.4 0 2.5 1.1 2.5 2.5v.3c0 1.4-1.1 2.5-2.5 2.5zM29.5 18.3h-27c-1.4 0-2.5-1.1-2.5-2.5v-.3C0 14.1 1.1 13 2.5 13h27c1.4 0 2.5 1.1 2.5 2.5v.3c0 1.4-1.1 2.5-2.5 2.5z"></path>
          <path class="close" d="M20.7 15.7l9.4-9.4c1.2-1.2 1.2-3.2 0-4.4l-.3-.3c-1.2-1.2-3.2-1.2-4.4 0L16 11 6.6 1.6C5.4.4 3.4.4 2.2 1.6l-.3.3C.7 3.1.7 5 1.9 6.2l9.4 9.4L1.9 25c-1.2 1.2-1.2 3.2 0 4.4l.3.3c1.2 1.2 3.2 1.2 4.4 0l9.4-9.4 9.4 9.4c1.2 1.2 3.2 1.2 4.4 0l.3-.3c1.2-1.2 1.2-3.2 0-4.4l-9.4-9.3z"></path>
        </svg></a></div>
  </div>
  <nav class="mobile-links">

    <?php if ($page->template() == "location") { ?>
      <?php foreach ($page->children()->visible() as $anchor) { ?>
        <div class="link">
          <a scroll-to="<?= $anchor->slug(); ?>">
            <?= $anchor->title(); ?>
          </a>
        </div>
      <?php } ?>  
    <?php } ?>
    <?php foreach ($site->children()->visible()->filterBy('template', 'location') as $location) { ?>
        <?php if (strpos($page->url(), $location->slug()) !== false) { ?>
          <div class="link active">
            <a href="<?= $location->url(); ?>">
              <?= $location->title(); ?>
            </a>
          </div>
        <?php } else { ?>
          <div class="link">
            <a href="<?= $location->url(); ?>">
              <?= $location->title(); ?>
            </a>
          </div>
        <?php } ?>
      <?php } ?>
  </nav>
  <div class="logo-holder">
    <a href="<?php $site->url(); ?>">
      <img class="logo" src="<?= $site->url(); ?>/assets/svg/logo_header.svg">
    </a>
  </div>
</header>