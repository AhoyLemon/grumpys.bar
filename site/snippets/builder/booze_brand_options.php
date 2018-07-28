<div class="menu-item single-item booze">
  <div class="name">
    <?= $data->name(); ?>
  </div>

  <ul class="options">
    <?php if ($data->variant_a() != "") { echo '<li>' . $data->variant_a() . '</li>'; } ?>
    <?php if ($data->variant_b() != "") { echo '<li>' . $data->variant_b() . '</li>'; } ?>
    <?php if ($data->variant_c() != "") { echo '<li>' . $data->variant_c() . '</li>'; } ?>
    <?php if ($data->variant_d() != "") { echo '<li>' . $data->variant_d() . '</li>'; } ?>
    <?php if ($data->variant_e() != "") { echo '<li>' . $data->variant_e() . '</li>'; } ?>
    <?php if ($data->variant_f() != "") { echo '<li>' . $data->variant_f() . '</li>'; } ?>
  </ul>
</div>