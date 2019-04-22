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
	
	$target_dir = "pizzaimgs/";
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
	
		 $s="update pizza set pizza_name='" . $_POST["pizza_name"] ."',img_path='" . $_POST["h1"] . "',med_price='" . $_POST["med_price"] . "',reg_price='" . $_POST["reg_price"] . "',lrg_price='" . $_POST["lrg_price"] . "' where pizza_id='" . $_POST["s1"] . "'";
}	
else
{
	
		 $s="update pizza set pizza_name='" . $_POST["pizza_name"] ."',med_price='" . $_POST["med_price"] . "',reg_price='" . $_POST["reg_price"] . "',lrg_price='" . $_POST["lrg_price"] . "',img_path='" .  basename($_FILES["t3"]["name"]) . "' where pizza_id='" . $_POST["s1"] . "'";


	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Update');</script>";
    }
   } 
?>



<form method="post" enctype="multipart/form-data">
<table border="10" width="450px" height="500px" align="center" >
<tr><td colspan="2" >Update pizza</td></tr>
<tr><td >Select Pizza</td><td><select name="s1" required/><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select * from pizza";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);


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
$s="select * from pizza where pizza_id='" .$_POST["s1"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);

$data=mysqli_fetch_array($result);
$Subcatid=$data[0];
$pizza_name=$data[1];
$Catid=$data[2];
$Pic=$data['img_path'];
$Detail=$data[4];

mysqli_close($cn);

}

?>

</td></tr>

<tr><td >Pizza Name</td><td><input type="text" value="<?php if(isset($_POST["show"])){ echo $pizza_name ;} ?> " name="pizza_name" required pattern="[a-zA-z1 _]{1,50}" title="Please Enter Only Characters and numbers between 1 to 50 for pizza Name" /></td></tr>


<tr><td>Old Pic</td><td><img src="pizzaimgs/<?php echo $Pic; ?>" width="150px" height="100px" / >
<input type="hidden" name="h1" value="<?php if(isset($_POST["show"])) {echo $Pic;} ?>" />
</td></tr>

<tr><td>Upload Pic</td><td><input type="file" name="t3" /></td></tr>
<tr><td >Small Price</td><td><textarea name="med_price" /><?php if(isset($_POST["show"])){ echo $Detail ;} ?></textarea></td></tr>
<tr><td >Regular Price</td><td><textarea name="reg_price" /><?php if(isset($_POST["show"])){ echo $Detail ;} ?></textarea></td></tr>
<tr><td >Large Price</td><td><textarea name="lrg_price" /><?php if(isset($_POST["show"])){ echo $Detail ;} ?></textarea></td></tr>


<tr><td>&nbsp;</td><td ><input type="submit" value="Update" name="sbmt" /></td></tr>

</table>
</form>
</body>
</html>           