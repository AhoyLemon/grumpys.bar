<?php snippet('head') ?>

<?php snippet('nav') ?>

<main class="location <? $page->slug(); ?>">
  
  <?php snippet('hero', ['location' => $page->parent()]) ?>

  <?php snippet('booze', ['boozeMenu' => $page]) ?>
  
  <section class="menu-stripe">
    <div class="diamonds">
      <div class="orange"></div>
      <div class="teal"></div>
    </div>
  </section>
</main>

<?php snippet('footer') ?>