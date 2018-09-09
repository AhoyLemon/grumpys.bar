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

      <?php if ($page->instagram() != "") { ?>
        <a class="instagram" href="<?= $page->instagram(); ?>">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <path id="Instagram" d="M16.2 0c-4.3 0-4.8 0-6.5.1C8 .2 6.8.4 5.8.8c-1 .4-1.9 1-2.8 1.8S1.6 4.4 1.2 5.4C.8 6.4.5 7.6.5 9.2c-.1 1.7-.1 2.2-.1 6.5s0 4.8.1 6.5c.1 1.7.3 2.8.7 3.8.4 1 .9 1.9 1.8 2.8.9.9 1.8 1.4 2.8 1.8 1 .4 2.2.7 3.8.7 1.7.1 2.2.1 6.5.1s4.8 0 6.5-.1c1.7-.1 2.8-.3 3.8-.7 1-.4 1.9-.9 2.8-1.8.9-.9 1.4-1.8 1.8-2.8.4-1 .7-2.2.7-3.8.1-1.7.1-2.2.1-6.5s0-4.8-.1-6.5c-.1-1.7-.3-2.8-.7-3.8-.4-1-.9-1.9-1.8-2.8-.9-.9-1.8-1.4-2.8-1.8-1-.4-2.2-.7-3.8-.7C21 0 20.5 0 16.2 0zm0 2.8c4.2 0 4.7 0 6.4.1 1.5.1 2.4.3 2.9.5.7.3 1.3.6 1.8 1.2.6.6.9 1.1 1.2 1.8.2.6.5 1.5.6 3 .1 1.7.1 2.2.1 6.4s0 4.7-.1 6.4c-.1 1.5-.3 2.4-.6 2.9-.3.7-.6 1.3-1.2 1.8-.6.6-1.1.9-1.8 1.2-.6.2-1.4.5-2.9.5-1.7.1-2.2.1-6.4.1s-4.7 0-6.4-.1c-1.5-.1-2.4-.3-3-.6-.8-.2-1.3-.5-1.9-1-.6-.6-.9-1.1-1.2-1.8-.2-.6-.5-1.4-.6-2.9-.1-1.7-.1-2.2-.1-6.4s0-4.7.1-6.4c.2-1.7.4-2.5.7-3.1.2-.7.6-1.2 1.1-1.8.6-.5 1.1-.9 1.9-1.2.6-.2 1.4-.5 2.9-.6h6.5c-.1 0 0 0 0 0zm0 4.9c-4.5 0-8.1 3.6-8.1 8.1s3.6 8.1 8.1 8.1 8.1-3.6 8.1-8.1-3.6-8.1-8.1-8.1zm0 13.4c-2.9 0-5.3-2.4-5.3-5.3s2.4-5.3 5.3-5.3 5.3 2.4 5.3 5.3-2.4 5.3-5.3 5.3zM26.5 7.4c0 1-.9 1.9-1.9 1.9-1 0-1.9-.9-1.9-1.9s.9-1.9 1.9-1.9c1.1 0 1.9.8 1.9 1.9z" />
          </svg>
        </a>
      <?php } ?>

      <?php if ($page->untappd() != "") { ?>
        <a class="untappd" href="<?= $page->untappd(); ?>">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <path id="Untappd" d="M14.7 18.2L6.9 29c-.4.6-1.1.8-1.7.8-.8-.1-1.8-.4-2.9-1.2s-1.7-1.7-2-2.4c-.3-.6-.2-1.3.2-1.9l7.8-10.8c.2-.5.7-1 1.2-1.3l1.5-.8c.3-.2.6-.4.8-.6.7-.8 2.7-3 6.3-6.6l.1-.3c0-.1.1-.1.1-.1h.2c.1 0 .1-.1.1-.2v-.2c0-.1.1-.2.2-.2.2 0 .7.1 1.3.5s.9.9.9 1.1c0 .1 0 .2-.1.2h-.2c-.1 0-.1.1-.1.2v.2c0 .1 0 .1-.1.2l-.2.1c-2.2 4.5-3.7 7.1-4.2 8.1-.2.3-.3.6-.3 1l-.3 1.7c-.2.6-.5 1.2-.8 1.7zm17 6.1l-7.8-10.8c-.4-.5-.9-.9-1.4-1.2l-1.5-.8c-.3-.2-.6-.4-.8-.6-.3-.3-.5-.6-.8-.9h-.2c-.7 1.4-1.5 2.9-2.3 4.3-.1.2-.2.4-.2.6-.1.5-.1 1 0 1.5v.1c.1.6.3 1.2.7 1.7L25.1 29c.4.6 1.1.8 1.7.8 1.1-.1 2.1-.5 2.9-1.2.9-.6 1.6-1.4 2-2.4.4-.6.3-1.3 0-1.9zM11.1 5h.2c.1 0 .1.1.1.2v.2c0 .1 0 .1.1.2l.2.1c.4.8.8 1.6 1.2 2.3 0 .1.1.1.2 0 .6-.6 1.3-1.4 2.1-2.2.1-.1.1-.2 0-.3-.4-.4-.9-.9-1.3-1.4l-.1-.3c0-.1-.1-.1-.1-.1h-.2c-.1 0-.1-.1-.1-.2v-.2c0-.1-.1-.2-.2-.2-.2 0-.7.1-1.3.5-.6.5-.9.9-.9 1.1-.1.1 0 .2.1.3z" />
          </svg>
        </a>
      <?php } ?>

      <?php if ($page->yelp() != "") { ?>
        <a class="yelp" href="<?= $page->yelp(); ?>">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
          <path id="Yelp" d="M30.2 24.3c-.2 1.3-2.8 4.6-4 5.1-.4.2-.8.1-1.1-.1-.2-.2-.4-.5-3.2-5l-.9-1.4c-.3-.5-.3-1.1.1-1.6s1-.6 1.5-.5l2.1.7c4.7 1.6 4.9 1.6 5.1 1.8.3.2.4.6.4 1zm-9.5-6.9c-.3-.5-.3-1.1 0-1.5l1.3-1.8c2.9-3.9 3-4.1 3.2-4.3.3-.2.7-.2 1.1 0 1.1.6 3.4 4 3.6 5.3 0 .4-.1.8-.5 1-.2.1-.4.2-5.8 1.5-.8.2-1.3.3-1.6.4-.3.2-.9-.1-1.3-.6.1 0 0 0 0 0zm-3.3-2.1c-.3.1-1 .3-2-1.2 0 0-6.5-10.2-6.6-10.5-.1-.4 0-.8.3-1.1 1-1 6.2-2.5 7.6-2.1.4.1.8.4.9.8.1.4.7 9.9.8 12 .1 1.8-.7 2.1-1 2.1zm.9 10.4c0 5 0 5.1-.1 5.4-.1.4-.5.6-.9.7-1.3.2-5.2-1.2-6-2.2-.2-.2-.3-.4-.3-.6 0-.2 0-.3.1-.5.1-.3.2-.5 3.8-4.6l1-1.2c.4-.5 1-.6 1.6-.4.6.2.9.7.9 1.2l-.1 2.2zM7.5 22.5c-.4 0-.7-.2-.9-.6-.1-.3-.2-.7-.3-1.3-.2-1.7 0-4.3.6-5.1.2-.4.6-.6 1-.6.3 0 .5.1 5.6 2.2l1.5.6c.5.2.9.7.8 1.4 0 .6-.4 1.1-.9 1.2l-2.2.7c-4.7 1.5-4.9 1.5-5.2 1.5zm19.7 9.4z" />
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