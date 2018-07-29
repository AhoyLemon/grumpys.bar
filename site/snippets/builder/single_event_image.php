<?php 
  $status = null;
  if ($data->publish()->isNotEmpty() && date("Ymd") <  date("Ymd", strtotime($data->publish()))) { $status = 'pending'; }
  if ($data->expires()->isNotEmpty() && date("Ymd") >  date("Ymd", strtotime($data->expires()))) { $status = 'expired'; }
?>


<div class="single-event event-image">
  <figure class="<?php if ($status) { echo $status; } ?>">
    <?php if ($data->pic()->isNotEmpty()): ?>
      <img src="<?= $page->image($data->pic())->url() ?>" />
    <?php endif ?>
  </figure>

  <figcaption>

    <dl>
      <?php if ($data->publish()->isNotEmpty()) {  ?>
        <dt <?php if ($status == 'pending') { echo 'class="error"'; } ?>>PUBLISH</dt>
        <dd><?= date('l, F jS Y', strtotime($data->publish())); ?></dd>
      <?php } ?>

      <?php if ($data->expires()->isNotEmpty()) {  ?>
        <dt <?php if ($status == 'expired') { echo 'class="error"'; } ?>>EXPIRES</dt>
        <dd><?= date('l, F jS Y', strtotime($data->expires())); ?></dd>
      <?php } ?>

    </dl>

  </figcaption>

</div>

