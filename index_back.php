<?php 
    include('./Connect.php'); session_start();

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $login_type = $_POST['login_type'];
        // $student = $_POST['student'];
        // $hod = $_POST['hod'];
        // $mentor = $_POST['mentor'];
        // $co_or = $_POST['co_or'];

        if ($login_type=='student') {
            $query = " SELECT * FROM `student` WHERE `email` = '$email' ";
            $res = mysqli_query($Connect, $query);
            $data = mysqli_fetch_assoc($res);
            if (strcmp($data['password'], $password)==0) {
                $_SESSION['email']=$data['email'];
                $_SESSION['password']  =  $data['password'];   
                $s_id=$data['s_id']; 
                $_SESSION['s_id']  = $data['s_id'];
                $_SESSION['division']   = $data['division']   ;    
                echo("<script>window.location = 'student_home.php?s_id=$s_id'</script>");
            } 
            else {
               echo("<script>alert('Wrong Email or Password!!')</script>");
               echo("<script>window.location = 'index.php'</script>");
            }
        }
        
        elseif($login_type=='mentor'){
            echo'I am ';
            $query = " SELECT * FROM `mentor` WHERE `email` = '$email' ";
            $res = mysqli_query($Connect, $query);
            $data = mysqli_fetch_assoc($res);
            if (strcmp($data['password'], $password)==0) {
                $_SESSION['email']=$data['email'];
                $_SESSION['password']  =  $data['password'];                
                echo $data['F_name'].$data['M_name'].$data['L_name'];
               

            } 
            else {
                echo'wrong password';
            }

        }
        elseif($login_type=='hod'){
            echo'I am ';
            $query = " SELECT * FROM `hod` WHERE `email` = '$email' ";
            $res = mysqli_query($Connect, $query);
            $data = mysqli_fetch_assoc($res);
            if (strcmp($data['password'], $password)==0) {
                $_SESSION['email']=$data['email'];
                $_SESSION['password']  =  $data['password'];                
                echo $data['F_name'].$data['M_name'].$data['L_name'];
            } 
            else {
                echo'wrong password';
            }
        }
        elseif($login_type=='co_or'){
            $query = " SELECT * FROM `coordinator` WHERE `email` = '$email' ";
            $res = mysqli_query($Connect, $query);
            $data = mysqli_fetch_assoc($res);
            if (strcmp($data['password'], $password)==0) {
                $_SESSION['email']=$data['email'];
                $_SESSION['password']  =  $data['password'];                
                echo("<script>window.location = 'div_select.php'</script>");
            } 
            else {
                echo'wrong password';
            }
        }
        else{
            echo'error';
        }
    }

?>
