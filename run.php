
<!DOCTYPE html>
<html>
<head>
<title>admin</title>




</head>
<body>

<?php include('connection.php'); ?>


<form method="post" enctype="multipart/form-data">
<table border="10" width="400px" height="300px" align="center">
<tr><td colspan="2" >Add Topping</td></tr>

<tr><td >Pizza Name</td><td><input type="text" name="pizza_name" required pattern="[a-zA-z _]{3,20}" title"Please Enter Only Characters between 3 to 10 for Category Name" /></td></tr>
<tr><td >Pizza Type</td><td><select name="pizza_type"><option>Select</option><option name="veg">Veg</option><option name="non_veg">Non_veg</td></tr>
<tr><td >Upload Pic</td><td><input type="file" name="t3" /></td></tr>
<tr><td >Price Small</td><td><input type="text" name="sml_price" /></td></tr>
<tr><td >Price Regular</td><td><input type="text" name="reg_price"  /></td></tr>
<tr><td >Price Large</td><td><input type="text" name="lrg_price"  /></td></tr>
<tr><td >Select Topping</td><td><select name="topping_id"><option value="">Select</option>
<tr><td>&nbsp;</td><td ><input type="submit" value="SAVE" name="sbmt" /></td></tr>

</table>
</form>

<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();
	
	$target_dir = "subcatimages/";
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
			
	$pizza_name=$_POST["pizza_name"];
	$pizza_type=$_POST["pizza_type"];
	$sml_price=$_POST["sml_price"];
	$reg_price=$_POST["reg_price"];
	$lrg_price=$_POST["lrg_price"];
	
	$s="insert into pizza(pizza_name,pizza_type,sml_price,reg_price,lrg_price,img_path) values('$pizza_name', '$pizza_type', '$sml_price', '$reg_price' , '$lrg_price' , '" . basename($_FILES["t3"]["name"]) . "')";
	mysqli_query($cn,$s);
	
	echo "<script>alert('Record Save');</script>";
	
	
		} else{
			echo "sorry there was an error uploading your file.";
		}}
}
?>

</body>
</html>


