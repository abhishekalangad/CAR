<?php
session_start();
include 'db_connect.php';
include 'uheader.php';
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
         <h3>Driver History</h3>
      </div>
      <div class="blog-grids">
 <?php

 $s="SELECT * FROM driver_reg INNER JOIN bookdriver ON driver_reg.dl_id=bookdriver.dd_id"; 
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {

        $d_id =$row['d_id'];
       
   $name =$row['d_name'];     
  $status=$row['d_status'];
 
  
  $add=$row['d_address'];
  $pn=$row['d_phone'];
  $pin=$row['d_pincode'];
		   $d_amt=$row['d_amount'];
		   $earlier = new DateTime("2010-07-06");
$later = new DateTime("2010-07-09");



 $day1=$row['d_day1'];
  $day2=$row['d_day2'];
  
   // $city=$row['d_city'];
   // $state=$row['d_state']
 

$daysLeft = 0;

$daysLeft = abs(strtotime($day1) - strtotime($day2));
$days = $daysLeft/(60 * 60 * 24);
//printf( $days);

                                ?>

      <div class="col-md-4 blog-grid" style="margin-top:30px;">
         
         <h5></h5>
         
        <!--  <p><?php echo $company;" "?><?php echo $mname;" "?><?php echo $year;" "?></p> -->
         
         <p>Driver: <?php echo $name;?></p>
         <p>address: <?php echo $add;?></p>
         <p>phone: <?php echo $pn;?></p>
         <p>pincode: <?php echo $pin;?></p>


         <p>starting date: <?php echo $day1;?></p>
         <p>ending date: <?php echo $day2;?></p>
         <p>status : <?php echo $status;?></p>
          <p>Total : <?php echo $tamt=$d_amt*$days;?></p>
        
         

        <!--  <a href ="viewcarprofile.php?r_id=<?php echo $r_id; ?> ">
<button type ="button"> view car</button>
         </a> -->
                                
           

         <?php 
      if($row['payment']=='')
      {
        $pay =$tamt;
      ?>
       <p><a href="pay1.php?d_id=<?php echo $d_id;?>&pay=<?php echo $pay;?>" class="btn btn-success">PAY</a></p>
<?php } ?>
         
         


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
