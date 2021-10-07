<?php
 include('Connect.php');
 include('index_back.php');
 include_once('navbar_mentor.html');

@$m_id = $_SESSION['m_id'] or die("SESSION Expired !! Login Again");
$query = mysqli_query($Connect, "SELECT * FROM `mentor` WHERE `m_id`='$m_id'");
$row = mysqli_fetch_assoc($query);
  $F_name = $row['F_name'];
  $L_name = $row['L_name'];
  $dept = $_SESSION['dept'];
  $Full_name=" {$F_name} {$L_name} ";
  $query1 = mysqli_query($Connect, "SELECT * FROM `projects` WHERE `mentor`='$m_id'");
  $rowcount = mysqli_num_rows($query1);
?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="css/navbar1.css">
  <link rel="stylesheet" href="css/profile.css">
 <title>Co-or Home</title>
</head>
<body>
<div id="biography" class="container">
<div >
  <h1 class="display-4">Hello , <?php echo $Full_name?> !!!</h1>
  <br><br>
  <div class="details">
  <h3> <b>Mentor ID : </b><?php echo $m_id?></h3>
  <br>
  <h3><b> Department : </b><?php echo $dept?> </h3>
  <br>
  <h3><b> Groups Assigned Count  : </b><?php echo $rowcount?> </h3>
  <br>
  </div>
  <a class="btn btn-primary btn-lg" href="div_select.php" role="button">View Projects</a>
</div>

</div>
</body>
</html>
