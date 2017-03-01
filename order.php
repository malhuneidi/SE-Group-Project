<!DoCTYPE html>
<html>
<?php
session_start();
include_once("config.php");
?>






<title>Order ThaiFood now</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet"
	href="http://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet"
	href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- jQuery library -->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


<style>
html, body {
	padding: 0;
	height: 100%;
}

body, h1 {
	font-family: "Raleway", Arial, sans-serif
}

h1 {
	letter-spacing: 6px
}

.w3-row-padding img {
	margin-bottom: 12px
}

body {
	font-size: 12px;
	color: #444;
	overflow-x: hidden;
}

#container {
	width: 700px;
	margin: 150px auto;
	background-color: #eee;
	overflow: hidden;
	/* Set overflow: hidden to clear the floats on #main and #sidebar */
	padding: 15px;
}

#main {
	width: 490px;
	float: left;
}

#sidebar {
	width: 200px;
	float: left;
}

input[type=text] {
	width: 330px;
	box-sizing: border-box;
	border: 2px solid #ccc;
	border-radius: 4px;
	font-size: 16px;
	background-color: grey;
	background-image: url('searchicon.png');
	background-position: 10px 10px;
	background-repeat: no-repeat;
	padding: 12px 20px 12px 12px;
	-webkit-transition: width 0.4s ease-in-out;
	transition: width 0.4s ease-in-out;
}

footer {
	width: 100%;
	bottom: 0;
}
</style>

<body>
	<div class="w3-container w3-padding-44 w3-light-green w3-center">

		<div class="w3-padding-62">
			<div class="w3-btn-bar w3-border w3-show-inline-block w3-left">
				<a href="index.php" class="w3-btn w3-border w3-xlarge w3-opacity ">Homepage</a>

				<a href="order.php" class="w3-btn w3-border w3-xlarge w3-opacity ">Order
					Now</a> <a href="contactus.php"
					class="w3-btn w3-border w3-xlarge w3-opacity ">Contact Us</a>
				<!-- !PAGE CONTENT! -->
				<a href="admin.php" class="w3-btn w3-border w3-xlarge w3-opacity ">Admin
					Sign in</a> <a href="tilt1.php"
					class="w3-btn w3-border w3-xlarge w3-opacity ">Merchandise</a>


			</div>
		</div>

	</div>
	<!-- !PAGE CONTENT! -->

	<!-- Header -->
	<header class="w3-panel w3-padding-228 w3-center w3-opacity">
		<h1 class="w3-xlarge">Shopping Cart</h1>
		<h3>Select items to add to cart!</h3>
	</header>
	<div class="orders">
		<?php
$current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);

$results = $mysqli->query("SELECT itemName, itemType, itemDesc, price FROM menu ORDER BY id ASC");
if($results){ 
$orders_item = '<ul class="orders">';
//fetch results set as object and output HTML
while($obj = $results->fetch_object())
{
$orders_item .= <<<EOT
    <li class="product">
    <form method="post" action="order_update.php">
    <div class="itemName"><h3>{$obj->itemName}</h3>
    <div class="itemDesc">{$obj->itemDesc}</div>
    <div class="orderInfo">
    Price {$currency}{$obj->price} 
    
    <fieldset>
    
    <label>
        <span>Choose Spice:</span>
        <select name="order_spice">
        <option value="Black">mild</option>
        <option value="Silver">spicy</option>
        </select>
    </label>
    
    <label>
        <span>Quantity</span>
        <input type="text" size="2" maxlength="2" name="order_qty" value="1" />
    </label>
    
    </fieldset>
    <input type="hidden" name="item name" value="{$obj->product_code}" />
    <input type="hidden" name="type" value="add" />
    <input type="hidden" name="desc" value="{$current_url}" />
    <div align="center"><button type="submit" class="add_to_cart">Add</button></div>
    </div></div>
    </form>
    </li>
EOT;
}
$orders_item .= '</ul>';
echo $orders_item;
}
?>
	</div>

	<div class="shopping-cart">
		<h2>Your Shopping Cart</h2>
		<?php
if(isset($_SESSION["thai_cart"]) && count($_SESSION["thai_cart"])>0)
{
    echo '<div class="cart-view-table-front" id="view-cart">';
    echo '<h3>Your Shopping Cart</h3>';
    echo '<form method="post" action="order_update.php">';
    echo '<table width="100%"  cellpadding="6" cellspacing="0">';
    echo '<tbody>';

    $total =0;
    $b = 0;
    foreach ($_SESSION["thai_cart"] as $cart_itm)
    {
        $product_name = $cart_itm["itemName"];
        $product_qty = $cart_itm["itemDesc"];
        $product_price = $cart_itm["order_spice"];
        $product_code = $cart_itm["order_qty"];
        $product_color = $cart_itm["price"];
        echo '<tr>';
        echo '<td>Qty <input type="text" size="2" maxlength="2" name="order_qty['.$itemName.']" value="'.$order_qty.'" /></td>';
        echo '<td>'.$product_name.'</td>';
        echo '<td><input type="checkbox" name="remove_code[]" value="'.$itemName.'" /> Remove</td>';
        echo '</tr>';
        $subtotal = ($price * $order_qty);
        $total = ($total + $subtotal);
    }
    echo '<td colspan="4">';
    echo '<button type="submit">Update</button><a href="view_cart.php" class="button">Checkout</a>';
    echo '</td>';
    echo '</tbody>';
    echo '</table>';
    
    $current_url = urlencode($url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
    echo '<input type="hidden" name="return_url" value="'.$current_url.'" />';
    echo '</form>';
    echo '</div>';

}
?>
	</div>
	</br>
	</br>
	</br>
	</br>
	</br>
	</br>
	<footer class=" w3-padding-64 w3-light-green w3-center">
		<a href="#" class="w3-hover-text-indigo"><i
			class="fa fa-facebook-official"></i></a> <a href="#"
			class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
		<p>Powered by Amazon's Web Service Server</p>
	</footer>
</body>
</html>


