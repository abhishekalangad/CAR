<?php
include('db_connect.php');
if(isset($_GET['d_id']))
{
  $b_id=$_GET['d_id'];
	$pay=$_GET['pay'];
  //var_dump($l_id);
  
}

 

  $q="UPDATE bookdriver SET payment='$pay' WHERE d_id=$b_id"; 
  
  	$result=$con->query($q);
  	if($result)
  	{
          echo "<script>alert('Successfully Paid....')</script>";
          echo "<script>
    window.location.replace('udriverthis.php')
    </script>";
  		//header("location:udriverthis.php");
  	}
  ?>