<?php snippet('head') ?>

<?php snippet('nav') ?>

<main class="calendar-main">
  
  <?php snippet('hero', ['location' => $page->parent()]) ?>

  <?php snippet('calendar', ['calendar' => $page]) ?>
  
  <section class="menu-stripe">
    <div class="diamonds">
      <div class="orange"></div>
      <div class="teal"></div>
    </div>
  </section>
</main>

<?php snippet('footer') ?>