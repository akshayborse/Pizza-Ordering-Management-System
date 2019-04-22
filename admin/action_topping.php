<?php

$task=$_GET['task'];

if($task=='edit')
{
	header('location:updatetopping.php');
}
else
{
	header('location:deletetopping.php');
}

?>