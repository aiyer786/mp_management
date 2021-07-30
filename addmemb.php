<?php 
include('Connect.php');
include('index_back.php')
?>

<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="apple-touch-icon" type="image/png"
      href="https://cpwebassets.codepen.io/assets/favicon/apple-touch-icon-5ae1a0698dcc2402e9712f7d01ed509a57814f994c660df9f7a952f3060705ee.png" />
    <link rel="shortcut icon" type="image/x-icon"
      href="https://cpwebassets.codepen.io/assets/favicon/favicon-aec34940fbc1a6e787974dcd360f2c6b63348d4b1f4e06c77743096d55480f33.ico" />
    <link rel="mask-icon" type=""
      href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-8f3771b1072e3c38bd662872f6b673a722f4b3ca2421637d5596661b4e2132cc.svg"
      color="#111" />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.9.6/tailwind.min.css'>
    
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="css/student.css">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
     
      <!--<i class='bx bxl-c-plus-plus icon'></i>>-->
      <div class="logo_name">
        <div class="imge"><img class="img" src="images/dylogo.png" alt="" srcset=""></div>
        <div class="name">D Y PATIL</div>
      </div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
     
      <li>
        <a href="student_home.php">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Home</span>
        </a>
         <span class="tooltip">Home</span>
      </li>
      <li>
       <a href="addmemb.php">
         <i class='bx bx-user-plus' ></i>
         <span class="links_name">Add Member</span>
       </a>
       <span class="tooltip">Add Member</span>
     </li>
     <li>
       <a href="project_suggest.php">
         <i class='bx bx-bulb' ></i>
         <span class="links_name">Suggest Topic</span>
       </a>
       <span class="tooltip">Suggest Topic</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">Mentor</span>
       </a>
       <span class="tooltip">Mentor</span>
       </li>
       <li>
       <a href="logout.php">
         <i class='bx bx-exit' ></i>
         <span class="links_name">Logout</span>
       </a>
       <span class="tooltip">Logout</span>
       </li>
     
    </ul>
  </div>
  <section class="home-section">
      <div class="text">Add Member</div>
      <div class='add-members-wrapper'>
        <form style="max-width: 50%;" action="" method='POST'>
          <div class="input-group mb-3">
            <input name="member" type="text" class="form-control" placeholder="Member's ID" aria-label="Recipient's username"
              aria-describedby="button-addon2" required>
            <button class="btn btn-primary text-white  btn-outline-secondary" name="addmemb" type="submit" id="button-addon2">AddMember</button>
          </div>
        </form>

        <?php 
        
        $res = mysqli_query($Connect,"SELECT * FROM `student` ");
        while ($data = mysqli_fetch_array($res)) {
            $s_id_check = $data['s_id'];
            $division_check = $data['division'];
            // echo $s_id_check;
        
            if (isset($_POST['addmemb'])) {
                $s_id=$_POST['member'];
                $leader = $_SESSION['s_id'];
                $division= $_SESSION['division'];
                // echo $leader;
                // $g_id = 'AAA';
                // echo $g_id;
                $q12=mysqli_query($Connect, "SELECT s_id FROM groups WHERE s_id = '$leader' ")or die('Error98');
                $rowcount=mysqli_num_rows($q12);
                // echo $rowcount;
                if ($rowcount == 0) {
                    $g_id = uniqid();
                    $res = mysqli_query($Connect, "INSERT INTO `groups`(`g_id`, `s_id`, `division`, `Leader`) VALUES ('$g_id','$leader','$division','1') ") or die("leader error");
                    echo("<script>alert('Congrats !! You are now a group leader')</script>");

                }
                
                $q13=mysqli_query($Connect, "SELECT * FROM groups WHERE s_id = '$leader' AND Leader = '1'")or die('Error99');
                $data1=mysqli_fetch_assoc($q13);
                $g_id_member = $data1['g_id'];
                $q14=mysqli_query($Connect, "SELECT * FROM groups WHERE g_id = '$g_id_member' ")or die('Error100');
                $rowcount1=mysqli_num_rows($q14);
               
                // ADD something so that students from other groups shouldn't be able to join

                // $q18=mysqli_query($Connect, "SELECT DISTINCT s_id , s_id FROM groups")or die('Error101');
                // echo $q18;
                // $rowcount2=mysqli_num_rows($q18);
                // echo $rowcount2;

                if ($rowcount1<4) {
                    if (strcmp($s_id_check, $s_id)==0 && strcmp($division_check, $division)==0) {
                        // echo 'correct';
                        $res1 = mysqli_query($Connect, "INSERT INTO `groups`(`g_id`, `s_id`, `division`, `Leader`) VALUES ('$g_id_member','$s_id','$division','0' )") or die("member error");
                    }
                // elseif (strcmp($division_check, $division)!=0) {
                //     echo'Other Division';
                // } elseif (strcmp($s_id_check, $s_id)!=0) {
                //     echo'Invalid';
                // }
                }  
            }
        }


        ?>



        
        <ol style="max-width : 50% ; margin-left: 5%;" class="list-group list-group-numbered">
        <?php 
            $i=1;
            $student = $_SESSION['s_id'];
            $q15=mysqli_query($Connect,"SELECT * FROM `groups` WHERE `s_id` = '$student' ");
            $row=mysqli_fetch_assoc($q15);
            $grp_id = $row['g_id'];
            $q16 = mysqli_query($Connect,"SELECT * FROM `groups` WHERE `g_id` = '$grp_id' ");
            while ($row1=mysqli_fetch_array($q16)) {
                $member_id = $row1['s_id'];
                $leader_check1 = $row1['Leader'];
                $q17 = mysqli_query($Connect, "SELECT * FROM `student` WHERE `s_id` = '$member_id' ");
                while ($row2=mysqli_fetch_array($q17)) {
                    $F_name = $row2['F_name'];
                    $M_name = $row2['M_name'];
                    $L_name = $row2['L_name'];
                    $Full_name=" {$F_name} {$M_name} {$L_name} "; ?>
          <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
              <div class="fw-bold "><?php echo $Full_name?></div>
              <p class="muted-text" style="font-size: small;"><?php echo $member_id?></p>
            </div>
            <div style="float: right; padding-top: 10px;">
           <?php
             $leader_check =$row['Leader'];
                    if ($leader_check == '1') {
                        if ($leader_check1 == '1') {
                        } else {
                            echo'<form method="post"><button class="btn btn-sm btn-danger" name="<?php echo $member_id?>">Remove</button></form>';
                        }
                    }
                    if ($leader_check1 == '1') {
                        echo 'Leader';

                    }
                    if (isset($_POST[$member_id])) {
                        $remove = mysqli_query($Connect, "DELETE FROM `groups` WHERE `s_id`= '$member_id' ") or die("Error101");
                    } ?>
            </div>
           </li>
           <?php
           $i++;
                }
            }?>

        </ol>
        <?php
          if($leader_check =='1'){
            echo '<form method="post"><button class="btn btn-sm btn-danger" name="disband">Disband</button></form>';
          }
          if(isset($_POST['disband'])){
            $disband = mysqli_query($Connect,"DELETE FROM `groups` WHERE `g_id` = '$grp_id'");
            $rm_topic = mysqli_query($Connect,"DELETE FROM `project_suggestions` WHERE `g_id`='$grp_id'");

          }
            ?>
      </div>
        
  </section>
  <script src="js/student.js"></script>
</body>
</html>