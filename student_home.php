<?php 
include('Connect.php');
include('index_back.php');
include('navbar_student.html');
@$s_id = $_SESSION['s_id'] or die("SESSION Expired !! Login Again");
$query = mysqli_query($Connect, "SELECT * FROM `student` WHERE `s_id`='$s_id'");
$row = mysqli_fetch_assoc($query);
  $F_name = $row['F_name'];
  $L_name = $row['L_name'];
  $Full_name=" {$F_name} {$L_name} "; 
  $roll_no = $row['roll_no'];
  $dept = $row['dept'];
  $year = $row['year'];
  $div = $row['division'];
  $batch = $row['batch'];
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/profile.css">
   </head>
<body>
<div id="biography" class="container">
<div >
  <h1 class="display-4">Hello , <?php echo $Full_name?> !!!</h1>
  <br><br>
  <div class="details">
  <h3> <b>Student ID : </b><?php echo $s_id?></h3>
  <br>
  <h3><b>Roll No : </b><?php echo $roll_no?></h3>
  <br>
  <h3><b> Department : </b><?php echo $dept?> </h3>
  <br>
  <h3> <b>Year : </b><?php echo $year?></h3>
  <br>
  <h3> <b>Division : </b> <?php echo $div?></h3>
  <br>
  <h3> <b>Batch : </b><?php echo $batch?></h3>
  <br>
  </div>
</div>
  <script src="js/student.js"></script>
  
</body>
</html>