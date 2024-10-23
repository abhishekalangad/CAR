<?php
session_start();
include 'db_connect.php';
include 'uheader.php';

 $l_id =$_SESSION['l_id'];
 if(isset($_GET['r_id']))
{
      $r_id=$_GET['r_id'];
   //var_dump($l_id);
}

   $l_id;
$s="SELECT * FROM rent INNER JOIN user_reg ON rent.rl_id=user_reg.ul_id WHERE rent.r_id='$r_id'";
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
         <h2>Car profile</h2>
      </div>
<!-- <center><h3></h3></center> -->
<div class="banner-bottom">
   <div class="col-md-7 bannerbottomleft">
         <div class="">
            <div> <img src="images/<?php echo $result['r_car'];?>" alt="" class="img-responsive" /> </div>
         </div>
   </div>
   <div class="col-md-5 bannerbottomright">
      <h3><?php echo $result['r_company'];?><?php echo $result['r_mname'];?><?php echo ($result['r_year']);?></h3>
      <!-- <p>Ut enim ad minima veniam, quis nostrum 
         exercitationem ulla corporis suscipit laboriosam, 
         nisi ut aliquid ex ea.</p> -->
          <h4><a href="images/<?php echo $result['r_tax'];?>">proof1</a></h4>
          <h4><a href="images/<?php echo $result['r_insurance'];?>">proof2</a></h4>
          <h4><a href="images/<?php echo $result['r_polution'];?>">proof3</a></h4>
       
      <h4><i class="fa fa-taxi" aria-hidden="true"></i>Number :<?php echo  $result['r_number'];?></h4>

      <h4><i class="fa fa-taxi" aria-hidden="true"></i> Contact Number :<?php echo  $result['r_phone'];?></h4>
        <h4><i class="fa fa-taxi" aria-hidden="true"></i> name :<?php echo $result['u_name']; ?></h4>
      <h4><i class="fa fa-taxi" aria-hidden="true"></i> address :<?php echo $result['u_address']; ?></h4>

      <h4><i class="fa fa-taxi" aria-hidden="true"></i>Number Of Seats :<?php echo  $result['r_seat'];?></h4>
      <h4><i class="fa fa-taxi" aria-hidden="true"></i>Rent Per KM :<?php echo  $result['r_ppkm'];?></h4>

      <h4><i class="fa fa-space-shuttle" aria-hidden="true"></i>Pincode : <?php echo  $result['r_pincode'];?></h4>
    
     <h4><i class="fa fa-shield" aria-hidden="true"></i>Additional Info : <?php echo  $result['r_addinfo'];?></h4>
    
      <h4><i class="fa fa-shield" aria-hidden="true"></i>Current Status : <?php echo  $result['r_custatus'];?></h4>
      <?php $rl_id=  $result['rl_id'];?>

   <BR><br>
  
<?php

  if(isset($_POST['submit']))
  {
   
  $day1=$_POST['day1'];
  $day2=$_POST['day2'];
  $o_id =$_POST['l_id'];
  $r_id =$_POST['r_id'];


    $a="INSERT INTO `bookcar`(`bo_id`, `br_id`, `b_day1`, `b_day2`, `b_status`) VALUES ('$o_id','$r_id','$day1','$day2','Booked')";
    //var_dump($q);
   //exit();
    if(mysqli_query($con,$a))   
   {


   echo "<script>alert('Successfully Added .Wait for approval....')</script>";

   }

}
?>




 
<center><div class="banner-form-agileinfo" style="width: 300px; height: 300px;">
                 
                  <h4>Fill this form to  book  </h4>
                  <form action="" method="post" enctype="multipart/form-data">
                    
                                        <input type="hidden" class="name" name="r_id" placeholder=" starting date" value="<?php echo $rl_id; ?>" required="">

                                        <input type="hidden" class="email" name="l_id" placeholder=" ending date " value="<?php echo $l_id; ?>" required="">
                                  
                                       <input type="date"  style="border: none;
    width: 100%;
    background: rgba(0, 0, 0, 0.5);
    padding: 10px 15px;
    margin-bottom: 15px;
    outline: none;
    font-size: 14px;
    color: #fff;
    letter-spacing: 1px;
" class="email" name="day1" placeholder=" starting date" required="">

                                       <input type="date" style="border: none;
    width: 100%;
    background: rgba(0, 0, 0, 0.5);
    padding: 10px 15px;
    margin-bottom: 15px;
    outline: none;
    font-size: 14px;
    color: #fff;
    letter-spacing: 1px;
" class="email" name="day2" placeholder=" starting date" required="">


                                        
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