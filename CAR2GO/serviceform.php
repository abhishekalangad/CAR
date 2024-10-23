<?php
session_start();
include 'db_connect.php';

include 'sheader.php';

 if(isset($_SESSION['l_id']))
  {
      $l_id=$_SESSION['l_id'];
    
     }
if(isset($_POST['submit']))
{
  $se_name=$_POST['sename'];
  $se_details=$_POST['sedetails'];
  $se_price=$_POST['seprice'];
  

 
    $q="INSERT INTO `service_details` (`sel_id`,`se_name`, `se_details`, `se_price`) VALUES($l_id,'$se_name','$se_details','$se_price')";
   //var_dump($q,$b);
    //var_dump($q);
   //exit();
    if(mysqli_query($con,$q))

  {
    	 
      
       echo "<script>alert('Successfully Added....')</script>";

    // $_SESSION['msg']="Successfully Register";
    }
  }
  

?>
<br><br>
<center><div class="banner-form-agileinfo" style="width: 800px; height: 500px;">
									<h5>FILL OUT THE <span>DETAILS</span></h5><br>
									<!-- <p>Ut enim ad minima veniam, quis nostrum 
										exerc ullam corporis nisi ut aliqui</p> -->
									<form action="#" method="post" enctype="multipart/form-data">
										
                                        <input type="text" class="email" name="sename" placeholder=" Service name" required="">
										<textarea name ="sedetails"  cols ="3" rows ="3" placeholder="Details of Service"></textarea>
                                        <!--  <textarea type="text" style="color:white;" name="sedetails" placeholder="Details of Service" required="">
                                         </textarea>  -->
										
                                        
                                         <input type="text" class="tel" name="seprice" placeholder="Cost of service" required="">
										
                                       .
                                        
										
   



										<input type="submit" class="hvr-shutter-in-vertical" value="Submit" name="submit">  	
									</form>
								</div></center>
<br><br><br>
<br><br><br>
<br><br><br>

						
<?php
	include 'footer.php';
	?>

  