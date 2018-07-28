<a name="<?= $food->slug(); ?>"></a>
<section class="menu full-menu">
  <h2>Food</h2>
  <div class="inner">
    <div class="page food">
      <?php foreach ($food->children()->visible() as $menu) { ?>
        <div class="menu-section">

          <div class="section-title"><?= $menu->title(); ?></div>
          
          <?php foreach ($menu->builder()->toStructure() as $item) { ?>
            <div class="menu-item">
              <div class="name"><?= $item->name(); ?></div>
              <div class="price"><?= $item->price(); ?></div>
              <div class="desc"><?= $item->text(); ?> </div>
            </div>
          <?php } ?>
        
        </div>
      <?php } ?>
    </div>
  </div>
</section>