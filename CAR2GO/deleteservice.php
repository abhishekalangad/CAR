<?php
//session_start();
 include("db_connect.php");
 if(isset($_GET['se_id']))
    {
        $dl_id=$_GET['se_id'];
        $query="DELETE  FROM service_details WHERE se_id=$dl_id";
        $result=$con->query($query);
        if($result)
            {
                header('Location:viewsservice.php');
            }
        }
?>
