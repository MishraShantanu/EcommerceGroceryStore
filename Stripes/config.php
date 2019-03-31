
<?php
require_once('vendor\\autoload.php');


$stripe = [
  "secret_key"      => 'sk_test_bPj5GxRWumK2Fu9dMPb4SP5n000EWCATyg',
  "publishable_key" => 'pk_test_MJeOK9dcJ7AnO0vo1xmjTsFO00xdIy8sV7'
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>