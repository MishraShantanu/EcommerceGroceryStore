<<<<<<< HEAD

<?php
require_once('vendor\\autoload.php');


$stripe = [
  "secret_key"      => 'sk_test_bPj5GxRWumK2Fu9dMPb4SP5n000EWCATyg',
  "publishable_key" => 'pk_test_MJeOK9dcJ7AnO0vo1xmjTsFO00xdIy8sV7'
=======
<?php
require_once('vendor/autoload.php');

$stripe = [
  "secret_key"      => getenv("secret_key"),
  "publishable_key" => getenv("publishable_key"),
>>>>>>> 6808209443273f06eb73cda69d574bf2eff6acd3
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>