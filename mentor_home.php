<?php
 include('Connect.php');
 include('index_back.php');
 include_once('navbar_mentor.html');

@$m_id = $_SESSION['m_id'] or die("SESSION Expired !! Login Again");
$query = mysqli_query($Connect, "SELECT * FROM `mentor` WHERE `m_id`='$m_id'");
$row = mysqli_fetch_assoc($query);
  $F_name = $row['F_name'];
  $L_name = $row['L_name'];
  $Full_name=" {$F_name} {$L_name} "; 
?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="css/navbar1.css">
  <link rel="stylesheet" href="css/coor_home.css">
 <title>Co-or Home</title>
</head>
<body>
<div class="flex">
  <h1 class="display-4">Hello , <?php echo $Full_name?> !!!</h1>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="div_select.php" role="button">View Projects</a>
  </p>
</div>
</body>
</html>
