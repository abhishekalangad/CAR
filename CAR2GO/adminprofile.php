<?php
include 'db_connect.php';
include 'aheader.php';
if(isset($_SESSION['l_id']))
{
  $l_id =$_SESSION['l_id'];


}
?>
<HTML><BODY>
<div class="Servicebottom">
	<div class="layer">
	<div class="col-md-5">
	</div>
	<div class="col-md-7 Servicebottomtext">
		<h3>Fast and Safe Service</h3>
		<h3>Premium Cars</h3>
		<h3>Car Services </h3>
		<h4><i class="fa fa-taxi" aria-hidden="true"></i>International Quality Service</h4>
		<h4><i class="fa fa-car" aria-hidden="true"></i>Verified Drivers</h4>
	</div>
	<div class="clearfix"></div>
	</div>
</div>
<?php

include 'footer.php';
?>