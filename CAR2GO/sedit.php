<?php
// session_start();
include 'db_connect.php';
include 'header.php';
//  if(isset($_SESSION['l_id']))
// {
//     $l_id=$_SESSION['l_id'];
    
// }
if(isset($_GET['ul_id']))
  {
    $ul_id=$_GET['ul_id'];
    //echo $sl_id;
    }

    $w="SELECT * FROM service_reg WHERE sl_id=$ul_id";
// var_dump($w);
        if(!$stmt=mysqli_query($con,$w))
        {
            die("prepare statement error1");
        }
        $result=mysqli_fetch_array($stmt);
if(isset($_POST['submit']))
{
   $name=$_POST['name'];
 

  $email=$_POST['email'];
  // $password=$_POST['password'];
  // $rc=$_FILES['rc']['name'];
  // $licence=$_FILES['licence']['name'];
   $pincode=$_POST['pincode'];
  $phone=$_POST['phone'];
  $address=$_POST['address'];
 
  $image=$_FILES['image']['name'];

  //$licence=$_FILES['licence']['u_name'];
   
  //edit
      if($image=="")
    {
        $image=$_POST['image1'];
    }
   $qu="UPDATE service_reg SET s_name='$name',s_email='$email',s_address='$address',s_pincode='$pincode',s_phone ='$phone',s_licence='$image' WHERE sl_id=$ul_id";
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
    window.location.replace('serviceprofile.php')
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
<center><div class="banner-form-agileinfo" style="width: 800px; height: 700px;">
                                    <h5>FILL OUT THE <span>DETAILS</span>?</h5>
                                    <!-- <p>Ut enim ad minima veniam, quis nostrum 
                                        exerc ullam corporis nisi ut aliqui</p> -->
                                    <form action="#" method="post" enctype="multipart/form-data">

                                        <input type="text" class="email" name="name" placeholder="Name" value="<?php echo $result['s_name'];?>" required="">

                                        <input type="text" class="tel" name="email" placeholder="email" required="" value="<?php echo $result['s_email'];?>">

                                <!--        <input type="text" class="tel" name="password" placeholder="password" required=""> -->
                                        <textarea name ="address"  cols ="3" rows ="3" placeholder="address"><?php echo $result['s_address'];?></textarea>

                                        <input type="text" class="email" name="pincode" placeholder="pincode" maxlength="6" minlength="6" required="" value="<?php echo $result['s_pincode'];?>">

                                        <input type="text" class="tel" name="phone" placeholder="phone no" pattern="[0-9]{10}" maxlength="10" minlength="10" required="" value="<?php echo $result['s_phone'];?>">

                                        <label for="img1" style=" color: white;">license</label>
                                        
                    <!-- <input type="file"  class="required form-control" placeholder="Image *" name="image" value=""> -->
                    <img width="20%" height="40%" src="images/<?php echo $result['s_licence'];?>">
          <input placeholder="Image" name="image" type="file"  value="<?php echo $result['s_licence'];?>">
                        <input type="hidden" name="image1" value="<?php echo $result['s_licence'];?>" >

               
                                        <input type="submit" class="hvr-shutter-in-vertical" value="Submit Again" name="submit">    
                                    </form>
                                </div></center>
<br><br><br>
<br><br><br>
<br><br><br>

                        
<?php
    include 'footer.php';
    ?>





 



