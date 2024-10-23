<?php
session_start();
include 'db_connect.php';
include 'sheader.php';
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
         <h3>service requests</h3>
      </div>
      <div class="blog-grids">
 <?php

 $s="SELECT * FROM driver_reg INNER JOIN bservice ON driver_reg.dl_id=bservice.cs_cid"; 
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
       
   $name =$row[''];  
   $add =$row[''];
   $ph =$row[''];
   $pin =$row[''];
   $date =$row[''];
   $review =$row['']; 
  
   // $city=$row['d_city'];
   // $state=$row['d_state']
 



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
