<?php
 include('Connect.php');
 include('index_back.php');
 include_once('navbar_coor.html');

@$c_id = $_SESSION['c_id'] or die("SESSION Expired !! Login Again");
$query = mysqli_query($Connect, "SELECT * FROM `coordinator` WHERE `c_id`='$c_id'");
$row = mysqli_fetch_assoc($query);
  $F_name = $row['F_name'];
  $L_name = $row['L_name'];
  $dept = $row['dept'];
  $Full_name=" {$F_name} {$L_name} "; 
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="./css/profile.css">
 <title>Co-or Home</title>
</head>
<body>
<div id="biography" class="container">
<div >
  <h1 class="display-4">Hello , <?php echo $Full_name?> !!!</h1>
  <br><br>
  <div class="details">
  <h3> <b>Co-Ordinator ID : </b><?php echo $c_id?></h3>
  <br>
  <h3><b> Department : </b><?php echo $dept?> </h3>
  <br>
  </div>
  <a class="btn btn-primary btn-lg" href="div_select.php" role="button">View Projects</a>
</div>

</div>

    
  
</body>
</html>
