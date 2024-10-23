<?php
include('db_connect.php');
if(isset($_GET['b_id']))
{
  $b_id=$_GET['b_id'];
	$pay=$_GET['pay'];
  //var_dump($l_id);
  
}

 
  $q="UPDATE bookcar SET payment='$pay' WHERE b_id=$b_id";
  
  	$result=$con->query($q);
  	if($result)
  	{
      
         echo "<script>alert('Successfully Paid....')</script>";
          echo "<script>
    window.location.replace('urenthis.php')
    </script>";
  	}
  ?>