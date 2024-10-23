<?php
// session_start();
include 'db_connect.php';
include 'eheader.php';
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
         <h3>Available Cars</h3>
      </div>
      <div class="blog-grids">
     
 <?php


$s="SELECT * FROM rent WHERE r_status='not approve'"; 
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
        $r_id=$row['r_id'];
  $company=$row['r_company'];
  $mname=$row['r_mname'];
  $car=$row['r_car'];
  $year=$row['r_year'];
 $seat=$row['r_seat'];
  $pincode=$row['r_ppkm'];
  
   // $city=$row['d_city'];
   // $state=$row['d_state']
 



                                ?>

      <div class="col-md-4 blog-grid" style="margin-top:30px;">
         <a href="../images/<?php echo $car;?>" ><img src="../images/<?php echo $car;?>" alt="" /></a>
         <h5></h5>
         
         <p><?php echo $company;" "?><?php echo $mname;" "?><?php echo $year;" "?></p>
         <p>seats : <?php echo $seat;?></p>
         <p>Rent per KM : <?php echo $pincode;?></p>
         
         <a href ="viewcarprofile.php?r_id=<?php echo $r_id; ?> ">
<button type ="button"> view car</button>
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

include '../footer.php';
?>
