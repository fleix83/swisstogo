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


c::set('license', 'K2-PRO-98077fd5b0d39e8703a046ff38bf5967');
c::set('panel.install', false);
c::set('home','swisstogo');
c::set('debug',true);

/* STRIPE SCK CONFIG FILE */
include 'sck.config.php';

/* LANGUAGES */
c::set('languages', array(
  array(
    'code'    => 'en',
    'name'    => 'En',
    'default' => true,
    'locale'  => 'en_US',
    'url'     => '/',
  ),
  array(
    'code'    => 'de',
    'name'    => 'De',
    'locale'  => 'de_DE',
    'url'     => '/de',
  ),
  array(
    'code'    => 'ru',
    'name'    => 'Ru',
    'locale'  => 'ru_RU',
    'url'     => '/ru',
  ),
));




/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/
