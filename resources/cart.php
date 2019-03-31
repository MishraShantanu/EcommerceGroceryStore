<?php require_once("..\\resources\\config.php"); ?>

<?php 
if(isset($_GET['add'])){
	$query = query("SELECT * FROM products WHERE product_id = " . escape_string($_GET['add']). "");
	confirm($query);
	while ($row = fetch_array($query)) {
		if($row['product_quantity']!= $_SESSION['product_' . $_GET['add']]){
			$_SESSION['product_' . $_GET['add']] +=1; 
			redirect("..\\PUBLIC\\checkout.php");
		}else{
			set_message("We only have". $row['product_title'] . $row['product_quantity'] . " " . "Available" );
			redirect("..\\PUBLIC\\checkout.php");
		}
	}
	
}
if(isset($_GET['remove'])){
	$_SESSION['product_'. $_GET['remove']]--;
	if($_SESSION['product_'. $_GET['remove']] <1 ){
		unset($_SESSION['price_total']);
    	unset($_SESSION['quantity_total']);
		redirect("..\\PUBLIC\\checkout.php");
		
	}else
	{
		redirect("..\\PUBLIC\\checkout.php");
		}
	}
if(isset($_GET['delete'])){
	$_SESSION['product_'	. $_GET['delete']] = '0';
	unset($_SESSION['price_total']);
    unset($_SESSION['quantity_total']);
	redirect("..\\PUBLIC\\checkout.php");
	
}
function cart(){
$item_name = 1;
$item_number =1;
$amount = 1;
$quantity =1; 
$total = 0;
$quantity = 0;
foreach ($_SESSION as $name => $value) {
if($value > 0){
if(substr($name,0,8)=="product_"){
$length = strlen($name)-8;
//$length = $length - 8;
$id = substr($name,8,$length); 
	$query = query("SELECT * FROM products WHERE product_id =" . escape_string($id)."");
	confirm($query);
	while($row =fetch_array($query)){
		$sub = $value * $row['product_price'];
		$quantity +=$value;
$category_links = <<<DELIMETER
<tr>
	 <td>{$row['product_title']}</td>
     <td>{$row['product_price']}</td>
     <td>{$value}</td>
     <td>$sub</td>
     <td><a class='btn btn-success'href="../resources/cart.php?add={$row['product_id']}"><span class="glyphicon glyphicon-plus"></span></a>
         <a class='btn btn-warning' href="../resources/cart.php?remove={$row['product_id']}"><span class="glyphicon glyphicon-minus"></span></a>
         <a class='btn btn-danger'href="../resources/cart.php?delete={$row['product_id']}"><span class="glyphicon glyphicon-remove"></span></a>
     </td>
 
</tr>

			
DELIMETER;
$item_name++;
$item_number++;
$amount++;
$quantity++;
echo $category_links;
$_SESSION['price_total'] = $total +=$sub;
$_SESSION['quantity_total'] = $quantity;
			}
}
}
}


}
?>

