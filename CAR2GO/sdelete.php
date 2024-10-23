<?php
//session_start();
 include("db_connect.php");
 if(isset($_GET['ul_id']))
    {
        $dl_id=$_GET['ul_id'];
        $query="DELETE s,n FROM service_reg AS s INNER JOIN login AS n ON s.sl_id=n.l_id WHERE sl_id=$dl_id ";
        var_dump($query);
        $result=$con->query($query);
        if($result)
            {
                header('Location:login.php');
            }
        }
?>
