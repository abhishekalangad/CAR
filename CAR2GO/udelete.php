<?php
//session_start();
 include("db_connect.php");
 if(isset($_GET['ul_id']))
    {
        $dl_id=$_GET['ul_id'];
        $query="DELETE s,n FROM user_reg AS s INNER JOIN login AS n ON s.ul_id=n.l_id WHERE ul_id=$dl_id ";
        var_dump($query);
        $result=$con->query($query);
        if($result)
            {
                header('Location:login.php');
            }
        }
?>
