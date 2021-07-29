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
      <div class="text">Suggest Topic</div>
      <div class="suggestion">
        <div class="sug1">
           <main class="flex-1 p-6">
         
         <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Topic Name 1</label>
           <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Topic Name">
         </div>
         <div class="mb-3">
           <label for="exampleFormControlTextarea1" class="form-label">Details</label>
           <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
         </div>
         <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Topic Name 2</label>
           <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Topic Name" >
         </div>
         <div class="mb-3">
           <label for="exampleFormControlTextarea1" class="form-label">Details</label>
           <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
         </div>
         <div class="mb-3">
           <label for="exampleFormControlInput1" class="form-label">Topic Name 3</label>
           <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Topic Name">
         </div>
         <div class="mb-3">
           <label for="exampleFormControlTextarea1" class="form-label">Details</label>
           <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
         </div>
         <button type="submit" class="btn btn-primary">Submit</button>
      
      </main>
      </div>
      <div class="sug2">
      
      </div>
      </div>
        
  </section>
  <script src="js/student.js"></script>
</body>
</html>
































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