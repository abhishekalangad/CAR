<?php
session_start();
include 'db_connect.php';
include 'eheader.php';
 if(isset($_SESSION['l_id']))
{
    $l_id=$_SESSION['l_id'];
   //var_dump($l_id);
}
$s="SELECT * FROM `emp_reg` WHERE `el_id`='$l_id'";
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
         <h2>Employe Profile</h2>
      </div>
<!-- <center><h3></h3></center> -->
<div class="banner-bottom">
   <div class="col-md-7 bannerbottomleft">
         <div class="">
            <div></div>
         </div>
   </div>
   <div class="col-md-5 bannerbottomright">
      <h3><?php echo $result['e_name'];?></h3>
      <!-- <p>Ut enim ad minima veniam, quis nostrum 
         exercitationem ulla corporis suscipit laboriosam, 
         nisi ut aliquid ex ea.</p> -->
          
       
      <h4><i class="fa fa-taxi" aria-hidden="true"></i>Email :<?php echo  $result['e_email'];?></h4>
      <h4><i class="fa fa-shield" aria-hidden="true"></i>Address : <?php echo  $result['e_address'];?></h4>
      <h4><i class="fa fa-ticket" aria-hidden="true"></i>Phone : <?php echo  $result['e_phone'];?></h4>
      <h4><i class="fa fa-space-shuttle" aria-hidden="true"></i>Pincode : <?php echo  $result['e_pincode'];?></h4>
      <!-- <h4><i class="fa fa-truck" aria-hidden="true"></i>Packaging & Storage</h4> -->
     
     <br><br>
     <p><a href="eedit.php?ul_id=<?php echo $l_id;?>" class="btn btn-success">Edit</a>
<a href="udelete.php?ul_id=<?php echo $l_id;?>" class="btn btn-primary">Delete</a></p>

       
   </div>
   <div class="clearfix"></div>
</div>
<!-- //banner-bottom -->

<!-- our blog -->


<?php

include '..\footer.php';
?>