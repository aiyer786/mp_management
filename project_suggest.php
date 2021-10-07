<?php 
include('Connect.php');
include('index_back.php');
include('navbar_student.html');
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
     <link rel="stylesheet" href="css/suggesttable.css">
   </head>
<body>
  <section class="home-section">
      <div class="text">Suggest Topic</div>
      <div class="suggestion">
        <div class="sug1">
           <main class="flex-1 p-6">

        <?php

          
          @$topic = $_POST['topic'];
          @$description = $_POST['description'];
          @$student = $_SESSION['s_id'] or die("Session Expired !! Login Again");
          $dept = $_SESSION['dept'];
          $query = mysqli_query($Connect,"SELECT * FROM `groups` WHERE `s_id`= '$student'") or die("Join a Group to Suggest Topic");
          $data = mysqli_fetch_assoc($query);
          @$g_id = $data['g_id']; 
          if(empty($g_id)){
            echo 'JOIN a Group to Suggest Topic';
          }
          else{
            echo'
            <form method = "post">
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Topic Name </label>
              <input type="text" name="topic" class="form-control" id="exampleFormControlInput1" placeholder="Topic Name" >
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Description</label>
              <textarea type="text" name="description" class="form-control"  id="exampleFormControlTextarea1" rows="3" ></textarea>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
           </form>
            ';
          }
          $query1 = mysqli_query($Connect,"SELECT * FROM `project_suggestions` WHERE `g_id`= '$g_id'") ;
          $rowcount = mysqli_num_rows($query1);

         if(isset($_POST['submit'])){
          $topic_id = uniqid();

          if ($rowcount < 3) {
              $query2 = mysqli_query($Connect, "INSERT INTO `project_suggestions`( `g_id`, `topic_id`, `topic`, `description`,  `approved`, `status`) VALUES ('$g_id','$topic_id','$topic','$description','0','0')") or die("insert error");
              echo("<meta http-equiv='refresh' content='0'>");
          }
          if($rowcount == 3){
            echo "maximum topic limit reached";
          }
        }
        ?>
      </main>
      </div>
      </div>
      <ol style="max-width : 50% ; margin-left: 5%;" class="list-group list-group-numbered">
      <?php 
      $i=1;
        while ($row = mysqli_fetch_array($query1)) {
          $topic = $row['topic'];
          $description = $row['description'];
          $t_id = $row['topic_id'];
          $status = $row['approved'];
            ?>
      <!-- <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
              <div class="fw-bold "><?php echo $topic?></div>
              <p class="muted-text" style="font-size: small;"><?php echo $description?></p>
            </div>
            <div style="float: right; padding-top: 10px;">
            <form method="post"><button  class="btn btn-sm btn-danger" name="<?php echo $t_id ?>">Remove</button></form>
            </div>
           </li> -->
           <table class="table">
            <thead>
          
              </thead>
            <tbody> <tr>
            <td data-label="Sr.no"><?php echo $i?></td>
             <td data-label="Topic "><?php echo $topic?></td>
                    <td style="text-align:left;" data-label="Description"><br><?php echo $description?> </td>
                    <td>
                    <?php 
                     if($status == 0){
                      echo '<form method="post"><button type="submit" class="btn" name=" '.$t_id.'"><i class="bx bx-trash"></i></button></form>';
                    }
                      if($status == 1){
                      echo 'Accepted';
                    }
                    if ($status == 2){
                      echo 'Rejected';
                    }
                    ?>
                    </td>
                    
           </tr>
                
           <?php
           
            if (isset($_POST[$t_id])) {
                $rm_topic = mysqli_query($Connect, "DELETE FROM `project_suggestions` WHERE `topic_id`='$t_id'");
                echo("<meta http-equiv='refresh' content='0'>");
            }


           
           $i++;
        }
           ?>
      </ol>
  </section>
  <script src="js/student.js"></script>
</body>
</html>

<!-- PHP Form Backend -->































<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./css/suggest.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Project suggestion</title>
</head>

<body>

    <!-- 
  ****************************************
  Contest Entry for Treehouse:
  "Design a Contact Form"
  Submitted by Lisa Wagner
  ****************************************
-->
    
    <!-- <div id="contact-form">
        <div>
            <h1>Nice to Meet You!</h1>
            <h4>Have a question or just want to get in touch? Let's chat.</h4>
        </div>
        <p id="failure">Oopsie...message not sent.</p>
        <p id="success">Your message was sent successfully. Thank you!</p>

        <form method="post" >
            <div>
                <label for="name">
                    <span class="required">Topic name: *</span>
                    <input type="text" id="name" name="name" value="" placeholder="Your Name" required="required" tabindex="1" autofocus="autofocus" />
                </label>
            </div>
            <div>
                <label for="message">
                    <span class="required">Description: *</span>
                    <textarea id="message" name="message" placeholder="Please write your message here." tabindex="5" required="required"></textarea>
                </label>
            </div>
            <div>
                <button name="submit" type="submit" id="submit">SEND</button>
            </div>
        </form>

    </div>
    <img id = "image" src="https://image.freepik.com/free-vector/character-illustration-people-with-creative-ideas-icons_53876-59888.jpg" alt="Ideas change lives">
</body>

</html>  -->