<?php
//session_start();
 include("db_connect.php");
 if(isset($_GET['ul_id']))
    {
        $dl_id=$_GET['ul_id'];
        $query="DELETE s,n FROM driver_reg AS s INNER JOIN login AS n ON s.dl_id=n.l_id WHERE dl_id=$dl_id";
        $result=$con->query($query);
        if($result)
            {
                header('Location:login.php');
            }
        }
?>
