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
         <h3>User</h3>
      </div>
      <div class="blog-grids">
 <?php

$s="SELECT * FROM login INNER JOIN user_reg on login.l_id=user_reg.ul_id ";
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
  $s_id=$row['u_id'];
  $sl_id=$row['ul_id'];

   $licence=$row['u_licence'];
  $name=$row['u_name'];
 $email=$row['u_email'];
  $password=$row['u_password'];
  $address=$row['u_address'];
   // $city=$row['d_city'];
   // $state=$row['d_state'];
   $phone=$row['u_phone'];
   $pincode=$row['u_pincode'];
 
 
  $approve=$row['l_approve'];


                                ?>

      <div class="col-md-4 blog-grid" style="margin-top:30px;">
         <a href="images/<?php echo $licence;?>" ><img src="images/<?php echo $licence;?>" alt="" /></a>
         <h5></h5>
         <h4><a href="images/<?php echo $licence;?>">User details</a></h4>
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
                                   <a href="disser2.php?sl_id=<?php echo $sl_id;?>"><button class="btn btn-danger">Disapprove</button></a>
                                    <?php
                                  }
                                  else
                                  {
                                    ?>
                                   <a href="appser2.php?sl_id=<?php echo $sl_id;?>"><button class="btn btn-success">Approve</button></a>
                                    <?php
                                  }
                                  ?>
                                    
                                    <a href="deleteser2.php?sl_id=<?php echo $sl_id;?>"><button  class="btn btn-primary">Delete</button></a>
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
