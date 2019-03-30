<?php
  require_once('./config.php');
  $token  = $_POST['stripeToken']; // retrieve stripeToken POST parameter to charge the card
  $customer = \Stripe\Customer::create(array(
      'email' => $_POST['stripeEmail'],
      'card'  => $token
  ));
  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => 5000,
      'currency' => 'usd'
  ));
  echo '<h1>Successfully charged $50!</h1>';
?>