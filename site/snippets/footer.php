<footer>
  <div class="inner">
    <div class="locations">
      <?php foreach ($site->children()->visible()->filterBy('template', 'location') as $location) { ?>
        <div class="location">
            <div class="name">
              <a href="<?= $location->url(); ?>"><?= $location->title(); ?></a>
            </div>
            <address>
              <a href="<?= $location->url(); ?>">
                <span class="street-address"><?= $location->street_address(); ?></span>
                <br />
                <span class="city"><?= $location->city(); ?></span>, 
                <span class="state"><?= $location->state(); ?></span>
                <span class="zip"><?= $location->zip(); ?></span>
              </a>
            </address>
            
            <div class="phone">
              <a class="tel" href="tel:<?= $location->phone(); ?>"><?= $location->phone(); ?></a>
            </div>

            <div class="social">

              <?php if ($location->email() != "") { ?>
                <a class="email" href="mailto:<?= $location->email(); ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <path d="M1.4 6.1v20.8h29.8V6.1H1.4zm26 1.5L16.3 18.3 5.1 7.6h22.3zm2.3 17.8H2.9V7.6H3l13.3 12.7L29.6 7.6h.1v17.8z"></path>
                  </svg>
                </a>
              <?php } ?>

              <?php if ($location->facebook() != "") { ?>
                <a class="facebook" href="<?= $location->facebook(); ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <path d="M0 0v32h19.2V21.4h-3.9v-4.5h3.9v-3.3c0-3.9 2.4-6 5.8-6 1.7 0 3.1.1 3.5.2v4h-2.4c-1.9 0-2.2.9-2.2 2.2v2.9h4.5l-.6 4.5h-3.9V32H32V0H0z"></path>
                  </svg>
                </a>
              <?php } ?>
                    
              <?php if ($location->twitter() != "") { ?>              
                <a class="twitter" href="<?= $location->twitter(); ?>">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <path d="M.8 25.2c2.7 1.8 6 2.8 9.5 2.8 11.5 0 18-9.7 17.6-18.4 1.2-.9 2.3-2 3.1-3.2-1.1.5-2.3.8-3.6 1 1.3-.8 2.3-2 2.7-3.4-1.2.7-2.5 1.2-3.9 1.5-1.1-1.2-2.7-2-4.5-2-4 0-6.9 3.7-6 7.6-5.2-.3-9.7-2.7-12.8-6.5C1.3 7.4 2 11 4.8 12.8c-1 0-2-.3-2.8-.8-.1 2.9 2 5.6 5 6.2-.9.2-1.8.3-2.8.1.8 2.5 3.1 4.3 5.8 4.3-2.7 2.1-5.9 3-9.2 2.6z"></path>
                  </svg>
                </a>
                <?php } ?>

            </div>
        </div>
      <?php } ?>

    </div>
    <div class="private-party"><img src="<?= $site->url(); ?>/assets/img/private-party.png"></div>
    <div class="our-friends">
      <div class="check">Check Out Our Friends:</div>
      <div class="both">
        <div class="friend rose-vine"><a href="http://rosevinehall.com"><img src="<?= $site->url(); ?>/assets/svg/rosevine-footer.svg"></a></div>
      </div>
    </div>
  </div>
  <div class="site-by">
    This website was built by <a href="https://ahoylemon.xyz">Lemon</a>.
  </div>
</footer>

</div>

<div class="javascripts">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <?= js('assets/js/min/grumpys.min.js') ?>
  <script type="text/javascript">
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-116822514-2', 'auto');
    ga('send', 'pageview');
  </script>
</div>


</body>
</html>