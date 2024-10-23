<?php
//session_start();
 include("db_connect.php");
 if(isset($_GET['r_id']))
    {
        $dl_id=$_GET['r_id'];
        $query="DELETE FROM rent  WHERE r_id=$dl_id";
        $result=$con->query($query);
        if($result)
            {
                header('Location:viewurent.php');
            }
        }
?>
