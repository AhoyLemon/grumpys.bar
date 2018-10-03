<?php snippet('head') ?>

<img class="triangle" src="<?= $site->url(); ?>/assets/svg/triangle.svg">

  <div class="home-header">
    <div class="tagline-stripe"></div>
    <div class="logo-holder">
      <img class="logo" src="<?= $site->url(); ?>/assets/svg/logo_header.svg">
    </div>
    <div class="tagline-holder"><span>Twin Cities Best In Food and Booze Fer Years!</span></div>
  </div>

  <main class="home">
        <nav class="locations">
          <?php foreach ($site->children()->visible()->filterBy('template', 'location') as $location) { ?>
            <div class="location">
              <figure style="background-image:url(<?= $location->homeshot()->toFile()->resize(900)->url(); ?>)">
                <a href="<?= $location->url(); ?>"></a>
              </figure>
              <figcaption>
                <div class="inner">
                  <a class="name <?= $location->slug(); ?>" href="<?= $location->url(); ?>">
                    <?= $location->title(); ?>
                  </a>
                <address>
                  <a href="<?= $location->map(); ?>">
                    <span class="street-address"><?= $location->street_address(); ?></span>
                    <br>
                    <span class="city"><?= $location->city(); ?></span>,
                    <span class="state"><?= $location->state(); ?></span>
                    <span class="zip"><?= $location->zip(); ?></span>
                  </a>
                </address>
                <div class="phone-and-social">
                  <div class="phone">
                    <a class="tel" href="tel:<?= $location->phone(); ?>">
                      <?= $location->phone(); ?>
                    </a>
                  </div>
                  <div class="social">
                    <a class="email" href="mailto:<?= $location->email(); ?>">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <path d="M1.4 6.1v20.8h29.8V6.1H1.4zm26 1.5L16.3 18.3 5.1 7.6h22.3zm2.3 17.8H2.9V7.6H3l13.3 12.7L29.6 7.6h.1v17.8z"></path>
                      </svg>
                    </a>
                    <a class="facebook" href="<?= $location->facebook(); ?>">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <path d="M0 0v32h19.2V21.4h-3.9v-4.5h3.9v-3.3c0-3.9 2.4-6 5.8-6 1.7 0 3.1.1 3.5.2v4h-2.4c-1.9 0-2.2.9-2.2 2.2v2.9h4.5l-.6 4.5h-3.9V32H32V0H0z"></path>
                      </svg>
                    </a>
                    <a class="twitter" href="<?= $location->twitter(); ?>">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                        <path d="M.8 25.2c2.7 1.8 6 2.8 9.5 2.8 11.5 0 18-9.7 17.6-18.4 1.2-.9 2.3-2 3.1-3.2-1.1.5-2.3.8-3.6 1 1.3-.8 2.3-2 2.7-3.4-1.2.7-2.5 1.2-3.9 1.5-1.1-1.2-2.7-2-4.5-2-4 0-6.9 3.7-6 7.6-5.2-.3-9.7-2.7-12.8-6.5C1.3 7.4 2 11 4.8 12.8c-1 0-2-.3-2.8-.8-.1 2.9 2 5.6 5 6.2-.9.2-1.8.3-2.8.1.8 2.5 3.1 4.3 5.8 4.3-2.7 2.1-5.9 3-9.2 2.6z"></path>
                      </svg>
                    </a>
                    </div>
                  </div>
                </div>
              </figcaption>
            </div>
          <?php } ?>
        </nav>
      </main>

<?php snippet('footer') ?>