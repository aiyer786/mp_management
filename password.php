<?php
include('Connect.php');

$hash = password_hash("dypatil123", PASSWORD_DEFAULT);
$pw = "dypatil123";
// echo $hash ;
// echo '<br>';
//  echo password_hash("dypatil123", PASSWORD_BCRYPT);
//  echo '<br>';
if(password_verify($pw , $hash))
{
    echo "Matches";
}
else{
    echo "doesn't match";
}

$query = " SELECT * FROM `student` WHERE `email` = '$email' ";
            $res = mysqli_query($Connect, $query);
            $data = mysqli_fetch_assoc($res);
            echo $data['password'];
            echo '123';
?>