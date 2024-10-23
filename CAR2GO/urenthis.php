<?php
session_start();
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
         <h3>Car bookings</h3>
      </div>
      <div class="blog-grids">
      
  
 <?php

 $s="SELECT *
FROM user_reg
INNER JOIN bookcar ON user_reg.ul_id=bookcar.br_id WHERE user_reg.ul_id != $l_id"; 
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
       
   $bid =$row['b_id'];  
		   $br_id =$row['br_id']; 
       
  $status=$row['b_status'];
  $owner=$row['bo_id'];
  $req=$row['u_name'];
  $add=$row['u_address'];
  $pn=$row['u_phone'];
		  
  $pin=$row['u_pincode'];

  $s1="SELECT *
FROM rent WHERE rl_id='$br_id'";
		   $stmt1=mysqli_query($con,$s1);
		    while ($row1=mysqli_fetch_array($stmt1))
       {
		     $ramt=$row1['rent_amt'];
          $r_id=$row1['r_id'];
	   }
  $day1=$row['b_day1'];
   $day2=$row['b_day2'];
  
   // $city=$row['d_city'];
   // $state=$row['d_state']
 
$daysLeft = 0;

$daysLeft = abs(strtotime($day1) - strtotime($day2));
  $days = $daysLeft/(60 * 60 * 24);
  $pay=$days*$ramt;

                                ?>

      <div class="col-md-4 blog-grid" style="margin-top:30px; ">
         
         <h5></h5>
         
        <!--  <p><?php echo $company;" "?><?php echo $mname;" "?><?php echo $year;" "?></p> -->
         
         <p>owner: <?php echo $req;?></p>
         <p>contact: <?php echo $pn;?></p> 
         <p>address: <?php echo $add;?></p>
         <p>pincode: <?php echo $pin;?></p>


         <p>starting date: <?php echo $day1;?></p>
         <p>ending date: <?php echo $day2;?></p>
		  <p>status : <?php echo $status;?></p>
         <p>Payment : <?php echo $pay;?></p>
         <p>
          <a href="rating.php?r_id=<?php echo $r_id; ?>"><input type="submit" name="rating" value="Rating"></a>
         
         </p>
         <p></p>

         
         <?php 
		  if($row['payment']=='')
		  {
		  ?>
       <p><a href="pay.php?b_id=<?php echo $bid;?>&pay=<?php echo $pay;?>" class="btn btn-success">PAY</a></p>
<?php } ?>
         
         
         
          
        <?php 
		  if($br_id == $l_id)
		  {
		  ?>
         <p><a href="conrent.php?b_id=<?php echo $bid;?>" class="btn btn-success">confirm</a></p>
<?php } ?>

                                
                                    

		  </div>   
 <?php
}
?>
    </div> 
      <div class="clearfix"></div>
      </div>
   </div>
</section>
<!-- //our blog -->
<?php

include 'footer.php';
?>
