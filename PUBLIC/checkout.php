<?php require_once("..\\resources\\config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

<?php require_once("..\\resources\\cart.php"); ?>

 

 <!-- Page Content -->
    <div class="container">


<!-- /.row --> 

<div class="row">
      <h4 class = "text-center bg-danger"><?php display_message();  ?></h4>
      <h1>Checkout</h1>


  

     <table class="table table-striped">
        <thead>
          <tr>
           <th>Product</th>
           <th>Price</th>
           <th>Quantity</th>
           <th>Sub-total</th>
     
          </tr>
        </thead>
        <tbody>
            <?php cart();?>  
        </tbody>
    </table>
  
 <?php require_once('..\\Stripes\\config.php'); ?>

<form action="..\\Stripes\\charge.php" method="post">
  <input type="hidden" name="amount" value=<?php if(isset($_SESSION['quantity_total'])){
    echo $_SESSION['price_total']*100;

  } ?>>
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-amount=<?php echo $_SESSION['price_total']*100?> data-description="One year's subscription"></script>
</form>



<!--  ***********CART TOTALS*************-->
            
<div class="col-xs-4 pull-right ">
<h2>Cart Totals</h2>

<table class="table table-bordered" cellspacing="0">

<tr class="cart-subtotal">
<th>Items:</th>
<td><span class="amount"><?php echo isset($_SESSION['quantity_total']) ? $_SESSION['quantity_total']: $_SESSION['quantity_total'] = "0"?></span></td>
</tr>
<tr class="shipping">
<th>Shipping and Handling</th>
<td>Free Shipping</td>
</tr>

<tr class="order-total">
<th>Order Total</th> 
<td><strong><span class="amount">&#36;<?php echo isset($_SESSION['price_total']) ? $_SESSION['price_total']: $_SESSION['price_total'] = "0.00"; ?></span></strong> </td>
</tr>


</tbody>

</table>

</div><!-- CART TOTALS-->


 </div><!--Main Content-->


    </div>
    <!-- /.container -->

 <?php include(TEMPLATE_FRONT . DS . "footer.php") ?>

</body>

</html>
