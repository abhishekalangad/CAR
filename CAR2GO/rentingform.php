<?php
session_start();
include 'db_connect.php';

include 'uheader.php';

 if(isset($_SESSION['l_id']))
  {
      $l_id=$_SESSION['l_id'];
    
     }
if(isset($_POST['submit']))
{
  $company=$_POST['company'];
  $year=$_POST['year'];
  $mname=$_POST['mname'];
  $number=$_POST['number'];
  $addinfo=$_POST['addinfo'];
  $custatus=$_POST['custatus'];
  $acchistory=$_POST['acchistory'];
  $ppkm =$_POST['ppkm'];
  $car=$_FILES['car']['name'];
  $tax=$_FILES['tax']['name'];
  $insurance=$_FILES['insurance']['name'];
  $polution=$_FILES['polution']['name'];
  $rseat =$_POST['rseat'];    
  $pincode =$_POST['pincode'];
  $phone =$_POST['phone'];
	$approve='not approve';
	$rent_amt=$_POST['rent'];
 
      $q="INSERT INTO `rent`( `rl_id`, `r_company`, `r_mname`, `r_year`, `r_number`, `r_addinfo`, `r_custatus`, `r_acchistory`, `r_car`, `r_tax`, `r_insurance`, `r_polution`, `r_ppkm`, `r_status`, `r_seat`, `r_pincode`, `r_phone`,`rent_amt`) VALUES ('$l_id','$company','$mname','$year','$number','$addinfo','$custatus','$acchistory','$car','$tax','$insurance','$polution','$ppkm','$approve','$rseat','$pincode','$phone','$rent_amt')";
   //var_dump($q,$b);
   // var_dump($q);
   //exit();
    if(mysqli_query($con,$q))

  {
	  $s="UPDATE `login` SET `l_approve`=$approve WHERE l_id=$l_id";
	  mysqli_query($con,$s);
    	 $car="images/";
    $car=$car.basename($_FILES['car']['name']);
    if(move_uploaded_file( $_FILES['car']['tmp_name'],$car))
    {
        // echo "file upload";
        
    }
    //
    else
    {
        // echo "error to upload file";
    }
      $tax="images/";
    $tax=$tax.basename($_FILES['tax']['name']);
    if(move_uploaded_file( $_FILES['tax']['tmp_name'],$tax))
    {
        // echo "file upload";
        
    }
    //
    else
    {
        // echo "error to upload file";
    }
$insurance="images/";
    $insurance=$insurance.basename($_FILES['insurance']['name']);
    if(move_uploaded_file( $_FILES['insurance']['tmp_name'],$insurance))
    {
        // echo "file upload";
        
    }
    //
    else
    {
        // echo "error to upload file";
    }
     $polution="images/";
    $polution=$polution.basename($_FILES['polution']['name']);
    if(move_uploaded_file( $_FILES['polution']['tmp_name'],$polution))
    {
        // echo "file upload";
        
    }
    //
    else
    {
        // echo "error to upload file";
    } 
       echo "<script>alert('Successfully Added... waiting for varification')</script>";

    // $_SESSION['msg']="Successfully Register";
    }
  }
  

?>
<br><br>
<center><div class="banner-form-agileinfo" style="width: 800px; height: 1300px;">
									<h5>Fill this <span>Form</span></h5>
									<p>join to our huge collection</p>
									<form action="#" method="post" enctype="multipart/form-data">
										
                                        <input type="text" class="email" name="company" placeholder=" Company name" required="">

                                        <input type="text" class="email" name="mname" placeholder=" model " required="">
										
                                        <input type="text" class="tel" name="year" placeholder="Model Year" required="">
										
                                        <input type="text" class="tel" name="number" placeholder="Number(XX-00-0000)" required="">

                                         <input type="text" class="tel" name="ppkm" placeholder="Rent per KM" required="">
										                    
                                         <input type="text" class="tel" name="rseat" placeholder="number of seats" required="">
                                         <input type="text" class="tel" name="rent" placeholder="Per day rent" required="">

                                         <input type="text" class="email" name="pincode" placeholder="pincode" 
                                         maxlength="6" minlength="6" required="">

                                         <input type="text" class="email" name="phone" placeholder="phone" 
                                         maxlength="10" minlength="10" required="">
                    

                                        <textarea name ="addinfo"  cols ="3" rows ="3" placeholder="Additional Information"></textarea>

                                         <textarea name ="custatus"  cols ="3" rows ="3" placeholder="Current Status"></textarea>
                                        
										 <textarea name ="acchistory"  cols ="3" rows ="3" placeholder="Accident History"></textarea>
                                        
										
    <label style=" color: white;">Current photo</label>
                                        <input placeholder="Current photo" type="file" name="car"  style="border: none;
    width: 100%;
    background: rgba(0, 0, 0, 0.5);
    padding: 10px 15px;
    margin-bottom: 15px;
    outline: none;
    font-size: 14px;
    color: #fff;
    letter-spacing: 1px;">

										<label for="img1" style=" color: white;">RC Book</label>
										<input  type="file" id="img1" name="tax"  placeholder="Copy of Tax"  style="border: none;
    width: 100%;
    background: rgba(0, 0, 0, 0.5);
    padding: 10px 15px;
    margin-bottom: 15px;
    outline: none;
    font-size: 14px;
    color: #fff;
    letter-spacing: 1px;">
    <label style=" color: white;">Insurance</label>
										<input placeholder="Copy of insurance" type="file" name="insurance"  style="border: none;
    width: 100%;
    background: rgba(0, 0, 0, 0.5);
    padding: 10px 15px;
    margin-bottom: 15px;
    outline: none;
    font-size: 14px;
    color: #fff;
    letter-spacing: 1px;">
    <label for="img1" style=" color: white;">Polution Certificate</label>
                                        <input  type="file" id="img1" name="polution" placeholder="copy of Polution Certificate"   style="border: none;
    width: 100%;
    background: rgba(0, 0, 0, 0.5);
    padding: 10px 15px;
    margin-bottom: 15px;
    outline: none;
    font-size: 14px;
    color: #fff;
    letter-spacing: 1px;">



										<input type="submit" class="hvr-shutter-in-vertical" value="Submit" name="submit">  	
									</form>
								</div></center>
<br><br><br>
<br><br><br>
<br><br><br>

						
<?php
	include 'footer.php';
	?>

