<?php session_start();
  $cust_name=$_SESSION['cust_name'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Pizza Box</title>

	<link rel="stylesheet" href="css/pizza_style.css" type="text/css" media="screen" />

</head>
<body style="background-image: url(images/body-bg.jpg);">
	<center>


<!--
<div id="id01" class="modal" style="color: black;">

  
  <form class="modal-content animate" action="process_login.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
<?php session_start();?>
  <font size="20px">Have a Pizza Box Account?</font><br>
  <small>Sign in to quickly access address saved to your account</small>
<br>
      <label ><b>USER NAME</b></label>
      
      <input type="text" placeholder="Enter Username" name="usernm" required style="width: 50%;">

      <br>

      <label><b>Password</b></label>
      
      <input type="password" placeholder="Enter Password" name="pwd" required style="width: 50%">
       <br> 
      <button type="submit" class="cancelbtn" style="background-color: green;">Login</button>

   </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw"><a href="register.php">Register now</a></span>
    </div>
  </form>
</div>
-->


<div> 
  <ul class="above_menu" style="background-image: url(images/header-bg.png);">
    <li style="float: left;"><img src="logo.png"></li>

    <li style="float: right;"><h1>Hey......<?php echo $cust_name?></h1></li>

    <li style="float: right;"><h1><a class="active"  href="logout.php">Logout</a></h1></li>

  </ul>
</div>


<div>
  <ul class="menu">
    <li class="menu_link"><h1><a class="active" href="home.php">Home</a></h1></li>
    <li class="menu_link"><h1><a href= "userview.php">Menu</a></h1></li>
    <li class="order_now" style="float: right; background-color: #ffd400; width: 30%"><h1><a href="userview.php"><span>Order Now</span></a></h1></li>    
  </ul>
</div>


</center>
</body>
</html>