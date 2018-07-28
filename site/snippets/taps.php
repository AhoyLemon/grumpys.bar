<a name="taps"></a>
<section class="tap-list">
  <div class="headline">Beers on tap...</div>

  <?php /*  $tapList = $page->find('taps'); */ ?>

  <div class="taps">
    <?php foreach ($tapList->taps()->toStructure() as $tap) { ?>
      <div class="tap">
        <div class="content">
          <?php if ($tap->name() != "") { ?>
            <div class="name"><?= $tap->name(); ?></div>
          <?php } ?>
          <?php if ($tap->brewery() != "") { ?>
            <div class="brewery"><?= $tap->brewery(); ?></div>
          <?php } ?>
          <?php if ($tap->style() != "") { ?>
            <div class="style"><?= $tap->style(); ?></div>
          <?php } ?>

          <?php if ($tap->abv() != "") { ?>
            <div class="abv"><?= $tap->abv(); ?>% ABV</div>
          <?php } ?>

          <?php if ($tap->ibu() != "") { ?>
            <div class="ibu"><?= $tap->ibu(); ?> IBU</div>
          <?php } ?>

          <?php if ($tap->price() != "" && $tap->pour() != "") { ?>
            <div class="price"><?= $tap->pour(); ?>oz @ $<?= $tap->price(); ?></div>
          <?php } else if ($tap->price() != "") { ?>
            <div class="price">$<?= $tap->price(); ?></div>
          <?php } else if ($tap->pour() != "") { ?>
            <div class="price"><?= $tap->pour(); ?>oz</div>
          <?php }  ?>
        </div>
      </div>
    <?php } ?>

    <a class="untappd-link" href="<?= $tapList->unntappd_url(); ?>">
      <div class="content">
        <img src="<?= $site->url(); ?>/assets/img/untappd-logo.png">
      </div>
    </a>

  </div>

</section>