<?php
// session_start();
include 'db_connect.php';
include 'aheader.php';
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
         <h3>Service center Details</h3>
      </div>
      <div class="blog-grids" style="height: 500px;">
 <?php

$s="SELECT * FROM login INNER JOIN service_reg on login.l_id=service_reg.sl_id ";
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
  $s_id=$row['s_id'];
  $sl_id=$row['sl_id'];

   $licence=$row['s_licence'];
  $name=$row['s_name'];
 $email=$row['s_email'];
  $password=$row['s_password'];
  $address=$row['s_address'];
   // $city=$row['d_city'];
   // $state=$row['d_state'];
   $phone=$row['s_phone'];
   $pincode=$row['s_pincode'];
   $rc=$row['s_rc'];
 
  $approve=$row['l_approve'];


                                ?>

      <div class="col-md-4 blog-grid" style="margin-top:30px;">
         <a href="images/<?php echo $licence;?>" ><img src="images/<?php echo $licence;?>" alt="" /></a>
         <h5></h5>
         <h4><a href="images/<?php echo $licence;?>">Details</a></h4>
         <p>Name :<?php echo $name;?></p>
         <p>Email : <?php echo $email;?></p>
         <p>Address : <?php echo $address;?></p>
         <p>Phone : <?php echo $phone;?></p>
         <p>Pincode : <?php echo $pincode;?></p>
          <p>Status :<?php echo $approve;?></p>
                                
                                    
         <div class="readmore-w3">
            <!-- <a class="readmore" href="#" data-toggle="modal" data-target="#myModal">Read More</a> -->
                <?php
                                    if($approve=='approve')
                                    {
                                    ?>
                                   <a href="disser.php?sl_id=<?php echo $sl_id;?>"><button class="btn btn-danger">Disapprove</button></a>
                                    <?php
                                  }
                                  else
                                  {
                                    ?>
                                   <a href="appser.php?sl_id=<?php echo $sl_id;?>"><button class="btn btn-success">Approve</button></a>
                                    <?php
                                  }
                                  ?>
                                    
                                    <a href="deleteser.php?sl_id=<?php echo $sl_id;?>"><button  class="btn btn-primary">Delete</button></a>
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
