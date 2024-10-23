<?php
session_start();
include 'db_connect.php';
include 'uheader.php';
if(isset($_SESSION['l_id']))
{
  echo $l_id =$_SESSION['l_id'];
  //var_dump($l_id);

 $rid=$_GET['r_id'];
}

if(isset($_POST['rating']))
{
echo $rating=$_POST['rev'];
echo $rid=$_POST['rid'];

echo $star=$_POST['rate'];


  $b="INSERT INTO `rating`( `rating`, `review`, `l_id`, `ur_id`) VALUES ('$star','$rating','$l_id','$rid')";
  

  if($con->query($b))
  {
  	echo "<script>window.location.replace('urenthis.php');</script>";
  }
}

?>

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


<!-- our blog -->
<section class="blog" id="blog">
   <div class="container">
      <div class="heading">
         <h3>Rent bookings</h3>
      </div>
      <div class="blog-grids">
      
  
 <?php



  $s1="SELECT * FROM rent WHERE r_id=$rid";
		   $stmt1=mysqli_query($con,$s1);
		    while ($row1=mysqli_fetch_array($stmt1))
       {
		     $ramt=$row1['rent_amt'];
          $r_id=$row1['r_id'];
	   }
 
  
   // $city=$row['d_city'];
   // $state=$row['d_state']
 

                                ?>

      <div class="col-md-4 blog-grid" style="margin-top:30px; ">
         
         <h5></h5>
         
        <!--  <p><?php echo $company;" "?><?php echo $mname;" "?><?php echo $year;" "?></p> -->
         
         
          <form action="rating.php" method="POST">
            
        <p>  <div class="rate">
            

    <input type="radio" id="star5" name="rate" value="5" />
    <label for="star5" title="text">5 stars</label>
    <input type="radio" id="star4" name="rate" value="4" />
    <label for="star4" title="text">4 stars</label>
    <input type="radio" id="star3" name="rate" value="3" />
    <label for="star3" title="text">3 stars</label>
    <input type="radio" id="star2" name="rate" value="2" />
    <label for="star2" title="text">2 stars</label>
    <input type="radio" id="star1" name="rate" value="1" />
    <label for="star1" title="text">1 star</label>


  </div></p>
  <br>
     <p> <input type="text" name="rev"></p>
    <p> <input type="hidden" name="rid" value="<?php echo $r_id; ?>"></p>
     <p> <input type="submit" name="rating" value="Rating"></p>
    </form>
        
         <p></p>

        
                                
                                    

		  </div>   

    </div> 
      <div class="clearfix"></div>
      </div>
   </div>
</section>
<!-- //our blog -->
<?php

include 'footer.php';
?>
