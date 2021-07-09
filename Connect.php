<?php

$host = 'localhost';
$user = 'root';
$password = '';
$db = 'mp_management';

$Connect = mysqli_connect($host,$user,$password,$db); 
if($Connect-> connect_error){
 echo"connect error";
}
else{
    echo"connected";
}


?>