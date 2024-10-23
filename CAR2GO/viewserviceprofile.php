<?php
session_start();
include 'db_connect.php';
include 'uheader.php';
 echo $l_id =$_SESSION['l_id'];

  $sl_id =$_GET['sl_id'];
 if(isset($_GET['sl_id']))
{
      $sl_id=$_GET['sl_id'];
   //var_dump($l_id);
}

   $l_id;
$s="SELECT * FROM service_reg WHERE sl_id='$sl_id'";
      if(!$stmt=mysqli_query($con,$s))
      {
         die("prepare statement error1");
      }
      $result=mysqli_fetch_array($stmt);
?> 
<br><br>
<!-- //bootstrap-modal-pop-up --> 
<!-- banner-bottom -->
<div class="heading">
         <h2>Service center</h2>
      </div>
<!-- <center><h3></h3></center> -->
<div class="banner-bottom">
   <div class="col-md-7 bannerbottomleft">
         <div class="">
            <div> <img src="images/<?php echo $result['s_licence'];?>" alt="" class="img-responsive" /> </div>
         </div>
   </div>
   <div class="col-md-5 bannerbottomright">
      <h3><<?php echo $result['s_name'];?></h3>
      <!-- <p>Ut enim ad minima veniam, quis nostrum 
         exercitationem ulla corporis suscipit laboriosam, 
         nisi ut aliquid ex ea.</p> -->
          <h4><a href="images/<?php echo $result['s_rc'];?>">licence</a></h4>
          <!-- <h4><a href="images/<?php echo $result['r_insurance'];?>">proof2</a></h4>
          <h4><a href="images/<?php echo $result['r_polution'];?>">proof3</a></h4> -->
     <!--   
      <h4><i class="fa fa-taxi" aria-hidden="true"></i>Number :<?php echo  $result['r_number'];?></h4>

      <h4><i class="fa fa-taxi" aria-hidden="true"></i> Contact Number :<?php echo  $result['s_phone'];?></h4> -->
       <!--  <h4><i class="fa fa-taxi" aria-hidden="true"></i> name :<?php echo $result['u_name']; ?></h4> -->
      <h4><i class="fa fa-taxi" aria-hidden="true"></i> address :<?php echo $result['s_address']; ?></h4>
      <h4><i class="fa fa-taxi" aria-hidden="true"></i> Contact Number :<?php echo  $result['s_phone'];?></h4>

       <h4><i class="fa fa-space-shuttle" aria-hidden="true"></i>Pincode : <?php echo  $result['s_pincode'];?></h4>
     <!--  <h4><i class="fa fa-taxi" aria-hidden="true"></i>Number Of Seats :<?php echo  $result['r_seat'];?></h4>
      <h4><i class="fa fa-taxi" aria-hidden="true"></i>Rent Per KM :<?php echo  $result['r_ppkm'];?></h4> -->

     <!--  <h4><i class="fa fa-space-shuttle" aria-hidden="true"></i>Pincode : <?php echo  $result['s_pincode'];?></h4>
     -->
     <!-- <h4><i class="fa fa-shield" aria-hidden="true"></i>Additional Info : <?php echo  $result['r_addinfo'];?></h4>
    
      <h4><i class="fa fa-shield" aria-hidden="true"></i>Current Status : <?php echo  $result['r_custatus'];?></h4> -->
      <?php $sl_id=  $result['sl_id'];?>

   <BR><br>
  
<?php

  if(isset($_POST['submit']))
  {
    // echo "haii";
  $date=$_POST['date'];
  // $req=$_POsT['l_id'];
  // $sc=$_POsT['s_id'];
  $urev =$_POST['ureview'];

   $a="INSERT INTO `bservice`(`cs_date`, `cs_uid`, `cs_cid`, `cs_ureview`) VALUES ('$date','$l_id','$sl_id','$urev')";
    //var_dump($q);
   //exit();
    if(mysqli_query($con,$a))   
   {


   echo "<script>alert('Successfully Added .Wait for approval....')</script>";

   }

}
?>




 
<center><div class="banner-form-agileinfo" style="width: 300px; height: 300px;">
                 
                  <h4>Request service</h4>
                  <form action="" method="post" enctype="multipart/form-data">
                    
                                        <input type="hidden" class="name" name="sl_id" placeholder=" starting date" value="<?php echo $sl_id; ?>" required="">

                                        <input type="hidden" class="email" name="l_id" placeholder=" ending date " value="<?php echo $l_id; ?>" required="">
                                  
                                      <input type="textfield" class="name" name="ureview" placeholder="Describe your issue" required="">

                                       <input type="date"  style="border: none;
    width: 100%;
    background: rgba(0, 0, 0, 0.5);
    padding: 10px 15px;
    margin-bottom: 15px;
    outline: none;
    font-size: 14px;
    color: #fff;
    letter-spacing: 1px;
" class="email" name="date" placeholder="date" required="">

                                       

                                        
                    <input type="submit" class="hvr-shutter-in-vertical" value="Submit" name="submit">    
                  </form>
                </div></center>



      <!-- <h4><i class="fa fa-truck" aria-hidden="true"></i>Packaging & Storage</h4> -->
     
     <br><br>
     <!-- <p><a href="link.php?ul_id=<?php echo $l_id;?>" class="btn btn-success">Book Now</a> -->
     <br>
     <br>
   
       
   </div>
   <div class="clearfix"></div>
</div>
<!-- //banner-bottom -->

<!-- our blog -->


<?php

include 'footer.php';
?>