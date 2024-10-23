<?php
// session_start();
include 'db_connect.php';
include 'aheader.php';
if(isset($_SESSION['l_id']))
{
  echo $l_id =$_SESSION['l_id'];
  //var_dump($l_id);


}
?>

<!-- our blog -->
<section class="blog" id="blog">
   <div class="container">
      <div class="heading">
         <h3>Drivers List</h3>
      </div>
      <div class="blog-grids">
 <?php

$s="SELECT * FROM driver_reg"; 
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
    $dl_id=$row['dl_id'];
  $name=$row['d_name'];
  $email=$row['d_email'];
  $address=$row['d_address'];
  $pin=$row['d_pincode'];
 $phone=$row['d_phone'];
  $proof=$row['d_proof'];
  
   // $city=$row['d_city'];
   // $state=$row['d_state']
 



                                ?>

      <div class="col-md-4 blog-grid" style="margin-top:30px;">
         <a href="images/<?php echo $proof;?>" ><img src="images/<?php echo $proof;?>" alt="users image" /></a>
         <h5></h5>
         
         <p>Name:<?php echo $name;" "?></p>
         <p>Address:<?php echo $address;" "?></p>
          <p>phone:<?php echo $phone;" "?></p>
         <p>Pincode : <?php echo $pin;?></p>
         
         <a href ="viewdriverprofile.php?r_id=<?php echo $dl_id; ?> ">
<button type ="button" class="btn btn-success" > view Driver</button>
         </a>
                                
                                    

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
