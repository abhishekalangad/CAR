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
         <h3> RENT DETAILS </h3>
      </div>
      <div class="blog-grids" style="height: 500px; width: 400;">
 <?php

$s="SELECT * FROM rent WHERE rl_id=$l_id" ;
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
        $r_id = $row['r_id'];
     $company=$row['r_company'];
     $mname=$row['r_mname'];
     $img =$row['r_car'];

    ?>

      <div class="col-md-2 blog-grid" style="margin-top:30px;">
        <!--  <a href="images/<?php echo $licence;?>" ><img src="images/<?php echo $licence;?>" alt="" /></a> -->
         <h5></h5>
         <img src="images/<?php echo $img;?>">
         <!-- <h4><a href="images/<?php echo $licence;?>">Rc</a></h4> -->
         <p>Company :<?php echo $company;?></p>
         <p>Model : <?php echo $mname;?></p>
         <a href="editurent.php?r_id=<?php echo $r_id;?>"><button  class="btn btn-primary">edit</button></a>                                  <a href="deleteurent.php?r_id=<?php echo $r_id;?>"><button  class="btn btn-primary">Delete</button></a>

        <div class="readmore-w3">
            <!-- <a class="readmore" href="#" data-toggle="modal" data-target="#myModal">Read More</a> -->
                

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





