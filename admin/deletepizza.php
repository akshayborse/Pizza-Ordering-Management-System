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
	$s="delete from pizza  where pizza_id='" . $_POST["t1"] . "'";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Delete');</script>";
}
?>


<form method="post">
<table border="10" width="400px" height="200px" align="center">
<tr><td >Delete Pizza</td></tr>
<tr><td >Select Pizza</td><td><select name="t1" required/><option value="">Select</option>

<?php
$cn=makeconnection();
$s="select *from pizza";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);

while($data=mysqli_fetch_array($result))
{
	
		echo "<option value=$data[0]>$data[1]</option>";
	
}
mysqli_close($cn);

?>

</select>

<?p0p
if(isset($_POST["show"]))
{
$cn=makeconnection();
$s="select * from pizza where pizza_id='" .$_POST["t1"] ."'";
$result=mysqli_query($cn,$s);
$r=mysqli_num_rows($result);

$data=mysqli_fetch_array($result);
$Cat_id=$data[0];
$Cat_name=$data[1];

mysqli_close($cn);

}

?>
</td></tr>

<tr><td>&nbsp;</td><td ><input type="submit" value="Delete" name="sbmt" /></td></tr>
</table>
</form>


</body>
</html>

