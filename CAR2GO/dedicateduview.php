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
         <h3> Dedicated Service History</h3>
      </div>
      <div class="blog-grids">
 <?php

$s="SELECT * FROM bookservice WHERE br_id=$l_id"; 
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
   
   $tid=$row['b_id'];
   $uid=$row['br_id'];
   $sid=$row['bs_id'];
   $date=$row['b_date'];
   $status=$row['b_status'];


$s1="SELECT * FROM service_details WHERE se_id=$sid"; 
//var_dump($s);
      if(!$stmt1=mysqli_query($con,$s1))
      {
        die("Preparestatment error");
      }
      $d1=array();
      while ($row1=mysqli_fetch_array($stmt1))
       {

  $se_name=$row1['se_name'];
  $se_price=$row1['se_price'];
   $sel=$row1['sel_id'];
  


  


}



 $s2="SELECT * FROM service_reg WHERE sl_id=$sel"; 
//var_dump($s);
      if(!$stmt2=mysqli_query($con,$s2))
      {
        die("Preparestatment error");
      }
      $d2=array();
      while ($row2=mysqli_fetch_array($stmt2))
       {

  
  $s_name=$row2['s_name'];
  $s_address=$row2['s_address'];
  $s_phone=$row2['s_phone'];


  


}





      ?>











      <div class="col-md-4 blog-grid" style="margin-top:30px;">
         
         <h5></h5>
         
        <!--  <p><?php echo $company;" "?><?php echo $mname;" "?><?php echo $year;" "?></p> -->
         
         
         <p>Service: <?php echo $se_name;?></p> 
         <p>Service center: <?php echo $s_name;?></p>
         <p>Address: <?php echo $s_address;?></p>  
         <p>phone: <?php echo $s_phone;?></p> 
         <p>cost: <?php echo $se_price;?></p>
         <p>status: <?php echo $status;?></p>



         <!-- <p><a href="conrent.php?b_id=<?php echo $bid;?>" class="btn btn-success">confirm</a></p> -->

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
