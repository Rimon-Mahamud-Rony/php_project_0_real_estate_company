<?php include ('rheader.php'); ?>
<?php include ('cnewserv.php');

  //fetch the records to be updated
    if (isset($_GET['edit'])) {
    	$id = $_GET['edit'];
        $edit_state =true;
    	$rec = mysqli_query($db , "SELECT * FROM info WHERE id = $id");
    	$record = mysqli_fetch_array($rec);
    	$name = $record['name'];
    	$address = $record ['address'];
    	$mobile = $record ['mobile'];
    	$psn = $record ['psn'];
    	$id = $record['id'];
    }
 ?>




	<link rel="stylesheet" type="text/css" href="cstl.css">


	<div>
	
	<form action="cndex.php" method="post" style="background-color:gray;">
		<div style="margin-left:100px;">
		<br>
		<h4 style="color:white;">Check Your Order Status !!</h4><hr>
		<label >Name:</label>
		<input type="text" name="name">
		<label>Mobile:</label>
		<input type="text" name="mobile">
		<br><br>
		<button type="submit" name="order">Search Orders</button>
		<br>
		<br>
		</div>
	</form>
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


	<table>
		<thead style="background-color:gray; color:white;font-size:15px;">
			<tr style="text-align:left;">
				<th style="width: 5%;border-right: solid .2px white;">Confirmation no.</th>
				<th style="width: 15%;border-right: solid .2px white;">Name</th>
				<th style="width: 15%;border-right: solid .2px white;">Adress</th>
				<th style="width: 15%;border-right: solid .2px white;">Mobile</th>
				<th style="width: 15%;border-right: solid .2px white;">Your desire place serial no.</th>
				<th style="width: 10%;border-right: solid .2px white;">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row = mysqli_fetch_array($results)) { ?>
			<tr style="text-align: left;">
				<td><?php echo $row['id'] ;?></td>
				<td><?php echo $row['name'] ;?></td>
				<td><?php echo $row['address'];?></td>
				<td><?php echo $row['mobile'];?></td>
				<td><?php echo $row['psn'];?></td>
				<td>
					<a class="edit_btn" href="cndex.php?edit=<?php echo $row['id']; ?>">Edit</a>
					<a class="del_btn" href="cnewserv.php?del=<?php echo $row['id']; ?>">Delete( Sold )</a>
				</td>
			</tr>


			<?php } ?>

			
		</tbody>



	</table>

<!--
	<form method="post" action="cnewserv.php" style="background-color:gray;">

		<div style="margin-left:60px;">
	<input type="hidden" name="id" value="<?php echo $id; ?>"> 
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name"value="<?php echo $name; ?>">
		</div>
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="address"value="<?php echo $address; ?>">
		</div>
		<div class="input-group">
			<label>Mobile/Telephone</label>
			<input type="text" name="mobile" value="<?php echo $mobile; ?>">
		</div>
		<div class="input-group">
			<label>Your desire place/hotel serial no.</label>
			<input type="text" name="psn" placeholder="please enter your desire place/hotel serial no" value="<?php echo $psn; ?>">
		</div>
		<div class="input-group">
			<button type="submit" name="update" class="btn">Update</button> 
			
		</div>
	</div>
	</form>
-->




</body>
<br><br><br><br><br><br><br>


<?php include ('myfot.php'); ?>