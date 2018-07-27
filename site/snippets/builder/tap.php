<div class="tap">
  <div class="content">
    <?php if ($data->name() != "") { ?>
      <div class="name"><?= $data->name(); ?></div>
    <?php } ?>
    <?php if ($data->brewery() != "") { ?>
      <div class="brewery"><?= $data->brewery(); ?></div>
    <?php } ?>
    <?php if ($data->style() != "") { ?>
      <div class="style"><?= $data->style(); ?></div>
    <?php } ?>

    <?php if ($data->abv() != "") { ?>
      <div class="abv"><?= $data->abv(); ?>% ABV</div>
    <?php } ?>

    <?php if ($data->ibu() != "") { ?>
      <div class="ibu"><?= $data->abv(); ?> IBU</div>
    <?php } ?>

    <?php if ($data->price() != "" && $data->pour() != "") { ?>
      <div class="price"><?= $data->pour(); ?>oz @ $<?= $data->price(); ?></div>
    <?php } else if ($data->price() != "") { ?>
      <div class="price">$<?= $data->price(); ?></div>
    <?php } else if ($data->pour() != "") { ?>
      <div class="price"><?= $data->pour(); ?>oz</div>
    <?php }  ?>
  </div>
</div>