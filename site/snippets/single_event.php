<?php if ($event->_fieldset() == "event_image") { ?>

  <?php 
    $status = null;
    if ($event->publish()->isNotEmpty() && date("Ymd") <  date("Ymd", strtotime($event->publish()))) { $status = 'pending'; }
    if ($event->expires()->isNotEmpty() && date("Ymd") >  date("Ymd", strtotime($event->expires()))) { $status = 'expired'; }
  ?>

  <?php if (!$status) { ?>
    <div class="single-event event-image">
      <figure>
        <img src="<?= $event->pic()->toFile()->url(); ?>" />
      </figure>
    </div>
  <?php } ?>

<?php } else if ($event->_fieldset() == "event_text") { ?>

  <?php 
    $status = null;
    if ($event->publish()->isNotEmpty() && date("Ymd") <  date("Ymd", strtotime($event->publish()))) { $status = 'pending'; }
    if ($event->event_date()->isNotEmpty() && date("Ymd") >  date("Ymd", strtotime($event->event_date()))) { $status = 'expired'; }
  ?>

  <?php if (!$status) { ?>
    <div class="single-event event-text">
      <div class="inner">
        <div class="when">
          <time><?= date("l, F jS", strtotime($event->event_date())); ?></time>
        </div>

        <div class="details">
          <div class="name"><?= $event->name(); ?></div>
          <div class="desc"><?= $event->desc()->kirbytext(); ?></div>
        </div>
      </div>
    </div>
  <?php } ?>
  
<?php } ?>