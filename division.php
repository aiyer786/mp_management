<?php
 include('Connect.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/div.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
    integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
   <title>Division Page</title>
   <!-- <style>
    .navbar {
        background-color: brown;
        padding-top: 10px;
        padding-bottom: 10px;
    }
</style> -->
</head>
<body>
    <!--Navbar Starts-->
    <!-- <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="#" style="color: antiquewhite; font-family: 'Courier New', Courier, monospace;">MY
            DYP-RAIT</a>

        <ul class="navbar-nav ml-auto">
            <li class="navbar-item active mr-4">
                <a class="nav-link" href="coordinator_page.html" style="color: antiquewhite;">HOME</a>
            </li>
            <li class="navbar-item active mr-4">
                <a class="nav-link" href="#" style="color: antiquewhite;">LOGOUT</a>
            </li>
        </ul>
    </nav> -->
    <!--Navbar End -->
   
   



    <div class="table-container">
        <!-- <h1 class="heading">DIV A</h1> -->
        <table class="table">
            <?php
            $i=1;
            $division=$_GET['division'];
               $res3 = mysqli_query($Connect," SELECT * FROM `groups` WHERE `Leader` = '1' AND `division`='$division' ");
               while ($row3=mysqli_fetch_array($res3)) {
                   $g_id=$row3['g_id']; ?> 
        <thead>
                 <th>S.No</th>
                 <th>Name</th>
                 <th>Batch</th>
                 <th>Roll No</th>
            </thead>
            <tbody>
            <?php
    
    $n=1;
                   

                 
                   $res1 = mysqli_query($Connect, " SELECT * FROM `groups` WHERE `g_id` = '$g_id' ");
               
                   while ($row1=mysqli_fetch_array($res1)) {
                       $s_id=$row1['s_id'];
                      
                       $res2 = mysqli_query($Connect, " SELECT * FROM `student` WHERE  `division`='$division' AND `s_id`='$s_id' ");
                       while ($row2=mysqli_fetch_array($res2)) {
                           $F_name = $row2['F_name'];
                           $M_name = $row2['M_name'];
                           $L_name = $row2['L_name'];
                           $Full_name=" {$F_name} {$M_name} {$L_name} ";
                           $roll_no = $row2['roll_no'];
                           $batch = $row2['batch']; ?>
                        
                  <tr>
                        <td data-label="S.No"><?php echo $n ?></td>
                        <td data-label="Name"><?php echo $Full_name ?></td>
                        <td data-label="Batch"><?php echo $batch ?></td>
                        <td data-label="Roll No"><?php echo $roll_no ?></td>     
                  </tr>
                
                <?php
                 
                    $n++;
                           
                       
                           $i++;
                       }
                   }
               }?>

            </tbody>
          </table>
          
        
        <table class="table">
            <thead>
                <tr>
                    <th>Topic Name</th>
                    <th>Description</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Topic Name">Topic 1</td>
                    <td data-label="Description">Topic 1</td>
                    <td data-label="Action"><a href="Action" class="btn">Approve</a></td>
                    <td data-label="Action"><a href="Action" class="btn">Disapprove</a></td>
                </tr>
                
                <?php
            //    ------------------- End the first Loop Here --------------------
               ?>

                <tr>
                    <td data-label="Topic Name">Topic 2</td>
                    <td data-label="Description">Topic 1</td>
                    <td data-label="Action"><a href="Action" class="btn">Approve</a></td>
                    <td data-label="Action"><a href="Action" class="btn">Disapprove</a></td>
                </tr>
                <tr>
                    <td data-label="Topic Name">Topic 3</td>
                    <td data-label="Description">Topic 1</td>
                    <td data-label="Action"><a href="Action" class="btn">Approve</a></td>
                    <td data-label="Action"><a href="Action" class="btn">Disapprove</a></td>
                </tr>
            </tbody>
        </table>
