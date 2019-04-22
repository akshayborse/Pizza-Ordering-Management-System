<!DOCTYPE html>
<html>
<head>
  <title>The Pizza Box</title>

  <link rel="stylesheet" href="css/pizza_style.css" type="text/css" media="screen" />

</head>
<body style="background-image: url(images/body-bg.jpg);">
  <center>



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



<div> 
  <ul class="above_menu" style="background-image: url(images/header-bg.png);">
    <li style="float: left;"><img src="logo.png"></li>

    <li style="float: right;"><h1><a class="active"  href="#login" onclick="document.getElementById('id01').style.display='block'">Login</a></h1></li>

  </ul>
</div>

<!-- Start WOWSlider.com HEAD section -->
  <link rel="stylesheet" type="text/css" href="engine14//style.css" media="screen" />
  <script type="text/javascript" src="engine14//jquery.js"></script>
<!-- End WOWSlider.com HEAD section -->


<!-- Start WOWSlider.com BODY section id=wowslider-container14-->
  <div id="wowslider-container14">
  <div class="ws_images"><ul>
<li><img src="data14/images/pizza_slider_4.jpg" alt="pizza_slider (4)" title="pizza_slider (2)" id="wows14_0"/></li>
<li><img src="data14/images/pizza_slider_3.jpg" alt="pizza_slider (3)" title="pizza_slider (3)" id="wows14_1"/></li>
<li><img src="data14/images/pizza_slider_2.jpg" alt="pizza_slider (2)" title="pizza_slider (4)" id="wows14_2"/></li>
<li><img src="data14/images/pizza_slider_1.jpg" alt="pizza_slider (1)" title="pizza_slider (1)" id="wows14_3"/></li>
</ul></div>
<div class="ws_bullets"><div>
<a href="#" title="pizza_slider (4)">1</a>
<a href="#" title="pizza_slider (3)">2</a>
<a href="#" title="pizza_slider (2)">3</a>
<a href="#" title="pizza_slider (1)">4</a>
</div></div>
  <a href="#" class="ws_frame"></a>
  <div class="ws_shadow"></div>
  </div>
  <script type="text/javascript" src="engine14//wowslider.js"></script>
  <script type="text/javascript" src="engine14//script.js"></script>
<!-- End WOWSlider.com BODY section -->

<?php require("footer.php"); ?>

</center>
</body>
</html>