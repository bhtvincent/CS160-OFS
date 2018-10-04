<?php 
	//make connection to database
	$connect = mysqli_connect('localhost','root','password','grocery_delivery');

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
					echo "<td align=center><input type='number' name='quantity' value='0' style='width:40px'</td>";
					echo "</tr>";
				}
			?>
		</table>
		<form method="post" action="pantry.php">
				<p><a href="add_to_cart.php">Add to Cart</a></p>
		</form>
	</body>
</html>
