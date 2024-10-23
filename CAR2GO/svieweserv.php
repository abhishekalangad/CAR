<?php
session_start();
include 'db_connect.php';
include 'sheader.php';
if(isset($_SESSION['l_id']))

{
    $l_id =$_SESSION['l_id'];
  //var_dump($l_id);


}
 $l_id;
?>

<!-- our blog -->
<section class="blog" id="blog">
   <div class="container">
      <div class="heading">
         <h3>Special Service Requests</h3>
      </div>
      <div class="blog-grids">
 <?php

  $s="SELECT * FROM service_details INNER JOIN bookservice ON service_details.se_id =bookservice.bs_id WHERE service_details.sel_id='$l_id' "; 
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
        $name=$row['se_name'];
        $b_id=$row['b_id'];
        $details=$row['se_details'];
        $price=$row['se_price'];
        $date=$row['b_date'];
        $req=$row['br_id'];
        $status=$row['b_status'];
  
 //  $mname=$row['r_mname'];
 //  $car=$row['r_car'];
 //  $year=$row['r_year'];
 // $seat=$row['r_seat'];
 //  $pincode=$row['r_ppkm'];
  
   // $city=$row['d_city'];
   // $state=$row['d_state']
    




  $s1="SELECT * FROM user_reg WHERE `ul_id` = '$req' "; 
//var_dump($s);
      if(!$stmt1=mysqli_query($con,$s1))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row1=mysqli_fetch_array($stmt1))
       {
       
        $uname=$row1['u_name'];
        $uadd=$row1['u_address'];
        

      }

                                ?>

      <div class="col-md-4 blog-grid" style="margin-top:30px;">
        <!--  <a href="images/<?php echo $car;?>" ><img src="images/<?php echo $car;?>" alt="" /></a> -->
         <h5></h5>
         
        

        <p>Requesting user: <?php echo $uname;?></p>
        <p>Address: <?php echo $uadd;?></p>
        <p>Requesting service: <?php echo $name;?></p>
         <p>Service Details: <?php echo $details;?></p>
         <p>Price: <?php echo $price;?></p>
         <p>Date: <?php echo $date;?></p>
         <p>Status: <?php echo $status;?></p>
         <!-- <!-- <p>Address: <?php echo $uadd;?></p> -->
         <!-- <p>Date: <?php echo $date;?></p> --> 
         <!-- <p>Rent per KM : <?php echo $date;?></p> -->
         
<a href ="approveservice.php?b_id=<?php echo $b_id; ?> ">
<button type ="button" class="btn btn-success">Approve</button>
<a href ="rejectservice.php?b_id=<?php echo $b_id; ?> ">
<button type ="button" class="btn btn-success">reject</button>
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

include 'footer.php';
?>
