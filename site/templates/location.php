<?php snippet('head') ?>

<?php snippet('nav') ?>

<main class="location <? $page->slug(); ?>">
  <div class="bubble-boxes">
    <div class="box brown"></div>
    <div class="box tan"></div>
    <div class="box red"></div>
  </div>
  <div class="hero">
    <div class="details-holder">
      <div class="details"> 
        <div class="name"><?php $page->title(); ?></div>
        <?php if ($page->hours() != "") { ?>
          <div class="hours">
            <div class="label"><span>HOURS:</span></div>
            <div class="info">
              <?= $page->hours()->kirbytext(); ?>
            </div>
          </div>
        <?php } ?>

        <!-- Address -->
        <address>
          <a href="<?= $page->map(); ?>">
            <span class="street-address"><?= $page->street_address(); ?></span><br>
            <span class="city"><?= $page->city(); ?></span>, 
            <span class="state"><?= $page->state(); ?></span> 
            <span class="zip"><?= $page->zip(); ?></span>
          </a>
        </address>

        <!-- Phone Number -->

        <div class="phone">
          <a class="tel" href="tel:<?= $page->phone(); ?>">
            <?= $page->phone(); ?>
          </a>
        </div>
        
        <a class="find-us" href="<?= $page->map(); ?>">
          <span>Find us</span>
        </a>

      </div>
    </div>

    <div class="image-holder">
      <?php if ($page->heroes() != "") { ?>
        <div class="image-carousel">
          <?php foreach ($page->heroes()->toStructure() as $hero) { ?>
            <figure style="background-image:url(<?= $hero->pic()->toFile()->url(); ?>)" alt="<?= $hero->desc(); ?>"></figure>
          <?php } ?>
        </div>
      <?php } ?>
    </div>


    <div class="social-links">
      <?php if ($page->twitter() != "") { ?>
        <a class="twitter" href="<?= $page->twitter(); ?>">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <path d="M.8 25.2c2.7 1.8 6 2.8 9.5 2.8 11.5 0 18-9.7 17.6-18.4 1.2-.9 2.3-2 3.1-3.2-1.1.5-2.3.8-3.6 1 1.3-.8 2.3-2 2.7-3.4-1.2.7-2.5 1.2-3.9 1.5-1.1-1.2-2.7-2-4.5-2-4 0-6.9 3.7-6 7.6-5.2-.3-9.7-2.7-12.8-6.5C1.3 7.4 2 11 4.8 12.8c-1 0-2-.3-2.8-.8-.1 2.9 2 5.6 5 6.2-.9.2-1.8.3-2.8.1.8 2.5 3.1 4.3 5.8 4.3-2.7 2.1-5.9 3-9.2 2.6z"></path>
          </svg>
        </a>
      <?php } ?>
      
      <?php if ($page->facebook() != "") { ?>
        <a class="twitter" href="<?= $page->facebook(); ?>">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <path d="M0 0v32h19.2V21.4h-3.9v-4.5h3.9v-3.3c0-3.9 2.4-6 5.8-6 1.7 0 3.1.1 3.5.2v4h-2.4c-1.9 0-2.2.9-2.2 2.2v2.9h4.5l-.6 4.5h-3.9V32H32V0H0z"></path>
          </svg>
        </a>
      <?php } ?>

      <?php if ($page->email() != "") { ?>
        <a class="email" href="mailto:<?= $page->email(); ?>">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <path d="M1.4 6.1v20.8h29.8V6.1H1.4zm26 1.5L16.3 18.3 5.1 7.6h22.3zm2.3 17.8H2.9V7.6H3l13.3 12.7L29.6 7.6h.1v17.8z"></path>
          </svg>
        </a>
      <?php } ?>  
    </div>

  </div>

  <?php foreach ($page->children()->visible() as $section) { ?>
    
    <?php if ($section->slug() == "calendar") { ?>

      <?php snippet('calendar', ['calendar' => $section]) ?>

    <?php } else  if ($section->slug() == "taps") { ?>

      <?php snippet('taps', ['tapList' => $section]) ?>
      
    <?php } else  if ($section->slug() == "food") { ?>
      
      <?php snippet('food', ['food' => $section]) ?>

    <?php } else if ($section->slug() == "booze") { ?>
    
      <?php snippet('booze', ['boozeMenu' => $section]) ?>

    <?php } ?>

  <?php } ?>

<?php

  if ($page->meta_description() != "")  { $description = $page->meta_description()->xml();
  } else if ($page->text() != "")       { $description = excerpt($page->text()->xml(), 180);
  } else                                { $description = $site->meta_description()->xml(); }

  if ($page->schema_image()->isNotEmpty())      { $schemaPhoto = $page->schema_image()->toFile()->url();
  } else if ($page->homeshot()->isNotEmpty())   { $schemaPhoto = $page->homeshot()->toFile()->url();
  } else                                        { $schemaPhoto = $site->schema_image()->toFile()->url(); }

  if ($page->schema_logo()->isNotEmpty())       { $schemaLogo = $page->schema_logo()->toFile()->url();
  } else                                        { $schemaLogo = $site->schema_logo()->toFile()->url(); }

  if ($page->serves_cuisine()->isNotEmpty())    { $servesCuisine = $page->serves_cuisine();
  } else                                        { $servesCuisine = $site->serves_cuisine(); }

  if ($page->schema_pricerange()->isNotEmpty()) { $priceRange = $page->schema_pricerange();
  } else                                        { $priceRange = $site->schema_pricerange(); }

?>


  <script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "BarOrPub",
  "name": "<?= $site->title(); ?> <?= $page->title(); ?>",
  "url": "<?= $page->url(); ?>",
  "sameAs": [
    "<?= $page->twitter(); ?>",
    "<?= $page->facebook(); ?>"
  ],
  "address": {
    "@type": "PostalAddress",
    "streetAddress":   "<?= $page->street_address(); ?>",
    "addressLocality": "<?= $page->city(); ?>",
    "addressRegion":   "<?= $page->state(); ?>",
    "postalCode":      "<?= $page->zip(); ?>"
  },
  "image": "<?= $schemaPhoto; ?>",
  "logo": "<?= $schemaLogo; ?>",
  "acceptsReservations": false,
  "servesCuisine": "<?= $servesCuisine; ?>",
  <?php if ($page->children()->visible()->filterBy('template', 'food')) { ?>
    "hasMenu": "<?= $site->url(); ?>/<?= $page->children()->visible()->filterBy('template', 'food'); ?>",
  <?php } ?>
  "telephone": "<?= $page->phone(); ?>",
  "description": "<?= $description; ?>",
  <?php foreach ($page->schema_attributes()->toStructure() as $schema) { ?>
    "<?= $schema->property(); ?>": "<?= $schema->value(); ?>",
  <?php } ?>
  "priceRange": "<?= $priceRange; ?>"
}
</script>

  
  <section class="menu-stripe">
    <div class="diamonds">
      <div class="orange"></div>
      <div class="teal"></div>
    </div>
  </section>
</main>

<?php snippet('footer') ?>