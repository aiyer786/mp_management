<?php

if(isset($_POST["submit-signup"]))
// if($_SERVER['REQUEST_METHOD']==='POST')
{
    
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "medical";

$connect=mysqli_connect("localhost","root","","medical") or die("Unable to connect to database");

$email=$_POST['email'];
$password=$_POST['password'];

$query="SELECT * FROM `users` WHERE `EMAIL_ID`='$email' ";

$res_user=mysqli_query($connect,$query);
if($res_user)
{
	//echo "sucess";
}
else
{
	echo mysqli_error($connect);
}
if(mysqli_num_rows($res_user)>0)
{
  echo '<div class="alert alert-danger" style="text-align:center;">E-mail ID already exists</div>';
}

else{
    
    $query="INSERT INTO medical.users(`EMAIL_ID`,`Password`)VALUES('$email','$password')";
    $check = mysqli_query($connect,$query);
    /*if($check)
    	echo $check;
    else
    	echo mysqli_error($connect)."<br>";*/

    $query="SELECT `SR_NO` FROM `users` WHERE `EMAIL_ID`='$email' ";
    $res_user=mysqli_query($connect,$query);
   /* if ($res_user)
    	echo $query;
    else
    	echo mysqli_error($connect);*/
    while($row=$res_user->fetch_assoc())
    {
      $sr_no="{$row['SR_NO']}";
    }
    //echo $sr_no;
    $sr_no=substr(str_repeat(0,6).$sr_no,-6);
    $id="DY{$sr_no}";
    $query="UPDATE `users` SET `ID` = '$id' WHERE `users`.`EMAIL_ID` = '$email'";
    $res_user=mysqli_query($connect,$query);
    if($res_user=mysqli_query($connect,$query)){
      echo '<div class="alert alert-danger" style="text-align:center;">Your Unique ID is '.$id.'.</div>';
    }
    $query1[1]="INSERT INTO medical.bds_document(`EMAIL_ID`,`ID`)VALUES('$email','$id')";
    $query1[2]="INSERT INTO medical.college_bds(`EMAIL_ID`,`ID`)VALUES('$email','$id')";
    $query1[3]="INSERT INTO medical.college_fellowship(`EMAIL_ID`,`ID`)VALUES('$email','$id')";
    $query1[4]="INSERT INTO medical.college_mds(`EMAIL_ID`,`ID`)VALUES('$email','$id')";
    $query1[5]="INSERT INTO medical.college_phd(`EMAIL_ID`,`ID`)VALUES('$email','$id')";
    $query1[6]="INSERT INTO medical.contact_details(`EMAIL_ID`,`ID`)VALUES('$email','$id')";
    $query1[7]="INSERT INTO medical.mds_document(`EMAIL_ID`,`ID`)VALUES('$email','$id')";
    $query1[8]="INSERT INTO medical.scholarship(`EMAIL_ID`,`ID`)VALUES('$email','$id')";
    $query1[9]="INSERT INTO medical.student_details(`EMAIL_ID`,`ID`)VALUES('$email','$id')";
    $query1[10]="INSERT INTO medical.progress_student(`EMAIL_ID`,`ID`)VALUES('$email','$id')";
    $query1[11]="INSERT INTO medical.submit_status(`APPLICATION_ID`)VALUES('$id')";

    // $query1[11]="INSERT INTO medical.academic_achievements(`EMAIL_ID`,`ID`)VALUES('$email','$id')";
    // $query1[12]="INSERT INTO medical.student_details(`EMAIL_ID`,`ID`)VALUES('$email','$id')";


    for($i=1;$i<12;$i++)
    {

        $parse_query=mysqli_query($connect,$query1[$i]);
    if($parse_query)
    {
    echo "suceess";
    }
	else
	echo mysqli_error($connect);
    }
    mkdir("../MEDICAL/$id");
    }


}

 header("Location:frontt.php?ID=$id");

  ?>
