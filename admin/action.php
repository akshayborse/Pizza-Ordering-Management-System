<?php

$task=$_GET['task'];

if($task=='edit')
{
	header('location:updatepizza.php');
}
else
{
	header('location:deletepizza.php');
}

?>