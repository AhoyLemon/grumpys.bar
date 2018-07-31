<a name="<?= $boozeMenu->slug(); ?>"></a>
<section class="menu full-menu">
  <h2><?= $boozeMenu->title(); ?></h2>
  <div class="inner">
    <div class="page booze">
      <?php foreach ($boozeMenu->children() as $boozeType) { ?>
        <div class="menu-section">
          <div class="section-title"><?= $boozeType->title(); ?></div>

          <?php foreach ($boozeType->builder()->toStructure() as $booze) { ?>
            <div class="menu-item">
              <div class="name">
                <?= $booze->name(); ?>
              </div>

              <?php if ($booze->variant_a() != "") { ?>
                <ul class="options">
                  <li><?= $booze->variant_a(); ?></li>
                  <?php if ($booze->variant_b() != "") { echo '<li>' . $booze->variant_b() . '</li>';  } ?>
                  <?php if ($booze->variant_c() != "") { echo '<li>' . $booze->variant_c() . '</li>';  } ?>
                  <?php if ($booze->variant_d() != "") { echo '<li>' . $booze->variant_d() . '</li>';  } ?>
                  <?php if ($booze->variant_e() != "") { echo '<li>' . $booze->variant_e() . '</li>';  } ?>
                  <?php if ($booze->variant_f() != "") { echo '<li>' . $booze->variant_f() . '</li>';  } ?>
                </ul>
              <?php } ?>

            </div>
          <?php } ?>

        </div>

      <?php } ?>
    </div>
  </div>
</section>