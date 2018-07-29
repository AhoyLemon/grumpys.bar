<?php 
  $status = null;
  if ($data->publish()->isNotEmpty() && date("Ymd") <  date("Ymd", strtotime($data->publish())))       { $status = 'pending'; }
  if ($data->event_date()->isNotEmpty() && date("Ymd") >  date("Ymd", strtotime($data->event_date()))) { $status = 'expired'; }
?>

<div class="single-event event-text">
  <?php if ($status) { ?>
    <div class="status"><?= $status; ?></div>
  <?php } ?>
  <div class="inner">
    <div class="when">
      <time><?= date("l, F jS", strtotime($data->event_date())); ?></time>
    </div>

    <div class="name"><?= $data->name(); ?></div>

    <div class="desc"><?= $data->desc()->kirbytext(); ?></div>
  </div>
</div>