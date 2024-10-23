<?php
include('db_connect.php');
if(isset($_GET['b_id']))
{
  $b_id=$_GET['b_id'];
  //var_dump($l_id);
  
}

  $approve='approved';

  $q="UPDATE bookservice SET b_status='$approve' WHERE b_id=$b_id"; 
  
  	$result=$con->query($q);
  	if($result)
  	{
  		header("location:svieweserv.php");
  	}
  ?>