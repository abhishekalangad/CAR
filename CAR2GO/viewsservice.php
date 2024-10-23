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
         <h3>Providing Service Details </h3>
      </div>
      <div class="blog-grids" style="height: 500px;">
 <?php

$s="SELECT * FROM service_details WHERE sel_id=$l_id" ;
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
  $s_name=$row['se_name'];
  $se_id=$row['se_id'];

  $s_details=$row['se_details'];
  $s_price=$row['se_price'];
  


                                ?>

      <div class="col-md-4 blog-grid" style="margin-top:30px;">
        <!--  <a href="images/<?php echo $licence;?>" ><img src="images/<?php echo $licence;?>" alt="" /></a> -->
         <h5></h5>
         <!-- <h4><a href="images/<?php echo $licence;?>">Rc</a></h4> -->
         <p>Service Name :<?php echo $s_name;?></p>
         <p>Details : <?php echo $s_details;?></p>
         <p>Cost : <?php echo $s_price;?></p>
         
                                    
         <div class="readmore-w3">
            <!-- <a class="readmore" href="#" data-toggle="modal" data-target="#myModal">Read More</a> -->
                
<a href="editservice.php?se_id=<?php echo $se_id;?>"><button  class="btn btn-primary">edit</button></a>                             
<a href="deleteservice.php?se_id=<?php echo $se_id;?>"><button  class="btn btn-primary">Delete</button></a>
         </div>
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

class="btn btn-success"