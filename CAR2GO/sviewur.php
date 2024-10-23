<?php
session_start();
include 'db_connect.php';
include 'sheader.php';
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
         <h3>Service Requests</h3>
      </div>
      <div class="blog-grids">
 <?php

$s="SELECT * FROM bservice WHERE cs_cid=$l_id"; 
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
   $pid=$row['cs_id'];
   $uid=$row['cs_uid'];
   $cid=$row['cs_cid'];
   $review=$row['cs_ureview'];
   $date=$row['cs_date'];
   // $rreview=$row['cs_ereview'];
   // $rdate=$row['cs_edate'];



  
   // $city=$row['d_city'];
   // $state=$row['d_state']
 


$s1="SELECT * FROM user_reg WHERE ul_id=$uid"; 
//var_dump($s);
      if(!$stmt1=mysqli_query($con,$s1))
      {
        die("Preparestatment error");
      }
      $d1=array();
      while ($row1=mysqli_fetch_array($stmt1))
       {

  $u_name=$row1['u_name'];
  $u_add=$row1['u_address'];
  $u_phone=$row1['u_phone'];





}
                                ?>

      <div class="col-md-4 blog-grid" style="margin-top:30px;">
         
         <h5></h5>
         
        <!--  <p><?php echo $company;" "?><?php echo $mname;" "?><?php echo $year;" "?></p> -->
         
         
         <p>User: <?php echo $u_name;?></p> 
         <p>address: <?php echo $u_add;?></p>
         <p>phone: <?php echo $u_phone;?></p>
         <p>issue: <?php echo $review;?></p>
         <p>date: <?php echo $date;?></p>
         <!-- <p>updated issue: <?php echo $rreview;?></p>
         <p>updated date: <?php echo $rdate;?></p> -->
        
         <!-- <p><a href="conrent.php?b_id=<?php echo $bid;?>" class="btn btn-success">confirm</a></p> -->

        <!--  <a href ="viewcarprofile.php?r_id=<?php echo $r_id; ?> ">
<button type ="button"> view car</button>
         </a> -->
          <center><div class="banner-form-agileinfo" style="width: 300px; height: 300px;">
                 
                  
                  <form action="updateservice.php" method="post" enctype="multipart/form-data">
                    
                                        <!-- <input type="hidden" class="name" name="sl_id" placeholder=" starting date" value="<?php echo $sl_id; ?>" required=""> -->

                                        <input type="hidden" class="email" name="pid" value="<?php echo $pid; ?>" required="">
                                  
                                      <input type="textfield" class="name" name="ureview" placeholder="Service Response" required="">

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

                                       

                  <input type="submit" class="hvr-shutter-in-vertical" value="Update" name="submit">    
                  </form>
                </div></center>                      
                                    

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
