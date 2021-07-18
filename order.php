<?php include ('rheader.php'); ?>
<?php include ('cnewserv.php');


if (isset($_POST['save'])) {
	$name = $_POST['name'];
	$address = $_POST['address'];
    $mobile = $_POST['mobile'];
    $psn = $_POST['psn'];

	$query = "INSERT INTO `info`( `name`, `address`,`mobile`,`psn` ) VALUES ('$name','$address','$mobile','$psn')";
	mysqli_query($db, $query);

	if ($query==true) {
		header("location:llogin.php?ms=".$name);
	}
	else
		echo "Please order in correct way";

}
?>

<link rel="stylesheet" type="text/css" href="cstl.css">
<body>
<div>
	<br>
	<form method="post" action="order.php" style="background-color:gray;">
		<br>

		<h5 style="color:yellow;margin-left:50px;">To order the house or flat please provide us your information.</h5><hr>
		<div style="margin-left:60px;">
		<div class="input-group">
			<label><h5>Name</h5></label>
			<input type="text" name="name" >
		</div>
		<div class="input-group">
			<label><h5>Address</h5></label>
			<input type="text" name="address" >
		</div>
		<div class="input-group">
			<label><h5>Mobile/Telephone</h5></label>
			<input type="text" name="mobile" >
		</div>
		<div class="input-group">
			<label><h5>Your desire place/hotel serial no.</h5></label>
			<input type="text" name="psn">
		</div>
		<div class="input-group">
			 <button type="submit" name="save" style="font-size: 15px; height: 25px; width: 200px; background-color:green;">Save</button>
		</div>
		</div>
	</form>
</div>
</body>
<br><br><br><br><br>
<?php include ('myfot.php'); ?>