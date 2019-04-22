<!DOCTYPE html>
<html>
<head>
<title>admin</title>
</head>
<body>

<?php include('connection.php'); 
include('header.php');
?>

<?php
if(isset($_POST["sbmt"]))
{
	
	$cn=makeconnection();
	
	$target_dir = "toppingimgs/";
	$target_file = $target_dir.basename($_FILES["t3"]["name"]);
	$uploadok = 1;
	$imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);
	//check if image file is a actual image or fake image
	
	if(move_uploaded_file($_FILES["t3"]["tmp_name"], $target_file)){
			
	}else{
			echo "sorry there was an error uploading your file.";
		}
		}
?>

<?php
if(isset($_POST["sbmt"]))
{
	$cn=makeconnection();

if (empty($_FILES['t3']['name']))
 {
	
		 $s="update topping set topping_name='" . $_POST["topping_name"] ."',img_path='" . $_POST["h1"] . "',price='" . $_POST["price"] . "' where topping_id='" . $_POST["s1"] . "'";
}	

else
{
	
		 $s="update topping set topping_name='" . $_POST["topping_name"] ."',img_path='" .  basename($_FILES["t3"]["name"]) . "',price='" . $_POST["price"] . "' where topping_id='" . $_POST["s1"] . "'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Update');</script>";
    }
   } 
?>



<form method="post" enctype="multipart/form-data">
<table border="10" width="450px" height="500px" align="center" >
<tr><td colspan="2" >Update Topping</td></tr>
<tr><td >Select topping</td><td><select name="s1" required/><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from topping";
$result=mysqli_query($cn,$s);


while($data=mysqli_fetch_array($result))
{
	if(isset($_POST["show"])&& $data[0]==$_POST["s1"])
	{
		echo"<option value=$data[0] selected>$data[1]</option>";
	}
	else
	{
		echo "<option value=$data[0]>$data[1]</option>";
	}
}
mysqli_close($cn);

?>

</select>
<input type="submit" value="Show" name="show" formnovalidate/>
<?php
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select *from topping where topping_id='" .$_POST["s1"] ."'";
$result=mysqli_query($cn,$s);

$data=mysqli_fetch_array($result);
$topping_id=$data[0];
$topping_name=$data[1];
$price=$data[2];
$Pic=$data['img_path'];

mysqli_close($cn);

}

?>

</td></tr>

<tr><td >Topping Name</td><td><input type="text" value="<?php if(isset($_POST["show"])){ echo $topping_name ;} ?> " name="topping_name" required pattern="[a-zA-z1 _]{1,50}" title="Please Enter Only Characters and numbers between 1 to 50 for topping Name" /></td></tr>


<tr><td>Old Pic</td><td><img src="toppingimgs/<?php echo @$Pic; ?>" width="150px" height="100px" / >
<input type="hidden" name="h1" value="<?php if(isset($_POST["show"])) {echo $Pic;} ?>" />
</td></tr>

<tr><td>Upload Pic</td><td><input type="file" name="t3" /></td></tr>
<tr><td >Price</td><td><textarea name="price" /><?php if(isset($_POST["show"])){ echo $price ;} ?></textarea></td></tr>
<tr><td>&nbsp;</td><td ><input type="submit" value="Update" name="sbmt" /></td></tr>

</table>
</form>
</body>
</html>           