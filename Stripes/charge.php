
<?php
  require_once('./config.php');
  $token  = $_POST['stripeToken']; // retrieve stripeToken POST parameter to charge the card
  $customer = \Stripe\Customer::create(array(
      'email' => $_POST['stripeEmail'],
      'card'  => $token
  ));
  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => $_POST['amount'],
      'currency' => 'usd'

  ));
  echo "<h1>Successfully charged", $_POST['amount']/100, "</h1>";
 
?>