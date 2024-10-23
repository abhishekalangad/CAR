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

}
?>

<!-- our blog -->
<section class="blog" id="blog">
   <div class="container">
      <div class="heading">
         <h3>Available Cars</h3>
      </div>
      <div class="blog-grids">
        <form action="viewcars.php" method="POST">
          <select name="km">
            <option value="10">10Km</option>
              <option value="20">20Km</option>
               <option value="20">50Km</option>
                <option value="100">100Km</option>
                <option value="200">200Km</option>
                <option value="300">300Km</option>
                <option value="500">500Km</option>
                <option value="100000">All Cars</option>
          </select>
          <input type="submit" name="search"  class="btn btn-success" value="search">
        </form>
 <?php


if(isset($_POST['search']))
{

 $km= $_POST['km'];
	 $hpin=$u_pincode-$km;
	 $lpin=$u_pincode+$km;
	
	
	 $s="SELECT * FROM rent WHERE( r_pincode BETWEEN $hpin AND $lpin)"; 
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
        $r_id=$row['r_id'];
          $rl_id=$row['rl_id'];
  $company=$row['r_company'];
  $mname=$row['r_mname'];
  $car=$row['r_car'];
  $year=$row['r_year'];
 $seat=$row['r_seat'];
  $pincode=$row['r_ppkm'];
  
	   



  
   // $city=$row['d_city'];
   // $state=$row['d_state']
 



                                ?>

      <div class="col-md-4 blog-grid" style="margin-top:30px; min-height: 500px;">
         <a href="images/<?php echo $car;?>" ><img src="images/<?php echo $car;?>" alt="" /></a>
         <h5></h5>
         
         <p><?php echo $company;?>&nbsp;&nbsp;&nbsp;<?php echo $mname;?>&nbsp;&nbsp;&nbsp;<?php echo $year;?></p>
         <p>seats : <?php echo $seat;?></p>
         <p>Rent per KM : <?php echo $pincode;?></p>
         <p>
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
     
          $rating+=$row11['rating'];
     }


if($rowcount>0)
{
   $vggg=  $rating / $rowcount ; 



switch ($vggg) {
  case "1":
    echo "*";
    break;
  case "2":
    echo "**";
    break;
  case "3":
    echo "***";
    break;
    case "4":
    echo "****";
    break;
  default:
    echo "*****";
}

 
}
else
{
  echo "0 ratings";
}
//echo @$vggg=  "$rating/$rowcount";
?>



         </p>
         <a href ="viewcarprofile.php?r_id=<?php echo $r_id; ?> ">
<button type ="button" class="btn btn-success"> view car</button>
         </a>
          <a href ="viewreviews.php?r_id=<?php echo $rl_id; ?> ">
<button type ="button" class="btn btn-success"> View Reviews</button>
         </a>
                                
                                    

      </div>
 <?php
} }
?>
      <div class="clearfix"></div>
      </div>
   </div>
</section>
<!-- //our blog -->
<?php

include 'footer.php';
?>
