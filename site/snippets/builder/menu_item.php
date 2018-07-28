<div class="menu-item single-item">
  <div class="name-and-price">
    <div class="name">
      <?= $data->name(); ?>
    </div>
    <div class="price">
      <?= $data->price(); ?>
    </div>
  </div>
  <div class="desc">
    <?= $data->text()->kirbytext(); ?>
  </div>
</div>