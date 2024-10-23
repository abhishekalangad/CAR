<?php
 session_start();
include 'db_connect.php';
include 'uheader.php';
if(isset($_SESSION['l_id']))
{
   $l_id =$_SESSION['l_id'];
 $s1="SELECT * FROM user_reg WHERE ul_id=$l_id"; 
//var_dump($s);
      if(!$stmt1=mysqli_query($con,$s1))
      {
        die("Preparestatment error1");
      }
      $d=array();
      while ($row1=mysqli_fetch_array($stmt1))
       {
     
         $u_pincode=$row1['u_pincode'];
         
       }

  //var_dump($l_id);

}
?>


<section class="blog" id="blog">
   <div class="container">
      <div class="heading">
         <h3>Available drivers</h3>
      </div>
      <div class="blog-grids">
        <form action="viewdriv1.php" method="POST">
          <select name="km">
            <option value="10">10Km</option>
              <option value="20">20Km</option>
               <option value="30">30Km</option>
                <option value="100">100Km</option>
                <option value="200">200Km</option>
                <option value="300">300Km</option>
                <option value="500">500Km</option>
          </select>
          <input type="submit" name="search"  class="btn btn-success" value="search">
        </form>



<?php


if(isset($_POST['search']))
{

  $km= $_POST['km'];
   $hpin=$u_pincode-$km;
   $lpin=$u_pincode+$km;

	 $s="SELECT * FROM driver_reg WHERE( d_pincode BETWEEN $hpin AND $lpin)"; 
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error2");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
        $dl_id=$row['dl_id'];
 //  $company=$row['r_company'];
 //  $mname=$row['r_mname'];
 //  $car=$row['r_car'];
 //  $year=$row['r_year'];
 // $seat=$row['r_seat'];
 //  $pincode=$row['r_ppkm'];
  
   // $city=$row['d_city'];
   // $state=$row['d_state']
  $add=$row['d_address'];
  
  $pin=$row['d_pincode'];
  $phn=$row['d_phone'];
  $name=$row['d_name'];
  $d_id=$row['d_id'];
  $dl_id=$row['dl_id'];
  $d_photo=$row['d_licence'];

 



                                ?>


<div class="col-md-4 blog-grid" style="margin-top:30px;">
         <a href="images/<?php echo $d_photo;?>" ><img src="images/<?php echo $d_photo;?>" alt="" /></a>
         <h5></h5>
         
         <!-- <p><?php echo $company;" "?><?php echo $mname;" "?><?php echo $year;" "?></p> -->
         <p>name : <?php echo $name;?></p>
         <p>address : <?php echo $add;?></p>
         <p>phone : <?php echo $phn;?></p>
         <p>pincode : <?php echo $pin;?></p>

         <!-- <p>Rent per KM : <?php echo $pincode;?></p> -->
         
         <a href ="viewdriverprofile.php?dl_id=<?php echo $dl_id; ?> ">
<button class="btn btn-success" type ="button"> view driver</button>
         </a>
                                
                                    

      </div>
 <?php
    } }
?>
      <div class="clearfix"></div>
      <!-- </div>
   </div> -->
</section>
<!-- //our blog -->
<?php

include 'footer.php';
?>
