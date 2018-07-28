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
            <div class="info" style="font-size:150%;">Every Day: 11AM to 2AM</div>
          </div>
        <?php } ?>
            <address><a href="https://goo.gl/maps/xTtEWzqfqa92"><span class="street-address">1111 S Washington Ave</span><br><span class="city">Minneapolis</span>, <span class="state">MN</span> <span class="zip">55415</span></a></address>
            <div class="phone"><a class="tel" href="tel:(612) 340-9738">(612) 340-9738</a></div><a class="find-us" href="https://goo.gl/maps/xTtEWzqfqa92"><span>Find us</span></a>
      </div>
    </div>
    <div class="image-holder">
      <div class="image-carousel">
        <figure style="background-image:url(https://picsum.photos/1230/500?random)"></figure>
        <figure style="background-image:url(https://picsum.photos/1231/501?random)"></figure>
      </div>
    </div>
    <div class="social-links"><a class="twitter" href="https://twitter.com/grumpysdt">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
              <path d="M.8 25.2c2.7 1.8 6 2.8 9.5 2.8 11.5 0 18-9.7 17.6-18.4 1.2-.9 2.3-2 3.1-3.2-1.1.5-2.3.8-3.6 1 1.3-.8 2.3-2 2.7-3.4-1.2.7-2.5 1.2-3.9 1.5-1.1-1.2-2.7-2-4.5-2-4 0-6.9 3.7-6 7.6-5.2-.3-9.7-2.7-12.8-6.5C1.3 7.4 2 11 4.8 12.8c-1 0-2-.3-2.8-.8-.1 2.9 2 5.6 5 6.2-.9.2-1.8.3-2.8.1.8 2.5 3.1 4.3 5.8 4.3-2.7 2.1-5.9 3-9.2 2.6z"></path>
            </svg></a><a class="facebook" href="https://www.facebook.com/grumpysdt">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
              <path d="M0 0v32h19.2V21.4h-3.9v-4.5h3.9v-3.3c0-3.9 2.4-6 5.8-6 1.7 0 3.1.1 3.5.2v4h-2.4c-1.9 0-2.2.9-2.2 2.2v2.9h4.5l-.6 4.5h-3.9V32H32V0H0z"></path>
            </svg></a><a class="email" href="mailto:johnny@grumpys-bar.com">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
              <path d="M1.4 6.1v20.8h29.8V6.1H1.4zm26 1.5L16.3 18.3 5.1 7.6h22.3zm2.3 17.8H2.9V7.6H3l13.3 12.7L29.6 7.6h.1v17.8z"></path>
            </svg></a>
    </div>
  </div><a name="calendar"></a>
  <section class="calendar">
        <div class="day">
          <div class="inner">
            <div class="title">Today</div>
            <div class="items">
              <div class="item">
                <div class="when">3pm to 7pm</div>
                <div class="desc">$1 off beer, cocktails and appetizers; $4.50 wings</div>
              </div>
              <div class="item">
                <div class="when">9pm to 11pm</div>
                <div class="name">Trivia Mafia</div>
              </div>
              <div class="item">
                <div class="when">9pm to 2am</div>
                <div class="desc">Half priced bottles of wine, $2.50 PBR, $3.50 rail drinks</div>
              </div>
            </div>
          </div>
        </div>
        <div class="day">
          <div class="inner">
            <div class="title">Tomorrow</div>
            <div class="items">
              <div class="item">
                <div class="when">11am to 7pm</div>
                <div class="desc">$1 off beer, cocktails and appetizers; $2 domestic bottles and cans; $3 rail drinks; $4.50 wings</div>
              </div>
              <div class="item">
                <div class="when">10pm to 1am</div>
                <div class="name">Death Comedy Jam</div>
                <div class="desc">Test your material or just sit back and heckle the newbies. It makes no difference to these guys whether you laugh or cry.</div>
              </div>
              <div class="item">
                <div class="when">9pm to 2am</div>
                <div class="desc">$2.50 PBR tall boys, $4 Stoli drinks, $4.50 Red Breast Whiskey</div>
              </div>
            </div>
          </div>
        </div>
        <div class="day">
          <div class="inner">
            <div class="title">Thursday</div>
            <div class="items">
              <div class="item">
                <div class="when">3pm to 7pm</div>
                <div class="desc">$1 off beer, cocktails and appetizers; $4.50 wings</div>
              </div>
              <div class="item">
                <div class="when">10pm to 2am</div>
                <div class="name">Karaoke</div>
                <div class="desc">PLUS: Music Appreciation Night with live DJ’s!</div>
              </div>
              <div class="item">
                <div class="when">9pm to 2am</div>
                <div class="desc">$2.50 tall boys</div>
              </div>
            </div>
          </div>
        </div>
        <div class="day">
          <div class="inner">
            <div class="title">Friday</div>
            <div class="items">
              <div class="item">
                <div class="when">3pm to 7pm</div>
                <div class="desc">$1 off beer, cocktails and appetizers; $4.50 wings</div>
              </div>
            </div>
          </div>
        </div>
        <div class="day">
          <div class="inner">
            <div class="title">Saturday</div>
            <div class="items">
              <div class="item">
                <div class="when">11am</div>
                <div class="name">Grumpy's Brunch</div>
                <div class="desc">Tired of standing in line for a couple of eggs over easy? Try our Barnyard brunch.</div>
              </div>
              <div class="item">
                <div class="when">10pm to 2am</div>
                <div class="name">Residency</div>
              </div>
            </div>
          </div>
        </div>
        <div class="day">
          <div class="inner">
            <div class="title">Sunday</div>
            <div class="items">
              <div class="item">
                <div class="when">11am</div>
                <div class="name">Grumpy's Brunch</div>
                <div class="desc">Try the 666—six sour cream pancakes, six sausage links and six ounces of maple syrup</div>
              </div>
              <div class="item">
                <div class="when">10pm</div>
                <div class="name">21 Bingo</div>
                <div class="desc">It's our way of letting you have a chance at winning back some of your drinking money</div>
              </div>
            </div>
          </div>
        </div>
  </section><a name="taps"></a>
  <div class="tap-list">
    <div class="headline">Beers on tap...</div>
    <div class="taps">
          <div class="tap">
            <div class="content">
              <div class="name">Emily's Dream #30 Blood Orange Sour</div>
              <div class="brewery">LTD Brewing</div>
              <div class="style">Sour Ale</div>
            </div>
          </div>
          <div class="tap">
            <div class="content">
              <div class="name">Fuzzi Lil Pucker</div>
              <div class="brewery">56 Brewing</div>
              <div class="style">Sour Ale</div>
            </div>
          </div>
          <div class="tap">
            <div class="content">
              <div class="name">Short Pants</div>
              <div class="brewery">Bauhaus Brew Labs</div>
              <div class="style">Radler</div>
            </div>
          </div>
          <div class="tap">
            <div class="content">
              <div class="name">Dakota Soul</div>
              <div class="brewery">Summit</div>
              <div class="style">Pilsner</div>
            </div>
          </div>
          <div class="tap">
            <div class="content">
              <div class="name">B-Side Pils</div>
              <div class="brewery">Indeed</div>
              <div class="style">Pilsner</div>
            </div>
          </div>
          <div class="tap">
            <div class="content">
              <div class="name">Pils</div>
              <div class="brewery">Fair State</div>
              <div class="style">Pilsner</div>
            </div>
          </div>
          <div class="tap">
            <div class="content">
              <div class="name">Hamm's</div>
              <div class="brewery">Miller</div>
              <div class="style">Lager</div>
            </div>
          </div>
          <div class="tap">
            <div class="content">
              <div class="name">Pils</div>
              <div class="brewery">Lagunitas</div>
              <div class="style">Pilsner</div>
            </div>
          </div>
          <div class="tap">
            <div class="content">
              <div class="name">Coors Light</div>
              <div class="brewery">Coors</div>
              <div class="style">Lager</div>
            </div>
          </div>
          <div class="tap">
            <div class="content">
              <div class="name">Summer Crush</div>
              <div class="brewery">Castle Danger</div>
              <div class="style">Pale Ale</div>
            </div>
          </div>
          <div class="tap">
            <div class="content">
              <div class="name">WacTown Wheat</div>
              <div class="brewery">Waconia Brewing Co</div>
              <div class="style">Pale Wheat</div>
            </div>
          </div>
          <div class="tap">
            <div class="content">
              <div class="name">Oberon</div>
              <div class="brewery">Bell's</div>
              <div class="style">Pale Wheat</div>
            </div>
          </div>
          <div class="tap">
            <div class="content">
              <div class="name">Xtra Citra</div>
              <div class="brewery">Surly</div>
              <div class="style">Pale Ale</div>
            </div>
          </div>
          <div class="tap">
            <div class="content">
              <div class="name">Tea Break Blonde</div>
              <div class="brewery">Bent Paddle</div>
              <div class="style">Blonde Ale</div>
            </div>
          </div>
          <div class="tap">
            <div class="content">
              <div class="name">EPA</div>
              <div class="brewery">Summit</div>
              <div class="style">Pale Ale</div>
            </div>
          </div>
          <div class="tap">
            <div class="content">
              <div class="name">Mango Blonde</div>
              <div class="brewery">Lift Bridge</div>
              <div class="style">Blonde</div>
            </div>
          </div>
          <div class="tap">
            <div class="content">
              <div class="name">Lonely Blonde</div>
              <div class="brewery">Fulton</div>
              <div class="style">Blonde</div>
            </div>
          </div>
          <div class="tap">
            <div class="content">
              <div class="name">Fathom</div>
              <div class="brewery">Ballast Point</div>
              <div class="style">IPA</div>
            </div>
          </div>
          <div class="tap">
            <div class="content">
              <div class="name">300</div>
              <div class="brewery">Fulton</div>
              <div class="style">IPA</div>
            </div>
          </div>
          <div class="tap">
            <div class="content">
              <div class="name">Two Hearted</div>
              <div class="brewery">Bell's</div>
              <div class="style">IPA</div>
            </div>
          </div>
          <div class="tap">
            <div class="content">
              <div class="name">Furious</div>
              <div class="brewery">Surly</div>
              <div class="style">IPA</div>
            </div>
          </div>
          <div class="tap">
            <div class="content">
              <div class="name">Nitro Oatmeal Stout</div>
              <div class="brewery">Founders</div>
            </div>
          </div>
          <div class="tap">
            <div class="content">
              <div class="name">Outcider</div>
              <div class="brewery">2 Towns Ciderhouse</div>
              <div class="style">Cider</div>
            </div>
          </div>
          <div class="tap">
            <div class="content">
              <div class="name">Paulaner Hefewizen</div>
              <div class="brewery">Paulaner</div>
              <div class="style">Hefeweisen</div>
            </div>
          </div><a class="untappd-link">
        <div class="content"><img src="img/untappd-logo.png"></div></a>
    </div>
  </div><a name="food"></a>
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