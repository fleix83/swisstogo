<?php
  require_once('stripe-php/init.php');

  if (c::get('stripe_test_mode')) {
    $pk = c::get('pk_test');
    $sk = c::get('sk_test');
  } else {
    $pk = c::get('pk_live');
    $sk = c::get('sk_live');
    }

  $stripe = array(
    "publishable_key" => $pk,
    "secret_key"      => $sk
  );

  \Stripe\Stripe::setApiKey($stripe['secret_key']);

?>
