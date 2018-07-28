<?php snippet('head') ?>

<?php snippet('nav') ?>

<main class="location <? $page->slug(); ?>">
  <div class="bubble-boxes">
    <div class="box brown"></div>
    <div class="box tan"></div>
    <div class="box red"></div>
  </div>
  <div class="hero">
    <div class="details-holder">
      <div class="details"> 
        <div class="name"><?php $page->title(); ?></div>
        <?php if ($page->hours() != "") { ?>
          <div class="hours">
            <div class="label"><span>HOURS:</span></div>
            <div class="info">
              <?= $page->hours()->kirbytext(); ?>
            </div>
          </div>
        <?php } ?>

        <!-- Address -->
        <address>
          <a href="<?= $page->map(); ?>">
            <span class="street-address"><?= $page->street_address(); ?></span><br>
            <span class="city"><?= $page->city(); ?></span>, 
            <span class="state"><?= $page->state(); ?></span> 
            <span class="zip"><?= $page->zip(); ?></span>
          </a>
        </address>

        <!-- Phone Number -->

        <div class="phone">
          <a class="tel" href="tel:<?= $page->phone(); ?>">
            <?= $page->phone(); ?>
          </a>
        </div>
        
        <a class="find-us" href="<?= $page->map(); ?>">
          <span>Find us</span>
        </a>

      </div>
    </div>

    <div class="image-holder">
      <?php if ($page->heroes() != "") { ?>
        <div class="image-carousel">
          <?php foreach ($page->heroes()->toStructure() as $hero) { ?>
            <figure style="background-image:url(<?= $hero->pic()->toFile()->url(); ?>)" alt="<?= $hero->desc(); ?>"></figure>
          <?php } ?>
        </div>
      <?php } ?>
    </div>


    <div class="social-links">
      <?php if ($page->twitter() != "") { ?>
        <a class="twitter" href="<?= $page->twitter(); ?>">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <path d="M.8 25.2c2.7 1.8 6 2.8 9.5 2.8 11.5 0 18-9.7 17.6-18.4 1.2-.9 2.3-2 3.1-3.2-1.1.5-2.3.8-3.6 1 1.3-.8 2.3-2 2.7-3.4-1.2.7-2.5 1.2-3.9 1.5-1.1-1.2-2.7-2-4.5-2-4 0-6.9 3.7-6 7.6-5.2-.3-9.7-2.7-12.8-6.5C1.3 7.4 2 11 4.8 12.8c-1 0-2-.3-2.8-.8-.1 2.9 2 5.6 5 6.2-.9.2-1.8.3-2.8.1.8 2.5 3.1 4.3 5.8 4.3-2.7 2.1-5.9 3-9.2 2.6z"></path>
          </svg>
        </a>
      <?php } ?>
      
      <?php if ($page->facebook() != "") { ?>
        <a class="twitter" href="<?= $page->facebook(); ?>">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <path d="M0 0v32h19.2V21.4h-3.9v-4.5h3.9v-3.3c0-3.9 2.4-6 5.8-6 1.7 0 3.1.1 3.5.2v4h-2.4c-1.9 0-2.2.9-2.2 2.2v2.9h4.5l-.6 4.5h-3.9V32H32V0H0z"></path>
          </svg>
        </a>
      <?php } ?>

      <?php if ($page->email() != "") { ?>
        <a class="email" href="mailto:<?= $page->email(); ?>">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <path d="M1.4 6.1v20.8h29.8V6.1H1.4zm26 1.5L16.3 18.3 5.1 7.6h22.3zm2.3 17.8H2.9V7.6H3l13.3 12.7L29.6 7.6h.1v17.8z"></path>
          </svg>
        </a>
      <?php } ?>  
    </div>

  </div>

  <?php foreach ($page->children()->visible() as $section) { ?>
    
    <?php if ($section->slug() == "calendar") { ?>

      <?php $calendar = $page->find('calendar'); ?>

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
                      <?php } else if ($event->begins() != "" && $event->ends()) { ?>
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


    <?php } else  if ($section->slug() == "taps") { ?>
      <a name="taps"></a>
      <section class="tap-list">
        <div class="headline">Beers on tap...</div>

        <?php $tapList = $page->find('taps'); ?>

        <div class="taps">
          <?php foreach ($tapList->taps()->toStructure() as $tap) { ?>
            <div class="tap">
              <div class="content">
                <?php if ($tap->name() != "") { ?>
                  <div class="name"><?= $tap->name(); ?></div>
                <?php } ?>
                <?php if ($tap->brewery() != "") { ?>
                  <div class="brewery"><?= $tap->brewery(); ?></div>
                <?php } ?>
                <?php if ($tap->style() != "") { ?>
                  <div class="style"><?= $tap->style(); ?></div>
                <?php } ?>

                <?php if ($tap->abv() != "") { ?>
                  <div class="abv"><?= $tap->abv(); ?>% ABV</div>
                <?php } ?>

                <?php if ($tap->ibu() != "") { ?>
                  <div class="ibu"><?= $tap->ibu(); ?> IBU</div>
                <?php } ?>

                <?php if ($tap->price() != "" && $tap->pour() != "") { ?>
                  <div class="price"><?= $tap->pour(); ?>oz @ $<?= $tap->price(); ?></div>
                <?php } else if ($tap->price() != "") { ?>
                  <div class="price">$<?= $tap->price(); ?></div>
                <?php } else if ($tap->pour() != "") { ?>
                  <div class="price"><?= $tap->pour(); ?>oz</div>
                <?php }  ?>
              </div>
            </div>
          <?php } ?>
        </div>

      </section>
      <?php } else  if ($section->slug() == "food") { ?>
        <a name="food"></a>
        <section class="menu full-menu">
          <h2>Food</h2>
          <div class="inner">
            <div class="page food">
              <?php foreach ($section->children()->visible() as $menu) { ?>
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
      <?php } ?>

  <?php } ?>
  
  <a name="food"></a>
  <section class="menu full-menu">
    <h2>Food</h2>
    <div class="inner">
      <div class="page food">
        <div class="menu-section"> 
          <div class="section-title">Appetizers</div>
              <div class="menu-item">
                <div class="name">Grumpy's Drummies</div>
                <div class="price">$10.99</div>
                <div class="desc">Wing flavors are available in: Buffalo: Mild, Medium or Hot, Honey Sriracha, Thai Peanut, BBQ, Surly Furious BBQ or Teriyaki 
                </div>
              </div>
              <div class="menu-item">
                <div class="name">Pork and Kimchi Fries</div>
                <div class="price">$9.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Quesadillas</div>
                <div class="price">$9.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Potato Skins</div>
                <div class="price">$9.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Queso Rolls</div>
                <div class="price">$9.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Beer Battered Onion Rings</div>
                <div class="price">$9.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Tots</div>
                <div class="price">$4.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Nachos El Grumpy</div>
                <div class="price">$10.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Cream Cheese Rolls</div>
                <div class="price">$9.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Chicken Fingers</div>
                <div class="price">$9.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Poutine</div>
                <div class="price">$9.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Mini Corndogs</div>
                <div class="price">$8.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Cheese Curds</div>
                <div class="price">$8.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Mac &amp; Cheese Bies</div>
                <div class="price">$8.99</div>
              </div>
        </div>
        <div class="menu-section">
          <div class="section-title">Salads</div>
              <div class="menu-item">
                <div class="name">Taco Salad</div>
                <div class="price">$10.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Garlicky BLT Salad</div>
                <div class="price">$10.99</div>
                <div class="desc">Deconstructed  to  garlicky  goodness.  Romaine  lightly dressed in a creamy parmesan and garlic dressing, covered in chopped bacon and cherry tomatoes.
                </div>
              </div>
              <div class="menu-item">
                <div class="name">Thai Peanut Salad</div>
                <div class="price">$8.99</div>
                <div class="desc">Mixed  greens  drizzled  with  a  Thai  Peanut  dressing, topped with peapods and peanuts.
                </div>
              </div>
              <div class="menu-item">
                <div class="name">Caesar A La Grumpy</div>
                <div class="price">$8.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Seasonal Greens</div>
                <div class="price">$7.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Soup &amp; Salad</div>
                <div class="price">$6.99</div>
                <div class="desc">Grumpys side dinner salad and a cup of the Soup ‘O The Day help keep Mr. Spare Tire away. Served with Texas Toast
                </div>
              </div>
        </div>
        <div class="menu-section">
          <div class="section-title">Soups</div>
          <div class="section-text"><b>Cup: </b> $4.99,  <b>Bowl: </b> $5.99</div>
              <div class="menu-item">
                <div class="name">Grumpys Mac 'N Cheese</div>
                <div class="price"></div>
                <div class="desc">Ya take yer Mac ’N Cheese, add some brats to counter the  carbs  and  you’ll  keep  warm  all  night.  Served  with  texas toast. Mmmmmm!
                </div>
              </div>
              <div class="menu-item">
                <div class="name">Grumpy's Soup</div>
                <div class="price"></div>
                <div class="desc">They’re  different  every  day,  always  made  from  scratch and will have you upending your bowl for every last drop. Served with texas toast
                </div>
              </div>
              <div class="menu-item">
                <div class="name">Beer Cheese Soup</div>
                <div class="price"></div>
              </div>
              <div class="menu-item">
                <div class="name">Mom's Homemade Chili</div>
                <div class="price"></div>
              </div>
              <div class="menu-item">
                <div class="name">Vegan Chili</div>
                <div class="price"></div>
              </div>
              <div class="menu-item">
                <div class="name">Soup &amp; ½ Sandwich</div>
                <div class="price">$8.99</div>
              </div>
        </div>
        <div class="menu-section">
          <div class="section-title">Sandwiches</div>
              <div class="menu-item">
                <div class="name">Grilld Cheese</div>
                <div class="price">$7.99</div>
                <div class="desc">Make it a ham & cheese for $2 more
                </div>
              </div>
              <div class="menu-item">
                <div class="name">Hot Pastrami</div>
                <div class="price">$9.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Grilled Reuben</div>
                <div class="price">$10.99</div>
              </div>
              <div class="menu-item">
                <div class="name">BBQ Chicken Sandwich</div>
                <div class="price">$9.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Cajun Chicken Sandwich</div>
                <div class="price">$9.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Buffalo Wing Chicken Sandwich</div>
                <div class="price">$10.99</div>
              </div>
              <div class="menu-item">
                <div class="name">BLT</div>
                <div class="price">$8.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Hammerhead Hoagie</div>
                <div class="price">$8.99</div>
                <div class="desc">Provolone and mayo on top of tender and slow roasted rib meat tossed in our famous Surly Furious BBQ sauce
                </div>
              </div>
              <div class="menu-item">
                <div class="name">The Cuban</div>
                <div class="price">$9.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Kim Chi Mock Duck Banh Mi</div>
                <div class="price">$8.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Veggie Sandwich</div>
                <div class="price">$8.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Pork Cake Sliders</div>
                <div class="price">$10.99</div>
                <div class="desc">Who needs crab when you can have our delicious pulled pork? Fried with an array of spices, topped with melted provlone and mayo.
                </div>
              </div>
              <div class="menu-item">
                <div class="name">Hot Beef 'N Cheddar</div>
                <div class="price">$10.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Southwestern Turkey</div>
                <div class="price">$10.99</div>
              </div>
          <div class="section-text">Served with a pickle spear and potato chips<br>Substitute fries, tater tots, or veggies for $1.99<br>Or onion rings for $2.45<br>Add a side of seasoned sour cream for $1.25</div>
        </div>
        <div class="menu-section">
          <div class="section-title">Specialty Hot Dogs</div>
              <div class="menu-item">
                <div class="name">Seattle Dogs</div>
                <div class="price">$9.99</div>
                <div class="desc">Two all beef franks slathered in our bacon, green onion and cream cheese mix
                </div>
              </div>
              <div class="menu-item">
                <div class="name">Coney Dogs St. Paul Style</div>
                <div class="price"></div>
                <div class="desc">THIS AIN’T NO CHILI DOG! Grilled buns, Nathans dogs, shredded cheddar jack, a dash of mustard and onions on the side
                </div>
              </div>
              <div class="menu-item">
                <div class="name">The Southside</div>
                <div class="price">$9.99</div>
              </div>
        </div>
        <div class="menu-section">
          <div class="section-title">Big Burgers</div>
              <div class="menu-item">
                <div class="name">Garlic Cheesy Burger</div>
                <div class="price">$10.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Lil' Grumpy Burgers or Chicken Sliders</div>
                <div class="price">$7.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Big Assed Breakfast Burger</div>
                <div class="price">$10.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Spud Burger</div>
                <div class="price">$10.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Veggie Burger</div>
                <div class="price">$8.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Mac 'N Chili Burger</div>
                <div class="price">$10.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Grumpy's Garlic Bomb Burger</div>
                <div class="price">$10.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Slow Burn Burger</div>
                <div class="price">$11.99</div>
              </div>
              <div class="menu-item">
                <div class="name">The Burgermeister</div>
                <div class="price">$11.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Juicy Lucy</div>
                <div class="price">$10.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Cream Cheese Burger</div>
                <div class="price">$10.99</div>
              </div>
              <div class="menu-item">
                <div class="name">The Elvis</div>
                <div class="price">$10.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Paddy Melt</div>
                <div class="price">$10.99</div>
              </div>
              <div class="menu-item">
                <div class="name">Build Your Own Fuckin' Burger</div>
                <div class="price">$10.99</div>
              </div>
        </div>
      </div>
    </div>
  </section><a name="booze"></a>
  <section class="menu full-menu">
    <h2>Booze</h2>
    <div class="inner">
      <div class="page booze">
        <div class="menu-section">
          <div class="section-title">Whiskey</div>
              <div class="menu-item">
                <div class="name">Bulliet Rye</div>
              </div>
              <div class="menu-item">
                <div class="name">Crown Royal</div>
              </div>
              <div class="menu-item">
                <div class="name">High West</div>
                <ul class="options">
                  <li>2x Rye</li>
                  <li>Campfire</li>
                  <li>White Whiskey</li>
                </ul>
              </div>
              <div class="menu-item">
                <div class="name">Jack Daniels</div>
              </div>
              <div class="menu-item">
                <div class="name">Jameson</div>
                <ul class="options">
                  <li>Black Barrel</li>
                  <li>Cask Mates</li>
                </ul>
              </div>
              <div class="menu-item">
                <div class="name">Jim Beam Rye</div>
              </div>
              <div class="menu-item">
                <div class="name">Knob Creek</div>
              </div>
              <div class="menu-item">
                <div class="name">Powers</div>
              </div>
              <div class="menu-item">
                <div class="name">Seagrams 7</div>
              </div>
              <div class="menu-item">
                <div class="name">Windsor</div>
              </div>
        </div>
        <div class="menu-section">
          <div class="section-title">Bourbon</div>
              <div class="menu-item">
                <div class="name">Bookers</div>
              </div>
              <div class="menu-item">
                <div class="name">Bulleit Bourbon</div>
              </div>
              <div class="menu-item">
                <div class="name">Knob Creek</div>
              </div>
              <div class="menu-item">
                <div class="name">Jim Beam</div>
              </div>
              <div class="menu-item">
                <div class="name">Wild Turkey</div>
              </div>
        </div>
        <div class="menu-section">
          <div class="section-title">Scotch</div>
              <div class="menu-item">
                <div class="name">Aberlour 12</div>
              </div>
              <div class="menu-item">
                <div class="name">Dewars</div>
              </div>
              <div class="menu-item">
                <div class="name">Glenfarclas</div>
              </div>
              <div class="menu-item">
                <div class="name">Glenlivet</div>
                <ul class="options">
                  <li>Nadurra</li>
                  <li>Oloroso</li>
                </ul>
              </div>
              <div class="menu-item">
                <div class="name">Laphroiag</div>
              </div>
              <div class="menu-item">
                <div class="name">MacCallan 12</div>
              </div>
        </div>
        <div class="menu-section">
          <div class="section-title">Vodka</div>
              <div class="menu-item">
                <div class="name">Absolut</div>
                <ul class="options">
                  <li>Citron</li>
                  <li>Peppar</li>
                </ul>
              </div>
              <div class="menu-item">
                <div class="name">Grey Goose</div>
              </div>
              <div class="menu-item">
                <div class="name">High West</div>
              </div>
              <div class="menu-item">
                <div class="name">J. Carver</div>
                <ul class="options">
                  <li>Lake House</li>
                </ul>
              </div>
              <div class="menu-item">
                <div class="name">Ketel One</div>
              </div>
              <div class="menu-item">
                <div class="name">Stoli</div>
                <ul class="options">
                  <li>Blueberry</li>
                  <li>Orange</li>
                  <li>Raspberry</li>
                  <li>Vanilla</li>
                </ul>
              </div>
              <div class="menu-item">
                <div class="name">Titos</div>
              </div>
              <div class="menu-item">
                <div class="name">Van Gogh</div>
                <ul class="options">
                  <li>Espresso</li>
                </ul>
              </div>
        </div>
        <div class="menu-section">
          <div class="section-title">Gin</div>
              <div class="menu-item">
                <div class="name">Bombay Sapphire</div>
              </div>
              <div class="menu-item">
                <div class="name">Hendricks</div>
              </div>
              <div class="menu-item">
                <div class="name">J. Carver</div>
                <ul class="options">
                  <li>Grimm Farm</li>
                  <li>Barrel Aged</li>
                </ul>
              </div>
              <div class="menu-item">
                <div class="name">Tanqueray</div>
              </div>
        </div>
        <div class="menu-section">
          <div class="section-title">Aquavit</div>
              <div class="menu-item">
                <div class="name">Gamle Ode Aquavit</div>
                <ul class="options">
                  <li>Celebration</li>
                  <li>Dill</li>
                </ul>
              </div>
        </div>
        <div class="menu-section">
          <div class="section-title">Rum</div>
              <div class="menu-item">
                <div class="name">Bacardi</div>
                <ul class="options">
                  <li>Limon</li>
                </ul>
              </div>
              <div class="menu-item">
                <div class="name">Captain Morgan</div>
              </div>
              <div class="menu-item">
                <div class="name">Meyers Dark</div>
              </div>
              <div class="menu-item">
                <div class="name">Sailor Jerry</div>
              </div>
        </div>
        <div class="menu-section">
          <div class="section-title">Tequila</div>
              <div class="menu-item">
                <div class="name">Altos Silver</div>
                <ul class="options">
                  <li>Respasado</li>
                </ul>
              </div>
              <div class="menu-item">
                <div class="name">Avion Silver</div>
              </div>
              <div class="menu-item">
                <div class="name">Cazadores Blanco</div>
                <ul class="options">
                  <li>Resposado</li>
                </ul>
              </div>
              <div class="menu-item">
                <div class="name">Casamigos Blanco</div>
                <ul class="options">
                  <li>Resposado</li>
                  <li>Anejo</li>
                </ul>
              </div>
              <div class="menu-item">
                <div class="name">Patron</div>
                <ul class="options">
                  <li>Citronge</li>
                  <li>XO Campfire</li>
                </ul>
              </div>
              <div class="menu-item">
                <div class="name">Sauza Gold</div>
              </div>
        </div>
        <div class="menu-section">
          <div class="section-title">Liqueurs</div>
              <div class="menu-item">
                <div class="name">Brady's Irish Cream</div>
              </div>
              <div class="menu-item">
                <div class="name">Campari</div>
              </div>
              <div class="menu-item">
                <div class="name">Cruzan Coconut</div>
              </div>
              <div class="menu-item">
                <div class="name">Fernet Branca</div>
              </div>
              <div class="menu-item">
                <div class="name">Khalua</div>
              </div>
              <div class="menu-item">
                <div class="name">Midori</div>
              </div>
              <div class="menu-item">
                <div class="name">Pimms</div>
              </div>
              <div class="menu-item">
                <div class="name">Polish Brandy</div>
              </div>
              <div class="menu-item">
                <div class="name">RumChata</div>
              </div>
              <div class="menu-item">
                <div class="name">Rumpleminze</div>
              </div>
              <div class="menu-item">
                <div class="name">Sambuca</div>
                <ul class="options">
                  <li>Black</li>
                </ul>
              </div>
              <div class="menu-item">
                <div class="name">Sloe Gin</div>
              </div>
              <div class="menu-item">
                <div class="name">Southern Comfort</div>
              </div>
        </div>
      </div>
    </div>
  </section>
  <section class="menu-stripe">
    <div class="diamonds">
      <div class="orange"></div>
      <div class="teal"></div>
    </div>
  </section>
</main>

<?php snippet('footer') ?>