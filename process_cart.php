<?php session_start();


	if(!empty($_POST))
	{
		//update qty
		foreach($_POST as $val)
		{
			$val=$val+2;				
			header("location: bill.php");
		}
	}


?>