<?php
 include('Connect.php');
 include('index_back.php');
 include_once('navbar1.html');

@$c_id = $_SESSION['c_id'] or die("SESSION Expired !! Login Again");
$query = mysqli_query($Connect, "SELECT * FROM `coordinator` WHERE `c_id`='$c_id'");
$row = mysqli_fetch_assoc($query);
  $F_name = $row['F_name'];
  $L_name = $row['L_name'];
  $Full_name=" {$F_name} {$L_name} "; 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/navbar1.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Akaya+Kanadaka&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="your_website_domain/css_root/flaticon.css">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <title>Skeleton</title>
</head>
<body>
<div class="jumbotron jumbotron-fluid">
  <h1 class="display-4">Hello , <?php echo $Full_name?> !!!</h1>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="div_select.php" role="button">View Projects</a>
  </p>
</div>
</body>
</html>
