
<!DOCTYPE html>
<html lang="en">
<head>
<title>The Pizza Box</title>

<link rel="stylesheet" href="css/pizza_style.css" type="text/css" media="screen" />

<!--Registration-->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom CSS -->
<link href="css/reg_style.css" rel='stylesheet' type='text/css' />
<link href="//fonts.googleapis.com/css?family=Signika:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">

<!--font CSS-->
<script src="js/jquery2.0.3.min.js"></script>
<!--Registration-->




<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css files -->
<link rel="stylesheet" href="css/font-awesome.css"> <!-- Font-Awesome-Icons-CSS -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
<!-- //css files -->
<!-- web-fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
<!-- //web-fonts -->


<style type="text/css">
  /* Add Zoom Animation */
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
    from {-webkit-transform: scale(0)} 
    to {-webkit-transform: scale(1)}
}
    
@keyframes animatezoom {
    from {transform: scale(0)} 
    to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}


.modal {
    display: none; /* Hidden by default */
    position: absolute; /* Stay in place */
    z-index: 100; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgba(0,0,0,0.5); /* Black w/ opacity */
    padding-top: 60px;
}
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

/* The Close Button (x) */
.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: blue;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

.entery
{
    display: block;
    float: right;
    color: red;
    background-color: green;
    width: 150px;
    height: 50px;
}
</style>
<link href="css1/owl.carousel.css" rel='stylesheet' type='text/css'/>
<link href="css1/bootstrap.css" rel='stylesheet' type='text/css'/>
<link href="css1/style.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false;
 </script>

<script src="js1/jquery.min.js"></script>

<link href="css1/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js1/wow.min.js"></script>
<script>
 new WOW().init();
</script>


</head>
<body>

<!--
	<img src="logo.png" align="left">
	<input class="entery" type="button" name="button" value="login" onclick="document.getElementById('id01').style.display='block'" >
    <input class="entery" type="button" name="button" value="Registration" onclick="document.getElementById('id02').style.display='block'" >
-->
<div> 
  <ul class="above_menu" style="background-image: url(images/header-bg.png);">
    <li style="float: left;"><img src="logo.png"></li>

    <li style="float: right;"><h1><a class="active" onclick="document.getElementById('id01').style.display='block'" >Login</a></h1></li>
    <li style="float: right;"><h1><a class="active" onclick="document.getElementById('id02').style.display='block'" >Register</a></h1></li>

  </ul>
</div>

	<div id="id01" class="modal">
		<div class="main-content-agile animate">
			   <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
			<div class="sub-main-w3">	
				<h2>Sign In</h2>
				<form action="process_login.php" method="post">
					<div class="icon1">
						<input placeholder="Username" name="usernm" type="text" required="">
					</div>
					
					<div class="icon2">
						<input  placeholder="Password" name="pwd" type="password" required="">
					</div> 
						<div class="clear"></div>
					<input type="submit" value="Sign in">
				</form>
			</div>
		</div>
	</div>






    <div id="id02" class="modal">
        <div class="main-grid">
            <div class="agile-grids animate">   
                <!-- validation -->
                <div class="grids">                 
                    <div class="forms-grids">
                        <div class="forms3">
                        <div class="w3agile-validation w3ls-validation">
                            <div class="panel panel-widget agile-validation register-form">
                                               <div class="imgcontainer">
                    <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
                                <div class="validation-grids widget-shadow" data-example-id="basic-forms"> 
                                    <div class="input-info">
                                        <h3>Register Form </h3>
                                    </div>
                                    <div class="form-body form-body-info">
                                        <form data-toggle="validator" action="process_register.php" method="post">
                                            <div class="form-group valid-form">
                                                <input type="text" class="form-control" id="inputName" name="name" placeholder="Name" required pattern="[a-zA-z1 _]{3,50}" data-error="Enter ony alphabets" required="">
                                                <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group valid-form">
                                                <input type="text" class="form-control" id="inputName" name="Username" placeholder="Username" required="">
                                            </div>
                                            <div class="form-group has-feedback">
                                                <input type="email" class="form-control" name="Email" placeholder="Email" data-error="That email address is invalid" required="">
                                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                                <span class="help-block with-errors">Please enter a valid email address</span>
                                            </div>
                                            <div class="form-group">
                                              <input type="password" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" name="Password" placeholder="Password" required="">
                                              <span class="help-block">Minimum of 6 characters</span>
                                            </div>
                                            <div class="form-group">
                                              <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Whoops, these don't match" name="Confirm password" placeholder="Confirm password" required="">
                                              <div class="help-block with-errors"></div>
                                            </div>
                                            <div class="form-group">
                                                <div class="radio">
                                                    <label>
                                                      <input type="radio" name="gender" value="Female" required="">
                                                      Female
                                                    </label>
                                                </div>
                                                <div class="radio">
                                                    <label>
                                                    <input type="radio" name="gender" value="Male"  required="">
                                                    Male
                                                    </label>
                                                </div>
                                                <div class="form-group valid-form">
                                                <input type="tel" class="form-control" id="mob_no" name="contact" placeholder="Mobile No." required="" maxlength="10" pattern="^\d{10}$" data-error="Enter valid Mobile No." oninput="valid_mob()">
                                                <div class="help-block with-errors" id="mob_error"></div>
                                            </div>
                                            <div class="form-group valid-form">
                                                <textarea class="form-control" id="inputName" name="address" placeholder="Enter Address" required=""></textarea>
                                            </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" id="terms" data-error="Kindly accept the terms & conditions to move further" required="">
                                                        I have read and accept terms of use.
                                                    </label>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary disabled">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clear"> </div>
                        </div>
                    </div>
                </div>
                <!-- //validation -->
            </div>
        </div>
    </div>

        <!-- input-forms -->
        
        
        <script type="text/javascript" src="js/valida.2.1.6.min.js"></script>
        <script type="text/javascript" >

            $(document).ready(function() {

                // show Valida's version.
                $('#version').valida( 'version' );

                // Exemple 1
                $('.valida').valida();

        // setup the partial validation
                $('#partial-1').on('click', function( ev ) {
                    ev.preventDefault();
                    $('#res-1').click(); // clear form error msgs
                    $('form').valida('partial', '#field-1'); // validate only field-1
                    $('form').valida('partial', '#field-1-3'); // validate only field-1-3
                });

            });

        </script>
        <!-- //input-forms -->
        <!--validator js-->
        <script src="js/validator.min.js"></script>
        <!--//validator js-->

<?php include('slider1.php'); ?>

</body>
</html>