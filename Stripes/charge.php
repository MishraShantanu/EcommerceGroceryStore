<<<<<<< HEAD

=======
>>>>>>> 6808209443273f06eb73cda69d574bf2eff6acd3
<?php
  require_once('./config.php');
  $token  = $_POST['stripeToken']; // retrieve stripeToken POST parameter to charge the card
  $customer = \Stripe\Customer::create(array(
      'email' => $_POST['stripeEmail'],
      'card'  => $token
  ));
  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
<<<<<<< HEAD
      'amount'   => $_POST['amount'],
      'currency' => 'usd'

  ));
  echo "<h1>Successfully charged", $_POST['amount']/100, "</h1>";
 
=======
      'amount'   => 5000,
      'currency' => 'usd'
  ));
  echo '<h1>Successfully charged $50!</h1>';
>>>>>>> 6808209443273f06eb73cda69d574bf2eff6acd3
?>