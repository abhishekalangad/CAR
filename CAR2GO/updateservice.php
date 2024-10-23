<?php
   include 'db_connect.php';
  if(isset($_POST['submit']))
  {
   
   $pin=$_POST['pid'];
  $date=$_POST['date'];
  $ureview =$_POST['ureview'];

   // $a1="INSERT INTO `bservice`(`cs_edate`, `cs_ereview`) VALUES ('$date','$ureview') WHERE `cs_uid`='$uid' AND `cs_cid`='$cid'";
    //var_dump($q);
   //exit();
    $a1 ="UPDATE bservice SET `cs_edate` ='$date' ,`cs_ereview` ='$ureview' WHERE `cs_id` ='$pin' "; 

    if(mysqli_query($con,$a1))   
   {


   // echo "<script>alert('Status updated....')</script>";
   header('Location:sviewur.php');

   }

}
?>