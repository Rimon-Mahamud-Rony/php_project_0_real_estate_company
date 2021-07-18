<title>Product Details</title>
<?php include 'rheader.php'; ?>

<?php

$db = mysqli_connect('localhost', 'root', '', 'all');

	if($db!=true){

		printf("can not connect databse %s\n",$mysqli->connect_error);
		exit();
	}

if(isset($_GET['posts'])){

	$id=$_GET['posts'];
	$query2= "SELECT * FROM propety where id='$id'";
	//$readd=$mysqli->query($query2);

  $results=mysqli_query($db,$query2);

}

?>

<div class="container">
  
	<table class="table table-striped table-hover ">
    <tbody>
      <?php while ($row= mysqli_fetch_assoc($results)) { ?>
    <tr style="float:center;">
      <strong>Images: </strong><br>
      <img src="uploads/<?php echo $row['images'];?>">
    </tr>
    <tr>
      <td><strong>Address: </strong><?php echo $row['id'];  ?></td>
    </tr>
    <tr>
      <td><strong>Access:  </strong><?php echo $row['address'];  ?></td>
    </tr>
    <tr>
      <td><strong>Access: </strong><?php echo $row['access'];  ?></td>
    </tr>
    <tr>
      <td><strong>Floor Space: </strong><?php echo $row['floor'];  ?></td>
    </tr>
    <tr>
      <td><strong>Utility: </strong><?php echo $row['utility'];  ?></td>
    </tr>
    <tr>
      <td><strong>Description: </strong><?php echo $row['descrip'];  ?></td>
    </tr>
</div>
<?php   } ?>


  </tbody>
</table> 

<?php include ('myfot.php'); ?>