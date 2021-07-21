<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- =====BOX ICONS===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="css/div_s.css">

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
                        <img src="images/project.jpg" alt="" data-speed="-2" class="move">
                    </div>

                    <div class="home__data">
                         <h1 class="home__title">To Proceed,</h1> 
                        <p class="home__description">Enter Division Below.</p>
                        <div class="dropdown">
                            
                            <label for="exampleFormControlInput1" class="form-label">Division:</label>
                            <form method="POST">
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="division" style="text-transform:uppercase"> </input>
                            <button type="submit" class="btn btn-danger" name="div_submit">Submit</button>
                            </form>
                          </div>
                    </div>
                </div>
            </section>
        </main>

        <?php
        
             if(isset($_POST['div_submit'])){
             }
                 $division=$_POST['division'];
               echo 'pressed it now';
             
        ?>

        <!--===== GSAP =====-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>