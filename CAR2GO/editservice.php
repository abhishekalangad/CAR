<?php
// session_start();
include 'db_connect.php';
include 'sheader.php';
//  if(isset($_SESSION['l_id']))
// {
//     $l_id=$_SESSION['l_id'];
    
// }
if(isset($_GET['se_id']))
  {
    $dl_id=$_GET['se_id'];
    //echo $sl_id;
    }

    $w="SELECT * FROM service_details WHERE se_id=$dl_id";
// var_dump($w);
        if(!$stmt=mysqli_query($con,$w))
        {
            die("prepare statement error1");
        }
        $result=mysqli_fetch_array($stmt);
if(isset($_POST['submit']))
{
   $name=$_POST['name'];
 

  
  // $password=$_POST['password'];
  // $rc=$_FILES['rc']['name'];
  // $licence=$_FILES['licence']['name'];
   $details=$_POST['details'];
   $price=$_POST['price'];
  

  //$licence=$_FILES['licence']['u_name'];
   
 
   $qu="UPDATE service_details SET se_name='$name',se_details='$details',se_price='$price' WHERE se_id=$dl_id";
  var_dump($qu);
    $result1=$con->query($qu);
  if($result1)
  {
  
     echo "<script>
    window.location.replace('viewsservice.php')
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
<center><div class="banner-form-agileinfo" style="width: 800px; height: 500px;">
                                    <h5>Need To <span>Change?</span>?</h5>
                                    <p>You Can Edit Your Services  Here</p>
                                    <form action="#" method="post" enctype="multipart/form-data">

                                        <input type="text" class="email" name="name" placeholder=" Service Name" value="<?php echo $result['se_name'];?>" required="">

                                        <!-- <input type="text" class="tel" name="details" placeholder="Details" required="" value="<?php echo $result['d_email'];?>">
 -->
                                <!--        <input type="text" class="tel" name="password" placeholder="password" required=""> -->
                                        <textarea name ="details"  cols ="3" rows ="3" placeholder="Service Details" ><?php echo $result['se_details'];?></textarea>

                                        <input type="text" class="email" name="price" placeholder="price"  required="" value="<?php echo $result['se_price'];?>">

                                       <!--  <label for="img1" style=" color: white;">license</label>
                                         -->
                    <!-- <input type="file"  class="required form-control" placeholder="Image *" name="image" value=""> -->
                    <!-- <img width="20%" height="40%" src="images/<?php echo $result['d_licence'];?>">
          <input placeholder="Image" name="image" type="file"  value="<?php echo $result['d_licence'];?>">
                        <input type="hidden" name="image1" value="<?php echo $result['d_licence'];?>" > -->

               
                                        <input type="submit" class="hvr-shutter-in-vertical" value="Submit Again" name="submit">    
                                    </form>
                                </div></center>
<br><br><br>
<br><br><br>
<br><br><br>

                        
<?php
    include 'footer.php';
    ?>




