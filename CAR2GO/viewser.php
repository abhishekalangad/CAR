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

$s="SELECT * FROM service_details"; 
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
        $se_id=$row['se_id'];
        $sel_id=$row['sel_id'];
        $name =$row['se_name'];
        $details=$row['se_details'];
        $price=$row['se_price'];


       
  
   // $city=$row['d_city'];
   // $state=$row['d_state']
    



                                ?>

      <div class="col-md-4 blog-grid" style="margin-top:30px;">
         <!-- <a href="images/<?php echo $lis;?>" ><img src="images/<?php echo $lis;?>" alt="" /></a>
         <h5></h5> -->
         
         
         <p>name:<?php echo $name;?></p>
         <p> details: <?php echo $details;?></p>
         <p> cost: <?php echo $price;?></p>


        
         <a href ="viewserr.php?se_id=<?php echo $se_id; ?>">
         <button type ="button" class="btn btn-success"> view profile</button></a>

                            
                                    

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
