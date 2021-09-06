<?php 
 include('Connect.php');
 include('index_back.php');
require_once "navbar1.html";
$leader_id = $_GET['leader'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navbar1.css">
    <link rel="stylesheet" href="css/grp_details.css">
    <!-- <script src="myscripts.js"></script> -->
    <!-- <link rel="stylesheet" href="styles.css"> -->
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
   
   <?php
   $a=1;
       $i=1;
       $dept = $_SESSION['dept'];
       $division=$_GET['division'];
       echo'<h1 class="heading">DIV '.$division.'</h1>';
          $res3 = mysqli_query($Connect," SELECT * FROM `groups` WHERE `s_id`='$leader_id' AND `division`='$division' and `dept` = '$dept' ");
          while ($row3=mysqli_fetch_array($res3)) {
              $g_id=$row3['g_id']; ?> 
              
   <table class="table">

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
                 
                  $res2 = mysqli_query($Connect, " SELECT * FROM `student` WHERE  `s_id`='$s_id' ");
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
          ?>

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
       <?php 
       $x=1;
       $res5 = mysqli_query($Connect," SELECT * FROM `project_suggestions` WHERE `g_id` = '$g_id'  ");
          while ($row5=mysqli_fetch_array($res5)) {
              $topic   =   $row5['topic'];
              $description = $row5['description'];
              $topic_id = $row5['topic_id'];
           ?>
           <tr>
               <td data-label="Topic Name"><?php echo $topic?></td>
               <td style="text-align:initial;" data-label="Description"><br> &nbsp;  &nbsp; &nbsp; <?php echo $description?> </td>
               
               <?php 
               
                   $approved=$row5['approved'];
                  
               

                   // aprroved  == 0 implies not selected
                   // approved  == 1 implies project is approved
                   // approved  == 2 implies project is rejected

                   if ($approved == 0) {
                       ?>
                       <td data-label="Action"><form method="post"><input type="submit" class="btn" name="<?php echo $topic_id ?>" value="Approve"></form></td>
                       <?php
                       if(isset($_POST[$topic_id])) {
                           $res6 = mysqli_query($Connect, "UPDATE `project_suggestions` SET `approved`='1' ,`status`='1' WHERE `topic_id`='$topic_id' AND `g_id` = '$g_id'") or die("error 1"); 
                           $res7 = mysqli_query($Connect, "UPDATE `project_suggestions` SET `approved`='2'  WHERE `status`='0' AND `g_id` = '$g_id'") or die("error 2");  
                           $leader = $row3['s_id'];
                           $res8 =  mysqli_query($Connect , "INSERT INTO `projects`(`g_id`, `topic_id`,`topic`, `leader`, `mentor`,`active`) VALUES ('$g_id','$topic_id','$topic','$leader','0','0')") or die("error insert"); 
                           echo("<meta http-equiv='refresh' content='0'>");   
                       }
                      
                           
                       
                       
                       
                   } elseif ($approved == '1') {
                       echo'<td data-label="Action"><label>Accepted</label></td>';

                   } else {
                       echo'<td data-label="Action"><label>Rejected</label></td>';
                   }
               
               ?>
               
               <td data-label="Action"><form method="post"><button  name="<?php echo "A$topic_id" ?>" class="btn">Reset</button></form>
               <?php
                if(isset($_POST["A$topic_id"])){

                   $res9=mysqli_query($Connect, "UPDATE `project_suggestions` SET `approved`='0' ,`status`='0' WHERE  `g_id` = '$g_id'") or die("error 4");
                   $res10 =  mysqli_query($Connect , "DELETE FROM `projects` WHERE `g_id` = '$g_id' ") or die("error insert");
                   echo("<meta http-equiv='refresh' content='0'>");
                }
               ?>
           </tr>
               </td>
           <?php
          
           $x++;
           $a++;
   }
      }
          ?>
       </tbody>
   </table>




<!--surround the select box with a "custom-select" DIV element. Remember to set the width:-->

<?php 
$res13 = mysqli_query($Connect,"SELECT * FROM `projects` WHERE `g_id` = '$g_id'");
$row7 = mysqli_fetch_array($res13);
@$mentor_check = $row7['active'];
@$mentor_final = $row7['mentor'];
$res14 = mysqli_query($Connect,"SELECT * FROM `mentor` WHERE `m_id` = '$mentor_final'");
$row8 = mysqli_fetch_array($res14);
@$M_F_name = $row8['F_name'];
@$M_M_name = $row8['M_name'];
@$M_L_name = $row8['L_name'];
$M_Full_name=" {$M_F_name} {$M_M_name} {$M_L_name} "; 

if ($mentor_check == 0) {
    ?>
<div class="custom-select" style="width:200px;">
<h5>Assign Mentor:</h5>
<form method = "post">
    <select class="dropbtn" name="mentor">
        <option style='background-color:#3c3f44' style='color:white' value="mentor">Select Mentor</option>
        <?php
        $res11 = mysqli_query($Connect, " SELECT * FROM `mentor` WHERE `count` < '3'  ");
    while ($row6=mysqli_fetch_array($res11)) {
        $m_id = $row6['m_id'];
        $M_F_name = $row6['F_name'];
        $M_M_name = $row6['M_name'];
        $M_L_name = $row6['L_name'];
        $M_Full_name=" {$M_F_name} {$M_M_name} {$M_L_name} "; ?>
        <option style='background-color:#3c3f44' style='color:white' value="<?php echo $m_id?>"><?php echo $M_Full_name?></option>
           <?php
    } ?>     
    </select>
    <button name="submit" class="button"> Submit </button>
</form>
</div>
<?php
}
else{
  echo"assigned mentor :";
  echo $M_Full_name;
  echo'<form method="post"><button name="reassign" class="button"> Reassign </button></form>';
}
?>
<?php
if(isset($_POST['submit'])){
  $mentor = $_POST['mentor'];
  if($mentor != 'mentor'){
    $res12 = mysqli_query($Connect,"UPDATE `projects` SET `mentor`='$mentor', `active` = '1' WHERE `g_id` = '$g_id' ")or die("Approve project First");
    echo("<meta http-equiv='refresh' content='0'>");
  }

}
if(isset($_POST['reassign'])){
  $reassign = mysqli_query($Connect,"UPDATE `projects` SET `mentor`='0', `active` = '0' WHERE `g_id` = '$g_id' ");
  echo("<meta http-equiv='refresh' content='0'>");
}
?>
<script>
function goBack() {
  window.history.back();
}
</script>
</body>
</html>
