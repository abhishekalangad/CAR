<?php
// session_start();
include 'db_connect.php';
include 'uheader.php';
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
         <h3>Available centers</h3>
      </div>
      <div class="blog-grids">
 <?php

$s="SELECT * FROM service_reg"; 
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
        $sl_id=$row['sl_id'];
  $name =$row['s_name'];
  $phone=$row['s_phone'];
  $pin=$row['s_pincode'];
  $add=$row['s_address'];
  $lis=$row['s_licence'];

   // $city=$row['d_city'];
   // $state=$row['d_state']
 



                                ?>

      <div class="col-md-4 blog-grid" style="margin-top:30px;">
         <a href="images/<?php echo $lis;?>" ><img src="images/<?php echo $lis;?>" alt="" /></a>
         <h5></h5>
         
         <p>name:<?php echo $name;?></p>
         <p> address: <?php echo $add;?></p>
         <p> phone: <?php echo $phone;?></p>
         <p> pincode: <?php echo $pin;?></p>
         
         <a href ="viewserviceprofile.php?sl_id=<?php echo $sl_id; ?> ">
<button type ="button" class="btn btn-success"> view profile</button>
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
