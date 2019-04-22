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
/*
input[type="checkbox"] {*/
    /*display:none; */  
/*}

div.gallery input[type="checkbox"]:checked +span{
    border: 1px solid red;
}*/s

div label input {
   margin-right:100px;
}

#rd-button {
    margin:4px;
    background-color:green;
    border-radius:4px;
    border:1px solid #D0D0D0;
    overflow:auto;
    float:left;
}

#rd-button label {
    float:left;
}

#rd-button label span {
    text-align:center;
    padding:3px 0px;
    display:block;
}

#rd-button label input {
    position:absolute;
    top:-20px;
}

#rd-button input:checked + span {
    background-color:#911;
    color:#fff;
}
</style>



</head>
<body>
    <div style="padding: 5% 0% 0% 40%;">
    <?php
        $pizza_name=$_GET['selected_pizza'];

        $cn=makeconnection();
        $s="select *from pizza where pizza_name='$pizza_name'";
        $result=mysqli_query($cn,$s);
        $data=mysqli_fetch_array($result);
        $image= "admin/pizzaimgs/".$data['img_path'];
        $reg_price=$data['reg_price'];
        $med_price=$data['med_price'];
        $lrg_price=$data['lrg_price'];

            echo "<form method='GET' action='bill.php'>";
            echo "<h2>";
                    echo strtoupper($data['pizza_name']);
                    echo "</h2>";
                    echo "<br /><img src=$image width='250px' height='200px' alt='Image not available'/><br />";
                    
                    echo "<div id='rd-button'><label>";
                    echo "<input id='reg' type='radio' name='pizza_price' value='reg_price' checked><span>R:₹$reg_price.0</span>";
                    echo "</label></div>";
                    echo "<div id='rd-button'><label>";
                    echo "<input id='med' type='radio' name='pizza_price' value='med_price'><span>M:₹$med_price.0</span>";
                    echo "</label></div>";
                    echo "<div id='rd-button'><label>";
                    echo "<input id='lrg' type='radio' name='pizza_price' value='lrg_price'><span>L:₹$lrg_price.0</span>";
                    echo "</label></div>";


    ?>
</div>
<div style="padding: 5% 10% 10% 10%;">
<h3>Please Tick Checkbox to Select toppings</h3>
<?php
$cn=makeconnection();
$s="select *from topping";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);

while($data=mysqli_fetch_array($result))
{
		$image= "admin/toppingimgs/".$data['img_path'];
        $name=$data['topping_name'];
        $price=$data['price'];
        
        
		echo "<div class='responsive'>";
        
		echo "<div class='gallery'><label>";
        echo "<input type='checkbox' name=topping[] value=$name><span>";
		echo "<img src='$image' width='250px' height='200px' alt='Image not available'/>";
        
		echo "<div class='desc'>";
		echo $data['topping_name'];
        echo "<br /><center>Price:₹$price.0</center>";
		echo "</div>";
		echo "</span></label></div>";
		echo "</div>";
}

/*
     header("Content-type: image/jpeg");
     echo mysql_result($result, 0);

<button  type='submit' name='pizza_name' value=<?php echo"$pizza_name"; ?> >Order Now</button>        

*/
?>

<button  type='submit' name='pizza_name' value=<?php echo"$pizza_name"; ?> >Order Now</button>        

</form>
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