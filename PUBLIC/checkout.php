<?php require_once("..\\resources\\config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>

<?php require_once("..\\resources\\cart.php"); ?>


 <!-- Page Content -->
    <div class="container">


<!-- /.row --> 

<div class="row">
      <h4 class = "text-center bg-danger"><?php display_message();  ?></h4>
      <h1>Checkout</h1>


  <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
    <input type="hidden" name="cmd" value="_cart">
  <input type="hidden" name="business" value="shantanumishra33-facilitator@icloud.com ">
   <input type="hidden" name="display" value="1">
    <input type="hidden" name="add" value="1">
    <input type="hidden" name="upload" value="1">
    

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
            <?php cart();  ?>
        </tbody>
    </table>
  
  <input type="image" name="upload"
    src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
    alt="PayPal - The safer, easier way to pay online">
  


   
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
