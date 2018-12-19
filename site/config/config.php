<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'K2-PRO-920391cf8a84c4059ce220e8a70ff348');
c::set('timezone','America/Chicago');


c::set('panel.stylesheet', 'assets/css/panel.css');



/*
---------------------------------------
Routing
---------------------------------------
*/

c::set('routes', array(
  array(
    'pattern' => 'downtown.html',
    'action'  => function() {
      header::redirect('/downtown', 301);
    }
  ),
  array(
    'pattern' => 'roseville.html',
    'action'  => function() {
      header::redirect('/roseville', 301);
    }
  ),
  array(
    'pattern' => 'northeast.html',
    'action'  => function() {
      header::redirect('/northeast', 301);
    }
  ),
  array(
    'pattern' => 'nordeast',
    'action'  => function() {
      return go('/northeast');
    }
  )
));