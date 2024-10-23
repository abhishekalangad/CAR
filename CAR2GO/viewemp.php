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
         <h3>Employe Details</h3>
      </div>
      <div class="blog-grids">
 <?php

$s="SELECT * FROM login INNER JOIN emp_reg on login.l_id=emp_reg.el_id ";
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
  $s_id=$row['e_id'];
  $sl_id=$row['el_id'];

  
  $name=$row['e_name'];
 $email=$row['e_email'];
  $password=$row['e_password'];
  $address=$row['e_address'];
   // $city=$row['d_city'];
   // $state=$row['d_state'];
   $phone=$row['e_phone'];
   $pincode=$row['e_pincode'];
  
 
  //$approve=$row['l_approve'];


                                ?>

      <div class="col-md-4 blog-grid" style="margin-top:30px;">
       
       
         
         <p>Name :<?php echo $name;?></p>
         <p>Email : <?php echo $email;?></p>
         <p>Address : <?php echo $address;?></p>
         <p>Phone : <?php echo $phone;?></p>
         <p>Pincode : <?php echo $pincode;?></p>
<!--          <p>Status :<?php echo $approve;?></p>-->
                                
                                    
         <div class="readmore-w3">
            
               
                                    
                                    <a href="deleteemp.php?sl_id=<?php echo $sl_id;?>"><button  class="btn btn-primary">Delete</button></a>
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