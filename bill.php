<?php
include('config.php');
require("admin/connection.php");

$pizza_name=$_GET['pizza_name'];
$a=$_GET['pizza_price'];
$cn=makeconnection();
$s="select *from pizza where pizza_name='$pizza_name'";
$result=mysqli_query($cn,$s);
$data=mysqli_fetch_array($result);
$price=$data[$a];
$t_price=0;
foreach($_GET['topping'] as $selected)
{
   $cn=makeconnection();
   $t="select *from topping where topping_name='$selected'";
        $result=mysqli_query($cn,$t);
       	$data=mysqli_fetch_array($result);
        $tp=$data['price'];
     	$t_price=$tp+$t_price;
}

$tot=$price+$t_price;

?>
<!DOCTYPE html>
<html >
<head>
	<link rel="stylesheet" href="css/pizza_style.css" type="text/css" media="screen" />
</head>
<body style="background-image: url(images/body-bg.jpg);">
	<div>
	<center>
  <ul class="above_menu" style="background-image: url(images/header-bg.png);">
    <li><img src="logo.png"></li>


  </ul>
  </center> 
</div>


							<h1 class="title" align="center">YOUR ORDER BILL</h1>
							<form action="order.php" method="GET">
							<table width="100%" border="0">
								<tr >
									<td><Td><td><b><h3>No</h3>
									<td><b><h3>Pizza</h3>
									<td><b><h3>Rate</h3>
									<td><b><h3>Topping</h3>
									<td><b><h3>Rate</h3>
									<td><b><h3>Qty</h3>
								<!--	<td><b><h3>Rate</h3> -->
									<td><b><h3>Price</h3>
								
								</tr>
								<tr><td colspan="10"><hr style="border:1px Solid #a1a1a1;"></tr>
							

								<?php
									$i=1;
											echo '
											<tr>
											<td><td><Td><h3> '.$i.'</h3> 
											<td><h3> '.$pizza_name.' </h3>
											<td><h3> '.$price.'</h3> <td>'		
											; 
										

										foreach($_GET['topping'] as $selected){
											echo "<h3>".$selected."</br>";
										}
										echo " <td>";	
		

										foreach($_GET['topping'] as $selected)
										{
										   $cn=makeconnection();
										   $t="select *from topping where topping_name='$selected'";
										        $result=mysqli_query($cn,$t);
										       	$data=mysqli_fetch_array($result);
										        $tp=$data['price'];
										     	echo "<h3>$tp";
										     	echo "</br>";
										}



							echo '<td> <input type="text" id="quantity" name="quantity" oninput="calculate()" placeholder="Enter Quantity"">';
/*
							$e=$_POST['quantity'];
							$total=$tot*$e;*/
							echo '<td><h3> '.$tot.'</h3> <td>'; 
									
								?>

								<script type="text/javascript">
									function calculate() {
										    var rate = document.getElementById("quantity").value;
										    var quantity=<?php echo $tot ?>;
										    var amount=rate*quantity;
										    document.getElementById("net_price").innerHTML =  amount;
										    document.getElementById("amount_bill").value =  amount;
										    var gst=amount*0.18;
										    document.getElementById("gst").innerHTML =  gst;
										    document.getElementById("gst_bill").value =  gst;
										    var total=gst+amount;
										    document.getElementById("grand_total").innerHTML =  total;
										    document.getElementById("grand_total_bill").value =  total;	    
									}
								</script>
	

							<tr><td colspan="10"><hr style="border:1px Solid #a1a1a1;"></tr>
								
							<tr>
							<td colspan="5" align="right">
							<td><td><h3>Net Price:</h3>
							
							</td>
							<td> <h3 id="net_price"></h3></td>
							</tr>
							<tr>
							<td colspan="5" align="right">
							<td><td><h3>GST:</h3>
							
							</td>
							<td> <h3 id="gst"></h3></td>
							</tr>
							<tr>
							<td colspan="5" align="right">
							<td><td><h2>Grand Total:</h2>
							
							</td>
							<td> <h2 id="grand_total"></h2></td>
							</tr>
							<tr><td colspan="10"><hr style="border:1px Solid #a1a1a1;"></tr>
												
							<Br>
								</table>						

								<br><br>
							<center>
								<input type="hidden" name="amount" id="amount_bill">
								<input type="hidden" name="gst" id="gst_bill">
								<input type="hidden" name="grand_total" id="grand_total_bill">
							<input type="submit" value="ORDER " onclick="print_recipt()"> 
							</center>
							</form>
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					<!-- start sidebar -->
						<!-- end sidebar -->
				<div style="clear: both;">&nbsp;</div>
			</div>

<script type="text/javascript">
	function print_recipt() {
		window.print();
	}
</script>

		</body>
</html>
