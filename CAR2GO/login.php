<?php 
session_start();
include('db_connect.php');
    include ('header.php');

if(isset($_POST['login']))
{
    
    $l_uname=$_POST['l_uname'];
    $l_password=$_POST['l_password'];
    $q="SELECT * FROM login where l_uname='$l_uname' and l_password='$l_password'";

    $eqr=mysqli_query($con,$q);
    $r=$eqr->fetch_assoc();
    if($r)
    {
        if($r['l_type']=="admin" and $r['l_approve']=="approve")
        {
        echo $l_id=$r['l_id'];
        echo $_SESSION['l_id']=$l_id;

       echo "<script>window.location.replace('adminprofile.php');</script>";
       }
       else if($r['l_type']=="user" and $r['l_approve']=="approve")
       {
        echo $l_id=$r['l_id'];
        echo $_SESSION['l_id']=$l_id;

        echo "<script>window.location.replace('userprofile.php');</script>";
       }
       else if($r['l_type']=="driver" and $r['l_approve']=="approve")
       {
        echo $l_id=$r['l_id'];
        echo $_SESSION['l_id']=$l_id;

        echo "<script>window.location.replace('driverprofile.php');</script>";
       }
        else if($r['l_type']=="service center" and $r['l_approve']=="approve")
       {
        echo $l_id=$r['l_id'];
        echo $_SESSION['l_id']=$l_id;

        echo "<script>window.location.replace('serviceprofile.php');</script>";
       }
     else if($r['l_type']=="employe" and $r['l_approve']=="approve")
       {
        echo $l_id=$r['l_id'];
        echo $_SESSION['l_id']=$l_id;

        echo "<script>window.location.replace('employee/empprofile.php');</script>";
       }
      
        
        
       else
       {
         $_SESSION['msg']="Please wait until admin approved!";
       }
    }
    else
    {
         $_SESSION['msg']="username and password mismatch!";
     
    }
}
    
?>

<br><br>
<center><div class="banner-form-agileinfo" style="width: 400px; height: 400px;">
<br>
<br><br>
			                            <form action="#" method="post">
										
										<input type="text" class="tel" name="l_uname" placeholder="email" required="">Password:<br>
										<input type="text" class="tel" name="l_password" placeholder="password" required="" ><br><br>
										<input type="submit" class="hvr-shutter-in-vertical" name="login" value="Login">
										<?php
            if(isset($_SESSION['msg']))
            {
                echo "<div class='alert alert_danger' style='background-color:skyblue';><front color='green'>".$_SESSION['msg']."</font></div>";
                unset($_SESSION['msg']);
            }
            ?>  	
								    </form>
								</div></center>
<br><br><br>
<br><br><br>


						
<?php
	include 'footer.php';
?>