<title>LOG IN</title>
<?php include ('rheader.php'); ?>
<?php include('lserv.php') ?>

<?php
$txt='';

$txt =@$_GET['ms'];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Order Confirmation | Real Estate</title>
  <link rel="stylesheet" type="text/css" href="lsty.css">
  <link rel="stylesheet" type="text/css" href="mycss.css">
</head>

<body>
  <?php
     if ($txt) {
       ?>
  <div class="header">
  	<h2>
      Confirm Your Order
    </h2>
    <h6 style="text-align:left; color: black;">To confirm your order we need to confirm your identity once again...</h6>
  </div>
	 
  <form method="post" action="llogin.php">
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  </form>
<?php }
  else { 
?>

<div class="header">
    <h2>
     Log IN
    </h2>
  </div>
   
  <form method="post" action="llogin.php">
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" >
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="login_user">Login</button>
    </div>
    <div class="input-group">
      <p>Not a member yet ? <a href="lregister.php">Sign Up Here</a> </p>
    </div>
  </form>
<?php } ?>
</body>
<?php include ('myfot.php'); ?>