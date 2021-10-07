<?php 
include('Connect.php');
include('index_back.php');
include('navbar_student.html');
?>
<html>
<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/stu_details.css">
   </head>
<body>
    <div class="container" >
    <table>
    <thead>
        <tr>
        <th scope="col">Student Name</th>
        <th scope="col">Student ID</th>
        <th scope="col">Group Status</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $i=1;
        $division =$_SESSION['division'];
        $dept = $_SESSION['dept'];
        $res = mysqli_query($Connect," SELECT * FROM `student` WHERE `division`='$division' and `dept` = '$dept' ");
        while ($row=mysqli_fetch_array($res)) {
            $F_name = $row['F_name'];
            $M_name = $row['M_name'];
            $L_name = $row['L_name'];
            $Full_name=" {$F_name} {$M_name} {$L_name} ";
            $s_id = $row['s_id'];
            $active = $row['active'];
            if($active == 1){
                $grp_status = 'Joined';
            }
            else{
                $grp_status = 'Available';
            }
           
        ?>
        <tr>
        <td data-label="Student Name"><?php echo $Full_name ?></td>
        <td data-label="Student ID"><?php echo $s_id ?></td>
        <td data-label="Group Status"><?php echo $grp_status ?></td>
        </tr>
      <?php
        $i++;
        }
        ?>
    </tbody>
    </table>
    </div>
</body>
</html>