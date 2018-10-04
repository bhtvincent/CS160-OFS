<?php 

	//make connection to database
	$connect = mysqli_connect('localhost','root','password','grocery_delivery');

	$itemID = "";
	$quantity = "";
	$totWeight = "";
	$query = "";

	$sql = "SELECT * FROM item";

	$records = mysqli_Query($connect, $sql);
?>

<html>
	<head>
		<title>Pantry</title>
	</head>

	<body>
		<table width="600px" border="1" cellpadding="1" cellspacing="1">
			<tr>
				<th>Item Name</th>
				<th>Item Weight</th>
				<th>Item Price</th>
				<th>Quantity</th>
			<tr>


			<?php
				while($item=mysqli_fetch_assoc($records))
				{
					echo "<tr>";
					echo "<td align=center>".$item['item_name']."</td>";
					echo "<td align=center>".$item['item_weight']." ".$item['item_weight_unit']."</td>";
					echo "<td align=center>".$item['item_price']."</td>";
					echo "<td align=center>
							<input type='number' name='quantity' value='0' min='0' style='width:40px'
						</td>";
					echo "<form id='form1'>
							<button onclick = 'updateCart()'>Add to Cart</button>
						</form>";
					echo "</tr>";
				}
			?>
		</table>
		<form method="post" action="pantry.php">
				<p><a href="go_to_cart.php">Go to Cart</a></p>
		</form>

		<script>
			
				function updateCart()
				{
					var quantity, x;
					x = document.getElementById('form1');				
					document.getElementById('quan');
				}
		</script>
		<p id="quan"></p>";
	</body>
</html>
