<?php
 session_start();
include 'db_connect.php';
include 'uheader.php';
if(isset($_SESSION['l_id']))
{
    $l_id =$_SESSION['l_id'];
  //var_dump($l_id);
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

}
?>

<!-- our blog -->
<section class="blog" id="blog">
   <div class="container">
      <div class="heading">
         <h3>Available Service Centers</h3>
      </div>
      <div class="blog-grids">
        <form action="viewservicee1.php" method="POST">
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
	
	
	 $s="SELECT * FROM service_reg WHERE( s_pincode BETWEEN $hpin AND $lpin)"; 
//var_dump($s);
      if(!$stmt=mysqli_query($con,$s))
      {
        die("Preparestatment error2");
      }
      $d=array();
      while ($row=mysqli_fetch_array($stmt))
       {
        $d[]=$row;
        $sl_id=$row['sl_id'];
  $name =$row['s_name'];
  $phone=$row['s_phone'];
  $pin=$row['s_pincode'];
  $add=$row['s_address'];
  $lis=$row['s_licence'];
	   



  
   // $city=$row['d_city'];
   // $state=$row['d_state']
 

?>

  <div class="col-md-4 blog-grid" style="margin-top:30px;">
         <a href="images/<?php echo $lis;?>" ><img src="images/<?php echo $lis;?>" alt="" /></a>
         <h5></h5>
         
         <p>name:<?php echo $name;?></p>
         <p> address: <?php echo $add;?></p>
         <p> phone: <?php echo $phone;?></p>
         <p> pincode: <?php echo $pin;?></p>
         
         <a href ="viewserviceprofile.php?sl_id=<?php echo $sl_id; ?> ">
<button type ="button" class="btn btn-success"> view profile</button>
         </a>    


 <?php
}  }
?>
      <div class="clearfix"></div>
      </div>
   </div>
</section>
<!-- //our blog -->
<?php
include 'footer.php';
?>