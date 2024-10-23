<?php
session_start();
include 'db_connect.php';
include 'dheader.php';
if(isset($_SESSION['l_id']))
{
  $l_id =$_SESSION['l_id'];
  //var_dump($l_id);


}
?>

<!-- our blog -->
<section class="blog" id="blog">
   <div class="container">
      <div class="heading">
         <h3>Booking History</h3>
      </div>
      <div class="blog-grids">
 <?php
$s="SELECT * FROM user_reg INNER JOIN bookdriver on user_reg.ul_id=bookdriver.dr_id ";


// INNER JOIN bookdriver ON driver_reg.ul_id=bookcar.br_id"; 
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
       
   $req =$row['u_name']; 
   $d_id =$row['d_id']; 
   $add =$row['u_address'];
   $phone =$row['u_phone'];   
   $pin =$row['u_pincode'];
  $day1=$row['d_day1'];
  $day2=$row['d_day2'];
  $status=$row['d_status'];
  // $pn=$row['u_phone'];
  // $pin=$row['u_pincode'];



 // $day1=$row['b_day1'];
 //  $day2=$row['b_day2'];
  
   // $city=$row['d_city'];
   // $state=$row['d_state']
 



                                ?>

      <div class="col-md-4 blog-grid" style="margin-top:30px;">
         
         <h5></h5>
         
        <!--  <p><?php echo $company;" "?><?php echo $mname;" "?><?php echo $year;" "?></p> -->
         
         <p>Requesting user: <?php echo $req;?></p>
       <!--   <p>You: <?php echo $l_id;?></p> 
          -->
     <!--     <p>Requesting user: <?php echo $req;?></p> -->
         <p>Address: <?php echo $add;?></p>
         <p>Phone: <?php echo $phone;?></p>
         <p>Pincode: <?php echo $pin;?></p>
         <p>Starting Date: <?php echo $day1;?></p>
         <p>Ending Date: <?php echo $day2;?></p>


         <!-- <p>starting date: <?php echo $day1;?></p>
         <p>ending date: <?php echo $day2;?></p> -->
         <p>status : <?php echo $dddee= $status;?></p>

<p>

         <?php 

If($dddee == 'confirmed')
{

?> <a  class="btn btn-success">confirmed</a>
<?php
}
else
{
   ?>
   <a href="bdconfirmed.php?b_id=<?php echo $d_id;?>" class="btn btn-success">confirm</a>
  <?php
}
  ?>




<!-- -->
                                 
   <!--  <a href ="viewcarprofile.php?r_id=<?php echo $r_id; ?> ">
<button type ="button"> view car</button>
         </a> -->
                                
                                    

      </div>
 <?php
}
?>
      <div class="clearfix"></div>
      </div>
   </div>
</section>
<!-- //our blog -->
<?php

include 'footer.php';
?>


<p><a href="bdconfirmed.php?b_id=<?php echo $d_id;?>" class="btn btn-success">confirmed</a>