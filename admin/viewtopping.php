<?php
	require("header.php");
	require("connection.php");

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


</style>



</head>
<body>
<div style="padding: 5% 10% 10% 10%;">
    <center>
    <form action="addtopping.php">
        <button style="color: white; width: 250px;">Add Topping</button>
    </form>
    </center>
<form action="action_topping.php" method="get">
<?php
$cn=makeconnection();
$s="select *from topping";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);

while($data=mysqli_fetch_array($result))
{
		$image= "toppingimgs/".$data['img_path'];
        $name=$data['topping_name'];
        $price=$data['price'];
		echo "<div class='responsive'>";
		echo "<div class='gallery'>";
		echo "<img src=$image width='250px' height='200px' alt='Image not available'/>";
		echo "<div class='desc'>";
		echo strtoupper($data['topping_name']);
        echo "<br />Price: ₹$price.0";
		echo "<br /><input type='image' src='../images/edit.png' name='task' alt='not there' width='20px' height='20px' value='edit' id=$name></input>";
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
        echo "<input type='image' src='../images/delete.png' name='task' alt='not there' width='20px' height='20px' value='delete'></input>";
		echo "</div>";
		echo "</div>";
		echo "</div>";
}

?>


</form>
	</div>

</body>
</html>