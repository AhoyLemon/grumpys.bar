<?php
  $currentWeekday = date('l');
  if ($currentWeekday == "Monday")  { 
    $lineup = array($calendar->weekly_monday(), $calendar->weekly_tuesday(), $calendar->weekly_wednesday(), $calendar->weekly_thursday(), $calendar->weekly_friday(), $calendar->weekly_saturday(), $calendar->weekly_sunday() );
  } else if ($currentWeekday == "Tuesday")  { 
    $lineup = array($calendar->weekly_tuesday(), $calendar->weekly_wednesday(), $calendar->weekly_thursday(), $calendar->weekly_friday(), $calendar->weekly_saturday(), $calendar->weekly_sunday(), $calendar->weekly_monday() );
  } else if ($currentWeekday == "Wednesday")  { 
    $lineup = array($calendar->weekly_wednesday(), $calendar->weekly_thursday(), $calendar->weekly_friday(), $calendar->weekly_saturday(), $calendar->weekly_sunday(), $calendar->weekly_monday(), $calendar->weekly_tuesday() );
  } else if ($currentWeekday == "Thursday")  { 
    $lineup = array($calendar->weekly_thursday(), $calendar->weekly_friday(), $calendar->weekly_saturday(), $calendar->weekly_sunday(), $calendar->weekly_monday(), $calendar->weekly_tuesday(), $calendar->weekly_wednesday() );
  } else if ($currentWeekday == "Friday")  { 
    $lineup = array($calendar->weekly_friday(), $calendar->weekly_saturday(), $calendar->weekly_sunday(), $calendar->weekly_monday(), $calendar->weekly_tuesday(), $calendar->weekly_wednesday(), $calendar->weekly_thursday() );
  } else if ($currentWeekday == "Saturday")  { 
    $lineup = array($calendar->weekly_saturday(), $calendar->weekly_sunday(), $calendar->weekly_monday(), $calendar->weekly_tuesday(), $calendar->weekly_wednesday(), $calendar->weekly_thursday(), $calendar->weekly_friday() );
  } else if ($currentWeekday == "Sunday")  { 
    $lineup = array($calendar->weekly_sunday(), $calendar->weekly_monday(), $calendar->weekly_tuesday(), $calendar->weekly_wednesday(), $calendar->weekly_thursday(), $calendar->weekly_friday(), $calendar->weekly_saturday() );
  }
?>

<a name="calendar"></a>
<section class="calendar">
  
  <?php $dayCount = 0; $dayName = "Error"; ?>

  <?php foreach($calendar->single_events()->toStructure() as $singleEvent) { ?>
    
    <?php snippet('single_event', ['event' => $singleEvent]) ?>

  <?php } ?>

  <?php foreach ($lineup as $weekday) { ?>
    <?php
      $dayCount++;
      if ($weekday == $calendar->weekly_monday())         { $dayName =  "Monday"; }
      else if ($weekday == $calendar->weekly_tuesday())   { $dayName =  "Tuesday"; }
      else if ($weekday == $calendar->weekly_wednesday()) { $dayName =  "Wednesday"; }
      else if ($weekday == $calendar->weekly_thursday())  { $dayName =  "Thursday"; }
      else if ($weekday == $calendar->weekly_friday())    { $dayName =  "Friday"; }
      else if ($weekday == $calendar->weekly_saturday())  { $dayName =  "Saturday"; }
      else if ($weekday == $calendar->weekly_sunday())    { $dayName =  "Sunday"; }
    ?>
    <?php if ($weekday != "") { ?>
      <div class="day">
        <div class="inner">
          <div class="title">
            <?php if ($dayCount == 1) { echo 'Today'; }
              else if ($dayCount == 2) { echo 'Tomorrow'; }
              else { echo $dayName; }
            ?>
          </div>
          <div class="items">
            <?php foreach ($weekday->toStructure() as $event) { ?>
              <div class="item">
              
                <!-- WHEN -->
                <?php if ($event->all_day() == "1") { ?>
                  <div class="when">All Day</div>
                <?php } else if ($event->begins() != "" && $event->ends() != "") { ?>
                  <div class="when"><?= date("g:ia", strtotime($event->begins())); ?> - <?= date("g:ia", strtotime($event->ends())); ?></div>
                <?php } else if ($event->begins() != "") { ?>
                  <div class="when"><?= date("g:ia", strtotime($event->begins())); ?></div>
                <?php } else if ($event->ends() != "") { ?>
                  <div class="when">'til <?= date("g:ia", strtotime($event->ends())); ?></div>
                <?php } ?>

                <!-- TITLE -->
                <?php if ($event->title() != "") { ?>
                  <div class="name"><?= $event->title(); ?></div>
                <?php } ?>

                <!-- Description -->
                <div class="desc"><?= $event->desc()->kirbytext(); ?></div>
              </div>
            <?php } ?>

          </div>
        </div>
      </div>
    <?php } ?>
  <?php } ?>

</section>