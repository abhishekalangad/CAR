<?php
include('db_connect.php');
if(isset($_GET['sl_id']))
{
  $sl_id=$_GET['sl_id'];
  //var_dump($l_id);
  
}

  $approve='not approve';

  $q="UPDATE login SET l_approve='$approve' WHERE l_id=$sl_id"; 
  
  	$result=$con->query($q);
  	if($result)
  	{
  		header("location:viewuser.php");
  	}
  ?>