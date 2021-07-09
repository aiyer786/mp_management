<?php include('./Connect.php');
session_start(); ?>
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
            <form method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Mentor Id :</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="m_id">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Department :</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="dept">
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
                        echo("<script>window.location = 'mentor.php'</script>");
                    }
                    $query="SELECT `sr_no` FROM `mentor` WHERE `email`='$email' ";
                    $res=mysqli_query($Connect,$query);
                    while($row=$res->fetch_assoc())
                    {
                      $sr_no="{$row['sr_no']}";
                    }
                    $sr_no=substr(str_repeat(0,6).$sr_no,-6);
                    $s_id="DY{$sr_no}";
                    $query="UPDATE `student` SET `m_id` = '$m_id' WHERE `mentor`.`email` = '$email'";
                    $resu = mysqli_query($Connect, $query);
                }

            ?>

        </div>
    </div>

</body>

</html>