<?php
session_start();
include("db_connect.php");
if(isset($_GET['b_id']))
{
	$b_id=$_GET['b_id'];
	 

 // $query="DELETE s,n FROM service_reg AS s INNER JOIN login AS n ON s.sl_id=n.l_id WHERE s.sl_id=$sl_id";

 $q =" UPDATE `bookdriver` SET `d_status`='ongoing' WHERE `d_id` ='$b_id' ";
 //var_dump($query);
	// $query="DELETE FROM login,registration using login INNER JOIN registration INNER JOIN astrologer WHERE login.lo_id=registration.lo_id AND registration.lo_id=astrologer.lo_id";
	$result=$con->query($q);
	if($result)
	{
		header('Location:ubookdriver.php');
	}
}
?>