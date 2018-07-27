<div class="event weekly-event">
  
  <!-- WHEN -->
  <?php if ($data->all_day() == "1") { ?>
    <div class="when">All Day</div>
  <?php } else if ($data->begins() != "" && $data->ends()) { ?>
    <div class="when"><?= date("g:ia", strtotime($data->begins())); ?> - <?= date("g:ia", strtotime($data->ends())); ?></div>
  <?php } else if ($data->begins() != "") { ?>
    <div class="when"><?= date("g:ia", strtotime($data->begins())); ?></div>
  <?php } else if ($data->ends() != "") { ?>
    <div class="when">'til <?= date("g:ia", strtotime($data->ends())); ?></div>
  <?php } ?>

  <!-- TITLE -->
  <?php if ($data->title() != "") { ?>
    <div class="name"><?= $data->title(); ?></div>
  <?php } ?>

  <div class="desc">$1 off beer, cocktails and appetizers; $4.50 wings</div>

</div>