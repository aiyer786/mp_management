
<?php include('./Connect.php'); session_start();?>
<html>
<head>
<title>Main</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<div class="card">
  <div class="card-body">
  <form method="POST" >
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Student Id :</label>
        <input type="text" class="form-control" id="exampleFormControlInput1"  name="s_id">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Department :</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="dept">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Roll No :</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="roll_no">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">First Name :</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="F_name">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Middle Name :</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="M_name">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Last Name :</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="L_name">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address :</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="email">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Contact No :</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="contact">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Year :</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="year">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Division :</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="division">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Batch :</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="batch">
        </div>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  </form>
                <!----------------------- PHP  Backend ---------------------->
               <?php
                if(isset($_POST['submit'])){

                    $s_id= $_POST['s_id'];
                    $dept= $_POST['dept'];
                    $roll_no= $_POST['roll_no'];
                    $F_name=$_POST['F_name'];
                    $M_name=$_POST['M_name'];
                    $L_name=$_POST['L_name'];
                    $contact=$_POST['contact'];
                    $email=$_POST['email'];                                                                                          
                    $password= 'dypatil@123';
                    $year=$_POST['year'];
                    $divison=$_POST['division'];
                    $batch=$_POST['batch'];
                    $query = "INSERT INTO `student` VALUES ('$s_id','$dept','$roll_no','$F_name','$M_name','$L_name','$email','$password','$contact','$year','$divison','$batch', '0')";
                    $res = mysqli_query($Connect, $query);
                    if(!$res){
                        echo("<script>alert('Error!! data not inserted into database')</script>");
                    }
                    else{
                        echo("<script>alert('You have Sucessfully Registred!')</script>");
                        echo("<script>window.location = 'student.php'</script>");
                    }
                }
                ?>
  </div>
</div>

</body>
</html>