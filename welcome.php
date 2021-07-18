<title>Order Check</title>
<?php include ('rheader.php');?>
<?php include ('cnewserv.php');

$name ='';
$mobile ='';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css" href="mycss.css">
</head>
<body>

<div style="width:100%; background-color:white;">
	<br>
	<br>
	<h4>Check Your Order Status !!</h4>
	<br>
	<br>
	<form action="welcome.php" method="post">
		<label >Name:</label>
		<br>
		<input type="text" name="name">
		<br>
		<label>Mobile:</label>
		<br>
		<input type="text" name="mobile">
		<br>
		<br>
		<button type="submit" name="order">See your orders</button>
		<br>
	</form>
	<br>
	<br>
</div>

	<?php 
		if (isset($_POST['order'])) {
			$name =$_POST['name'];
			$mobile =$_POST['mobile'];

			$sql = "SELECT * FROM `info` WHERE `name`='$name' AND `mobile`='$mobile' ";
			$results = mysqli_query($db,$sql);

			if ($results==true) {
				
				while ($row = mysqli_fetch_assoc($results)) { ?>

		<div id="message">
				<div>
					<table style="text-align:left;">
						<tr>
							<td>
								<strong><p style="color: black; font-size: 15px;"><?php echo $row['name']; ?></p></strong>
							</td>
						</tr>
						<tr>
							<td>
								<strong><p style="color: black; font-size: 15px;">Your booking confirmation no: <?php echo $row['id']; ?></p></strong>
							</td>
						</tr>
						<tr>
							<td>
								<strong><p style="color: black;"> Date : <?php echo date("d.m.y"); ?> </p></strong> <br>
							</td>
						</tr>
						<tr>
							<td>
								Welcome <?php echo $row['name']; ?> you have just ordered the palce , serial no: <?php echo $row['psn']; ?> .
								We will send you the confirmation message and call on your mobile no: <?php echo $row['mobile']; ?> Within 2 days we will send original copy of deeds to your home: <?php echo $row['address']; ?>.
								Thank you for being with us!!
								<br>
								<br>
								<br>
								<br>

							</td>
						</tr>
					</table>
				</div>
	</div>

	<?php 
	}
	}

	else
	{
		echo '<p> ou dont have any products with this name and phone</p>';
	}


	
	}
	?>	

</body>
<?php include ('myfot.php'); ?>
</html>