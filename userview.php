<?php
	require("header.php");
	require("admin/connection.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

<style>
div.gallery {
    border: 1px solid #ccc;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}

input[type="radio"] {
    display:none;   
}
input[type="radio"]:checked + label {
    color:red;
}

nav a:active{
    color:green;
}

ul{
    list-style: none;
}

.desc ul li a:hover{
    color: red;
}
</style>



</head>
<body>

<div style="padding: 5% 10% 10% 10%;">
<?php
$cn=makeconnection();
$s="select *from pizza";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);

while($data=mysqli_fetch_array($result))
{
    echo "<form method='get' action='topping.php'>";
		$image= "admin/pizzaimgs/".$data['img_path'];
        $name=$data['pizza_name'];
        $reg_price=$data['reg_price'];
        $med_price=$data['med_price'];
        $lrg_price=$data['lrg_price'];
		echo "<div class='responsive'>";
    		echo "<div class='gallery'>";
	           	   echo "<img src=$image width='250px' height='200px' alt='Image not available'/>";
    		  echo "<div class='desc'>";
    	           	echo strtoupper($data['pizza_name']);
                    
                    echo "<br />R:₹$reg_price.0 &nbsp";
                    echo "M:₹$med_price.0 &nbsp";
                    echo "L:₹$lrg_price.0";
            		echo "<button type='submit' name='selected_pizza' value=$name>Order Now</button>";

                    echo "</form>";
		      echo "</div>";
            echo "</div>";
		echo "</div>";
}

/*
     header("Content-type: image/jpeg");
     echo mysql_result($result, 0);
*/
?>

	</div>


    </br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<?php
    require("footer.php");
?>
</body>
</html>

