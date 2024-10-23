<?php
session_start();
include 'db_connect.php';
include 'eheader.php';

 $l_id =$_SESSION['l_id'];
 if(isset($_GET['r_id']))
{
      $r_id=$_GET['r_id'];
   //var_dump($l_id);
}

   $l_id;
$s="SELECT * FROM rent INNER JOIN user_reg ON rent.rl_id=user_reg.ul_id WHERE rent.r_id='$r_id'";
      if(!$stmt=mysqli_query($con,$s))
      {
         die("prepare statement error1");
      }
      $result=mysqli_fetch_array($stmt);
?> 
<br><br>
<!-- //bootstrap-modal-pop-up --> 
<!-- banner-bottom -->
<div class="heading">
         <h2>Car profile</h2>
      </div>
<!-- <center><h3></h3></center> -->
<div class="banner-bottom">
   <div class="col-md-7 bannerbottomleft">
         <div class="">
            <div> <img src="../images/<?php echo $result['r_car'];?>" alt="" class="img-responsive" /> </div>
         </div>
   </div>
   <div class="col-md-5 bannerbottomright">
      <h3><?php echo $result['r_company'];?><?php echo $result['r_mname'];?><?php echo ($result['r_year']);?></h3>
      <!-- <p>Ut enim ad minima veniam, quis nostrum 
         exercitationem ulla corporis suscipit laboriosam, 
         nisi ut aliquid ex ea.</p> -->
          <h4><a href="../images/<?php echo $result['r_tax'];?>">proof1</a></h4>
          <h4><a href="../images/<?php echo $result['r_insurance'];?>">proof2</a></h4>
          <h4><a href="../images/<?php echo $result['r_polution'];?>">proof3</a></h4>
       
      <h4><i class="fa fa-taxi" aria-hidden="true"></i>Number :<?php echo  $result['r_number'];?></h4>

      <h4><i class="fa fa-taxi" aria-hidden="true"></i> Contact Number :<?php echo  $result['r_phone'];?></h4>
        <h4><i class="fa fa-taxi" aria-hidden="true"></i> name :<?php echo $result['u_name']; ?></h4>
      <h4><i class="fa fa-taxi" aria-hidden="true"></i> address :<?php echo $result['u_address']; ?></h4>

      <h4><i class="fa fa-taxi" aria-hidden="true"></i>Number Of Seats :<?php echo  $result['r_seat'];?></h4>
      <h4><i class="fa fa-taxi" aria-hidden="true"></i>Rent Per KM :<?php echo  $result['r_ppkm'];?></h4>

      <h4><i class="fa fa-space-shuttle" aria-hidden="true"></i>Pincode : <?php echo  $result['r_pincode'];?></h4>
    
     <h4><i class="fa fa-shield" aria-hidden="true"></i>Additional Info : <?php echo  $result['r_addinfo'];?></h4>
    
      <h4><i class="fa fa-shield" aria-hidden="true"></i>Current Status : <?php echo  $result['r_custatus'];?></h4>
      <h4><i class="fa fa-shield" aria-hidden="true"></i>verification : <?php echo  $result['r_status'];?></h4>
      <?php $rl_id=  $result['rl_id'];?>
       <?php $r_id=  $result['r_id'];?>

   




 




      <!-- <h4><i class="fa fa-truck" aria-hidden="true"></i>Packaging & Storage</h4> -->
     
     <br><br>
     <!-- <p><a href="link.php?ul_id=<?php echo $l_id;?>" class="btn btn-success">Book Now</a> -->
     <br>
     <br>
   
       
   </div>
   <div class="clearfix"></div>
</div>
<!-- //banner-bottom -->

<!-- our blog -->


<?php

include '../footer.php';
?>