<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*{
    margin: 0;
    padding: 0;
}
.rate {
    float: left;
    height: 46px;
    padding: 0 10px;
}
.rate:not(:checked) > input {
    position:absolute;
    top:-9999px;
}
.rate:not(:checked) > label {
    float:right;
    width:1em;
    overflow:hidden;
    white-space:nowrap;
    cursor:pointer;
    font-size:30px;
    color:#ccc;
}
.rate:not(:checked) > label:before {
    content: '★ ';
}
.rate > input:checked ~ label {
    color: #ffc700;    
}
.rate:not(:checked) > label:hover,
.rate:not(:checked) > label:hover ~ label {
    color: #deb217;  
}
.rate > input:checked + label:hover,
.rate > input:checked + label:hover ~ label,
.rate > input:checked ~ label:hover,
.rate > input:checked ~ label:hover ~ label,
.rate > label:hover ~ input:checked ~ label {
    color: #c59b08;
}
</style>
<?php
 session_start();
include 'db_connect.php';
include 'uheader.php';
error_reporting(0);
if(isset($_SESSION['l_id']))
{
   $l_id =$_SESSION['l_id'];
  //var_dump($l_id);
$s1="SELECT * FROM user_reg WHERE ul_id=$l_id"; 
//var_dump($s);
      if(!$stmt1=mysqli_query($con,$s1))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row1=mysqli_fetch_array($stmt1))
       {
     
         $u_pincode=$row1['u_pincode'];
	   }

    echo  $rl_id=$_GET['r_id'];

}
?>

<!-- our blog -->
<section class="blog" id="blog">
   <div class="container">
      <div class="heading">
         <h3>Reviews</h3>
      </div>
      <div class="blog-grids">
      
   <?php         
 $s11="SELECT * FROM rating WHERE l_id=$rl_id"; 
//var_dump($s);
      if(!$stmt11=mysqli_query($con,$s11))
      {
        die("Preparestatment error");
      }
      $d=array();
     $rowcount=mysqli_num_rows($stmt11);
      while ($row11=mysqli_fetch_array($stmt11))
       {
        ?>

      <div class="col-md-4 blog-grid" style="margin-top:30px; min-height: 500px;">
        
<!--          <h5>Name :<?php echo    $ur_id=$row11['ur_id']; 

 $s12="SELECT * FROM user_reg WHERE ul_id=$ur_id"; 
//var_dump($s);
      if(!$stmt12=mysqli_query($con,$s12))
      {
        die("Preparestatment error");
      }
     
     $row12=mysqli_fetch_array($stmt12);
      

  $u_name12=$row12['u_name']; 





         ?></h5> -->
         
         
         <p>Review : <?php   echo  $rating=$row11['review']; ?></p>
         <p>

     
     




         </p>
                       
                                    

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
