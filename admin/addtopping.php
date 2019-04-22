<?php
	require("header.php");
	require('connection.php');
?>

<!DOCTYPE html>
<html>
<head>
<title>admin</title>




</head>
<body>


<form method="post" enctype="multipart/form-data">
<table border="10" width="400px" height="300px" align="center">
<tr><td colspan="2" >Add Topping</td></tr>
<tr><td >Topping Name</td><td><input type="text" name="topping_name" required pattern="[a-zA-z _]{2,50}" title"Please Enter Only Characters between 2 to 50 for Subcategory name"/></td></tr>
<tr><td >Upload Pic</td><td><input type="file" name="t3" /></td></tr>
<tr><td >Price Topping</td><td><input type="text" name="price" /></td></tr>
<tr><td>&nbsp;</td><td ><input type="submit" value="SAVE" name="sbmt" /></td></tr>

</table>
</form>



<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	
	$target_dir = "toppingimgs/";
	$target_file = $target_dir.basename($_FILES["t3"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	$check=getimagesize($_FILES["t3"]["tmp_name"]);
	if($check!==false) {
		echo "file is an image - ". $check["mime"]. ".";
		$uploadok = 1;
	}else{
		echo "file is not an image.";
		$uploadok=0;
	}
	
	
	//check if file already exists
	if(file_exists($target_file)){
		echo "sorry,file already exists.";
		$uploadok=0;
	}
	
	//check file size
	if($_FILES["t3"]["size"]>500000){
		echo "sorry, your file is too large.";
		$uploadok=0;
	}
	
	
	//aloow certain file formats
	if($imagefiletype != "jpg" && $imagefiletype !="png" && $imagefiletype !="jpeg" && $imagefileype !="gif"){
		echo "sorry, only jpg, jpeg, Png & gif files are allowed.";
		$uploadok=0;
	}else{
		if(move_uploaded_file($_FILES["t3"]["tmp_name"], $target_file)){
	

		$topping_name=$_POST["topping_name"];
		$price=$_POST["price"];
	
	
	$s="insert into topping(topping_name,price,img_path) values('$topping_name','$price','" . basename($_FILES["t3"]["name"]) . "')";

	mysqli_query($cn,$s);
	
	echo "<script>alert('Record Save');</script>";
	
	
		} else{
			echo "sorry there was an error uploading your file.";
		}}
}
?>

</body>
</html>


