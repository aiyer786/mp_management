<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Login landing page</title>
</head>

<body>

    <img class="logo" src="./images/logo.jpeg" width="170" height="68" border="0" />
    <IMG STYLE="position:topleft; TOP:100px; LEFT:170px">

    <section class="side">
        <img src="./images/login1.png" alt="">
    </section>

    <section class="main">
        <div class="login-container">
            <p class="title">Welcome back</p>
            <div class="separator"></div>
            <p class="welcome-message">Please, provide login credential to proceed </p>

            <form class="login-form" method="POST" action="index_back.php">
                <div class="form-control">
                    <input type="text" placeholder="Email" name="email" required>
                    <i class="fas fa-user"></i>
                </div>
                <div class="form-control">
                    <input type="password" placeholder="Password" name="password" required>
                    <i class="fas fa-lock"></i>
                </div>

                <select class="dropbtn" name="login_type">
                <i class="fa fa-caret-down" , style="color: white;"></i>
                    <option style='background-color:#f5f5f5' style='color:white' value="student">Student</option>
                    <option style='background-color:#f5f5f5' style='color:white' value="mentor">Mentor</option>
                    <option style='background-color:#f5f5f5' style='color:white' value="hod">HOD</option>
                    <option style='background-color:#f5f5f5' style='color:white' value="co_or">Co-ordinator</option>
                </select>

                <!-- <div class="dropdown" class="form-control">
                    <button class="dropbtn" name="login_type">Login Type
                        <i class="fa fa-caret-down" , style="color: white;"></i>
                    </button>
                    <div class="dropdown-content" class="form-control">
                        <a href="#" name="student">Student</a>
                        <a href="#" name="mentor">Mentor</a>
                        <a href="#" name="hod">HOD</a>
                        <a href="#" name="co_or">Project Co-ordinator</a>
                    </div>
                </div> -->
                <button class="submit" type="submit" name="login">Login</button>
            </form>
        </div>
    </section>



</body>

</html>