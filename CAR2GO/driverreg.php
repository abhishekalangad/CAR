<?php
// session_start();
include 'db_connect.php';
include 'header.php';
//  if(isset($_SESSION['l_id']))
// {
//     $l_id=$_SESSION['l_id'];
    
// }
if(isset($_POST['submit']))
{
  $name=$_POST['name'];
 

  $email=$_POST['email'];
  $password=$_POST['password'];
  $rc=$_FILES['rc']['name'];
  $licence=$_FILES['licence']['name'];
   $pincode=$_POST['pincode'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
  $type='driver';
	$d_amt=$_POST['d_amt'];

  $approve='not approve';

  $b="INSERT INTO `login`( `l_uname`, `l_password`, `l_type`, `l_approve`)VALUES('$email','$password','$type','$approve')";
  //var_dump($b);

  if($con->query($b))

  {
    $id=mysqli_insert_id($con);
   // echo $id;
    $q="INSERT INTO `driver_reg`(`dl_id`, `d_name`, `d_email`, `d_password`, `d_address`, `d_pincode`, `d_phone`, `d_licence`, `d_proof`,`d_amount`)VALUES($id,'$name','$email','$password','$address','$pincode','$phone','$licence','$rc','$d_amt')";
   //var_dump($q,$b);
    //var_dump($q);
   //exit();
    if(mysqli_query($con,$q))

  {
    	 $rc="images/";
    $rc=$rc.basename($_FILES['rc']['name']);
    if(move_uploaded_file( $_FILES['rc']['tmp_name'],$rc))
    {
        echo "file upload";
        
    }
    //
    else
    {
        echo "error to upload file";
    }
       $licence="images/";
    $licence=$licence.basename($_FILES['licence']['name']);
    if(move_uploaded_file( $_FILES['licence']['tmp_name'],$licence))
    {
        echo "file upload";
        
    }
    //
    else
    {
        echo "error to upload file";
    }
       echo "<script>alert('Successfully Added....')</script>";

    // $_SESSION['msg']="Successfully Register";
    }
  }
  }

?>
<br><br>
<center><div class="banner-form-agileinfo" style="width: 800px; height: 800px;">
									<h5>Fill Out The <span>Details</span></h5><br><br>
									<!-- <p>Ut enim ad minima veniam, quis nostrum 
										exerc ullam corporis nisi ut aliqui</p> -->
									<form action="#" method="post" enctype="multipart/form-data">
										<input type="text" class="email" name="name" placeholder="Name" required="">
										<input type="text" class="tel" name="email" placeholder="email" required="">
										<input type="text" class="tel" name="password" placeholder="password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 and maximum 15 characters" placeholder="password" required="">
										<input type="text" class="tel" name="d_amt" placeholder="Per day amount" required="">
										<textarea name ="address"  cols ="3" rows ="3" placeholder="address"></textarea>
										<input type="text" class="email" name="pincode" placeholder="pincode" pattern="[0-9]{6}" pattern="[0-9]{6}" required="">
										<input type="text" class="tel" name="phone" placeholder="phone no" pattern="[0-9]{10}" maxlength="10" minlength="10" required="">
										<label for="img1" style=" color: white;">Driving Licence</label>
										<input  type="file" id="img1" name="licence"  style="border: none;
    width: 100%;
    background: rgba(0, 0, 0, 0.5);
    padding: 10px 15px;
    margin-bottom: 15px;
    outline: none;
    font-size: 14px;
    color: #fff;
    letter-spacing: 1px;">
    <label style=" color: white;">Photo proof</label>
										<input placeholder="hii" type="file" name="rc"  style="border: none;
    width: 100%;
    background: rgba(0, 0, 0, 0.5);
    padding: 10px 15px;
    margin-bottom: 15px;
    outline: none;
    font-size: 14px;
    color: #fff;
    letter-spacing: 1px;"><br>
										<input type="submit" class="hvr-shutter-in-vertical" value="Get started" name="submit">  	
									</form>
								</div></center>
<br><br><br>
<br><br><br>
<br><br><br>

						
<?php
	include 'footer.php';
	?>