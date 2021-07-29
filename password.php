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


?>