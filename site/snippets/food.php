<a name="<?= $food->slug(); ?>"></a>
<section class="menu full-menu" itemscope itemtype="http://schema.org/Menu">
  <h2 itemprop="name">Food</h2>
  <div class="inner">
    <div class="page food">
      <?php foreach ($food->children()->visible() as $menu) { ?>
        <div class="menu-section" itemprop="hasMenuSection" itemscope="" itemtype="http://schema.org/MenuSection">

          <div class="section-title" itemprop="name"><?= $menu->title(); ?></div>
          
          <?php foreach ($menu->builder()->toStructure() as $item) { ?>
          
            <?php if ($item->_fieldset() == "menu_item") { ?>
              <div class="menu-item" itemprop="hasMenuItem" itemscope="" itemtype="http://schema.org/menuItem">
                <div class="name" itemprop="name"><?= $item->name(); ?></div>
                <?php if ($item->price()->isNotEmpty()) { ?>
                  <div class="price" itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
                    <span itemprop="price"><?= $item->price(); ?></span>
                  </div>
                <?php } ?>
                <?php if ($item->text()->isNotEmpty()) { ?>
                  <div class="desc" itemprop="description"><?= $item->text()->kirbytext(); ?> </div>
                <?php } ?>
              </div>
            <?php } else if ($item->_fieldset() == "menu_text") { ?>
              <div class="menu-item menu-text">
                <div class="text"><?= $item->text()->kirbytext(); ?> </div>
              </div>
            <?php } ?>  

          <?php } ?>
        
        </div>
      <?php } ?>
    </div>
  </div>
</section>