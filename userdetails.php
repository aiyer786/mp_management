<?php include('Connect.php');?>
<html>
<head>
<title>Main</title>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-student-tab" data-bs-toggle="pill" data-bs-target="#pills-student" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Student</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-mentor-tab" data-bs-toggle="pill" data-bs-target="#pills-mentor" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Mentor</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-co_or-tab" data-bs-toggle="pill" data-bs-target="#pills-co_or" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Co-Ordinator</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-hod-tab" data-bs-toggle="pill" data-bs-target="#pills-hod" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">HOD</button>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">

<!-------------------------  Student Section------------------------------------------------ -->

  <div class="tab-pane fade show active" id="pills-student" role="tabpanel" aria-labelledby="pills-student-tab">
  <div class="card">
  <form method="POST" >
        Student Form
        <br>
        <br>
  <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Department:</label>
                        <select class="form-select" aria-label="Default select example" name="dept">
                            <option selected>Select</option>
                            <option value="CS">CS</option>
                            <option value="IT">IT</option>
                            <option value="EX">EX</option>
                            <option value="ET">ET</option>
                            <option value="IN">IN</option>
                        </select>
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
                        <label for="exampleFormControlInput1" class="form-label">Year:</label>
                        <select class="form-select" aria-label="Default select example" name="year">
                            <option selected>Select</option>
                            <option value="SE">SE</option>
                            <option value="TE">TE</option>
                            <option value="BE">BE</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Division:</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" name="division" style="text-transform:uppercase">

                    </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Batch :</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="batch" style="text-transform:uppercase">
        </div>
        <button type="submit" class="btn btn-primary" name="student">Submit</button>
  </form>
                <!----------------------- PHP  Backend ---------------------->
               <?php
                if(isset($_POST['student'])){

                    
                    $dept= $_POST['dept'];
                    $roll_no= $_POST['roll_no'];
                    $F_name=$_POST['F_name'];
                    $M_name=$_POST['M_name'];
                    $L_name=$_POST['L_name'];
                    $contact=$_POST['contact'];
                    $email=$_POST['email'];                                                                                          
                    $password= 'dypatil@123';
                    $year=$_POST['year'];
                    $division=$_POST['division'];
                    $batch=$_POST['batch'];
                    // $query = "INSERT INTO `student` VALUES ('$dept','$roll_no','$F_name','$M_name','$L_name','$email','$password','$contact','$year','$divison','$batch', '0')";
                    $query ="INSERT INTO `student`(`dept`, `roll_no`, `F_name`, `M_name`, `L_name`, `email`, `password`, `contact`, `year`, `division`, `batch`, `active`) VALUES ('$dept','$roll_no','$F_name','$M_name','$L_name','$email','$password','$contact','$year','$division','$batch','$active')";
                    $res = mysqli_query($Connect, $query);
                    if(!$res){
                        echo("<script>alert('Error!! data not inserted into database')</script>");
                    }
                    else{
                        echo("<script>alert('You have Sucessfully Registred!')</script>");
                        echo("<script>window.location = 'student.php'</script>");
                    }
                    // $query = " SELECT * FROM `student` WHERE `email` = '$email' ";
                    // $res = mysqli_query($Connect, $query);
                    // $data = mysqli_fetch_assoc($res);
                    // $sr_no = $data['sr_no'];
                    $query="SELECT * FROM `student` WHERE `email`='$email' ";
                    $res=mysqli_query($Connect,$query);
                    while($row=$res->fetch_assoc())
                    {
                      $sr_no="{$row['sr_no']}";
                      $dept="{$row['dept']}";
                    }
                    $sr_no=substr(str_repeat(0,4).$sr_no,-4);
                    
                    $s_id="DY{$dept}{$sr_no}";
                    $query="UPDATE `student` SET `s_id` = '$s_id' WHERE `student`.`email` = '$email'";
                    $resu = mysqli_query($Connect, $query);
                    if(!$resu){
                        echo("<script>alert('Error!! data not inserted into database')</script>");
                    }
                    else{
                        echo("<script>alert('You have Sucessfully Registred!')</script>");
                        echo("<script>window.location = 'userdetails.php'</script>");
                    }

                }
                ?>
                </div>
  </div>

  <!-- --------------------------Mentor Section---------------------------------------------------------------- -->
  <div class="tab-pane fade" id="pills-mentor" role="tabpanel" aria-labelledby="pills-mentor-tab">
  
  <form method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Mentor Id :</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="m_id">
                </div>
                <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Department:</label>
                        <select class="form-select" aria-label="Default select example" name="dept">
                            <option selected>CS</option>
                            <option value="IT">IT</option>
                            <option value="EX">EX</option>
                            <option value="ET">ET</option>
                            <option value="IN">IN</option>
                        </select>
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
                <button type="submit" class="btn btn-primary" name="mentor">Submit</button>
            </form>
            <!----------------------- PHP  Backend ---------------------->

            <?php 
                if(isset($_POST['mentor'])){
                    $m_id= $_POST['m_id'];
                    $dept= $_POST['dept'];
                    $F_name=$_POST['F_name'];
                    $M_name=$_POST['M_name'];
                    $L_name=$_POST['L_name'];
                    $email=$_POST['email'];                                                                                          
                    $password= 'dypatil@456';
                    $contact=$_POST['contact'];

                    $query = "INSERT INTO `mentor` VALUES ('$m_id','$dept','$F_name','$M_name','$L_name','$email','$password','$contact', '0')";
                    $res = mysqli_query($Connect, $query);
                    if(!$res){
                        echo("<script>alert('Error!! data not inserted into database')</script>");
                    }
                    else{
                        echo("<script>alert('You have Sucessfully Registred!')</script>");
                        echo("<script>window.location = 'userdetails.php'</script>");
                    }
                    $query="SELECT `sr_no` FROM `mentor` WHERE `email`='$email' ";
                    $res=mysqli_query($Connect,$query);
                    while($row=$res->fetch_assoc())
                    {
                      $sr_no="{$row['sr_no']}";
                    }
                    $sr_no=substr(str_repeat(0,4).$sr_no,-4);
                    $s_id="DY{$sr_no}";
                    $query="UPDATE `student` SET `m_id` = '$m_id' WHERE `mentor`.`email` = '$email'";
                    $resu = mysqli_query($Connect, $query);
                }

            ?>

  </div>

  <!---------------------------- Co-Ordinator Section ----------------------------------------------------->

  <div class="tab-pane fade" id="pills-co_or" role="tabpanel" aria-labelledby="pills-co_or-tab">
  <form method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Co-ordinator Id :</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="c_id">
                </div>
                <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Department:</label>
                        <select class="form-select" aria-label="Default select example" name="dept">
                            <option selected>CS</option>
                            <option value="1">IT</option>
                            <option value="2">EX</option>
                            <option value="3">ET</option>
                            <option value="4">IN</option>
                        </select>
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
                <button type="submit" class="btn btn-primary" name="co_or">Submit</button>
            </form>
            <!----------------------- PHP  Backend ---------------------->

            <?php
            if (isset($_POST['co_or'])) {
                $c_id = $_POST['c_id'];
                $dept = $_POST['dept'];
                $F_name = $_POST['F_name'];
                $M_name = $_POST['M_name'];
                $L_name = $_POST['L_name'];
                $email = $_POST['email'];
                $password = 'dypatil@456';
                $contact = $_POST['contact'];

                $query = "INSERT INTO `coordinator` VALUES ('$c_id','$dept','$F_name','$M_name','$L_name','$email','$password','$contact')";
                $res = mysqli_query($Connect, $query);
                if (!$res) {
                    echo ("<script>alert('Error!! data not inserted into database')</script>");
                } else {
                    echo ("<script>alert('You have Sucessfully Registred!')</script>");
                    echo ("<script>window.location = 'userdetails.php'</script>");
                }
            }

            ?>
  </div>

  <!-- ----------------------------HOD Section--------------------------------------------------- -->
  <div class="tab-pane fade" id="pills-hod" role="tabpanel" aria-labelledby="pills-hod-tab">
  <form method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">HOD Id :</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="h_id">
                </div>
                <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Department:</label>
                        <select class="form-select" aria-label="Default select example" name="dept">
                            <option selected>CS</option>
                            <option value="1">IT</option>
                            <option value="2">EX</option>
                            <option value="3">ET</option>
                            <option value="4">IN</option>
                        </select>
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
                <button type="submit" class="btn btn-primary" name="hod">Submit</button>
            </form>
            <!----------------------- PHP  Backend ---------------------->

            <?php
            if (isset($_POST['hod'])) {
                $h_id = $_POST['h_id'];
                $dept = $_POST['dept'];
                $F_name = $_POST['F_name'];
                $M_name = $_POST['M_name'];
                $L_name = $_POST['L_name'];
                $email = $_POST['email'];
                $password = 'dypatil@456';
                $contact = $_POST['contact'];

                $query = "INSERT INTO `hod` VALUES ('$h_id','$dept','$F_name','$M_name','$L_name','$email','$password','$contact')";
                $res = mysqli_query($Connect, $query);
                if (!$res) {
                    echo ("<script>alert('Error!! data not inserted into database')</script>");
                } else {
                    echo ("<script>alert('You have Sucessfully Registred!')</script>");
                    echo ("<script>window.location = 'userdetails.php'</script>");
                }
            }

            ?>
  </div>
 
</div>


</body>
</html>