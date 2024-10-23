<?php
// session_start();
include 'db_connect.php';
include 'uheader.php';
//  if(isset($_SESSION['l_id']))
// {
//     $l_id=$_SESSION['l_id'];
    
// }
if(isset($_GET['r_id']))
  {
    $ul_id=$_GET['r_id'];
    //echo $sl_id;
    }

    $w="SELECT * FROM rent WHERE r_id=$ul_id";
  //var_dump($w);
        if(!$stmt=mysqli_query($con,$w))
        {
            die("prepare statement error1");
        }
        $result=mysqli_fetch_array($stmt);
if(isset($_POST['submit']))
{
   $company=$_POST['company'];
   $mname=$_POST['mname'];
   $cost=$_POST['cost'];
   $addinfo=$_POST['addinfo'];
   $acchistory=$_POST['acchistory'];
   $custatus=$_POST['custatus'];
  // $email=$_POST['email'];
  // // $password=$_POST['password'];
  // // $rc=$_FILES['rc']['name'];
  // // $licence=$_FILES['licence']['name'];
  //  $pincode=$_POST['pincode'];
  // $phone=$_POST['phone'];
  // $address=$_POST['address'];
 
  $image=$_FILES['image']['name'];
  
  //$licence=$_FILES['licence']['u_name'];
   
  //edit
      if($image=="")
    {
        $image=$_POST['image1'];
    }
   echo $qu="UPDATE rent SET r_company='$company',r_mname='$mname',r_ppkm='$cost',r_addinfo='$addinfo',r_acchistory ='$acchistory',r_custatus ='$custatus',r_car='$image', r_tax='$image' , r_insurance='$image', r_polution='$image' WHERE r_id=$ul_id";
  //var_dump($qu);
    $result1=$con->query($qu);
  if($result1)
  {
    //echo "<script>window.location.replace('viewsubjecten.php');</script>";
    $image="images/";
    $image=$image.basename($_FILES['image']['name']);
    if(move_uploaded_file( $_FILES['image']['tmp_name'],$image))
    {
        echo "file upload";
        
    }
    //$_SESSION['msg']="Successfully Updated";
    else
    {
        echo "error to upload file";
    }
     echo "<script>
    window.location.replace('viewurent.php')
    </script>";  

    
       
       //$_SESSION['msg']="Successfully Updated....";
    }

  // if(mysqli_query($con,$qu))
  // {
    
  //    echo "<script>
  //   window.location.replace('userprofile.php')
  //   </script>";  

  //   }
  }

?>
<br><br>
<center><div class="banner-form-agileinfo" style="width: 800px; height: 1000px;">
									<h5>Fill the <span>Details</span></h5><br>
									<!-- <p>Ut enim ad minima veniam, quis nostrum 
										exerc ullam corporis nisi ut aliqui</p> -->
									<form action="" method="post" enctype="multipart/form-data">

										<input type="text" class="email" name="company" placeholder=" Company Name" value="<?php echo $result['r_company'];?>" required="">
										<input type="text" class="tel" name="mname" placeholder="Model" required="" value="<?php echo $result['r_mname'];?>">
                                        <input type="text" class="tel" name="cost" placeholder="cost per KM" required="" value="<?php echo $result['r_ppkm'];?>">
								<!-- 		<input type="text" class="tel" name="password" placeholder="password" required=""> -->
										<textarea name ="addinfo"  cols ="3" rows ="3" placeholder="Additional information"><?php echo $result['r_addinfo'];?></textarea>
                                        <textarea name ="custatus"  cols ="3" rows ="3" placeholder="Current Status"><?php echo $result['r_custatus'];?></textarea>
                                         <textarea name ="acchistory"  cols ="3" rows ="3" placeholder="Accident history"><?php echo $result['r_acchistory'];?></textarea>
									<DIV style="width: 100%;height: 300px;
                                    float: left; "><DIV style ="width:50%; height: 300px; float: left; "><img width="100%" height="100%" src="images/<?php echo $result['r_car'];?>"></DIV>
<DIV style ="width:50%; height: 300px; float: left; ">
<div style="height:150px; width:84%; float: left;margin-top:36%;margin-left: 5%;">

    <input placeholder="Image" name="image" type="file"  value="<?php echo $result['r_car'];?>">
                        

                        <input type="hidden" name="image1" value="<?php echo $result['r_car'];?>" >
</div>
                    </DIV>
                     </DIV>	
										
										
                    <!-- <input type="file"  class="required form-control" placeholder="Image *" name="image" value=""> -->
                   
          

     
 
               
										<input type="submit" class="hvr-shutter-in-vertical" value="submit" name="submit">  	
									</form>
								</div></center>
<br><br><br>
<br><br><br>
<br><br><br>

						
<?php
	include 'footer.php';
	?>
