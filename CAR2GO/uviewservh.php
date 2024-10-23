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
         <h3>Service History</h3>
      </div>
      <div class="blog-grids">
 <?php

$s="SELECT * FROM bservice WHERE cs_uid=$l_id"; 
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
   
   $uid=$row['cs_uid'];
   $cid=$row['cs_cid'];
   $review=$row['cs_ureview'];
   $date=$row['cs_date'];
   $rreview=$row['cs_ereview'];
   $rdate=$row['cs_edate'];



  
   // $city=$row['d_city'];
   // $state=$row['d_state']
 


$s1="SELECT * FROM service_reg WHERE sl_id=$cid"; 
//var_dump($s);
      if(!$stmt1=mysqli_query($con,$s1))
      {
        die("Preparestatment error");
      }
      $d1=array();
      while ($row1=mysqli_fetch_array($stmt1))
       {

  $s_name=$row1['s_name'];
  $s_add=$row1['s_address'];
  $s_phone=$row1['s_phone'];
 


}
                                ?>

      <div class="col-md-4 blog-grid" style="margin-top:30px;">
         
         <h5></h5>
         
        <!--  <p><?php echo $company;" "?><?php echo $mname;" "?><?php echo $year;" "?></p> -->
         
         
         <p>Service Center: <?php echo $s_name;?></p> 
         <p>address: <?php echo $s_add;?></p>
         <p>phone: <?php echo $s_phone;?></p>
         <p>issue: <?php echo $review;?></p>
         <p>date: <?php echo $date;?></p>
         <p>updated response: <?php echo $rreview;?></p>
         <p>updated date: <?php echo $rdate;?></p>
         <!-- <p><a href="conrent.php?b_id=<?php echo $bid;?>" class="btn btn-success">confirm</a></p> -->

         <p>
          <a href="ratings.php?sl_id=<?php echo $cid; ?>"><input type="submit" name="rating" value="Rating"></a>
         
         </p>
         <p></p>
                                
                                    

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
 