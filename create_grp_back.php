<?php 
    include('./Connect.php'); session_start();

    if(isset($_POST['add_member'])){
        echo $_SESSION['s_id'];
        echo $_POST['member_email'];
        echo'button works';
    }

?>