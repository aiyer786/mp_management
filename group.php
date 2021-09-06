<?php 
include('Connect.php');
include('index_back.php');
require_once('navbar_coor.html');
$division = $_GET['division']
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="css/group.css">
        <link rel="stylesheet" href="css/navbar1.css">


        <title>landing page</title>
    </head>
    <body>
    


        <!--===== HEADER =====-->
        <!-- <header class="l-header">
            <nav class="nav bd-grid">
                <div>
                    <a href="#" class="nav__logo">Coffee</a>
                </div>
                
                <div class="nav__toggle" id="nav-toggle">
                    <i class='bx bx-menu'></i>
                </div>
                <div class="nav__menu" id="nav-menu">
                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x'></i>
                    </div>
                    <ul class="nav__list">
                        <li class="nav__item"><a href="#home" class="nav__link active">Home</a></li>
                        <li class="nav__item"><a href="#about" class="nav__link">About</a></li>
                        <li class="nav__item"><a href="#skills" class="nav__link">Blog</a></li>
                        <li class="nav__item"><a href="#contact" class="nav__link">Contact</a></li>
                    </ul>
                </div>
            </nav>
        </header> -->

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <div class="home__img">
                        <img src="images/group.jpg" alt="" data-speed="-2" class="move">
                        <!-- <img src="assets/img/img2.png" alt="" data-speed="2" class="move">
                        <img src="assets/img/img3.png" alt="" data-speed="2" class="move">
                        <img src="assets/img/img4.png" alt="" data-speed="-2" class="move">
                        <img src="assets/img/img5.png" alt="" data-speed="-2" class="move">
                        <img src="assets/img/img6.png" alt="" data-speed="2" class="move"> -->
                    </div>

                    <div class="home__data">
                         <h1 class="home__title">To Proceed,</h1> 
                        <p class="home__description">Select Group from Below:</p>
                        

  


<!--surround the select box with a "custom-select" DIV element. Remember to set the width:-->
<div class="custom-select">

                   
<form method = "post">
                <select class="dropbtn" name="leader_name">
                    <option style='background-color:#3c3f44'  value="student"><b>Select Group</option>
                    <?php      
                    $i=1;      
                    $res1 = mysqli_query($Connect, " SELECT * FROM `groups` WHERE `division` = '$division' AND `leader` = '1'  ");
               
               while ($row1=mysqli_fetch_array($res1)) {
                   $s_id=$row1['s_id'];
                  
                   $res2 = mysqli_query($Connect, " SELECT * FROM `student` WHERE  `s_id`='$s_id' ");
                   while ($row2=mysqli_fetch_array($res2)) {

                       $F_name = $row2['F_name'];
                       $M_name = $row2['M_name'];
                       $L_name = $row2['L_name'];
                       $Full_name=" {$F_name} {$M_name} {$L_name} ";
                       $roll_no = $row2['roll_no'];
                       $batch = $row2['batch']; ?>
                    <option style='background-color:#3c3f44' style='color:white' value="<?php echo $s_id ?>"><?php echo $Full_name ?></option>
                    <?php
                   $i++;}}?>
                </select>
               
</div>
<button name="submit"  class="button"  style="float: right;">Submit</button>
                   </form>
                   <?php 
    if(isset($_POST['submit'])){
      $leader_name = $_POST['leader_name'];
      if ($leader_name != 'student') {
        echo("<script>window.location = 'grp_details.php?leader=$leader_name & division=$division'</script>");
      }
      else{
        echo'<label style="color: red;">Please Select a Group Leader</label>';
      }
    }
    
    ?>

                    </div>
                </div>
            </section>
        </main>

        <!--===== GSAP =====-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
    </html>


