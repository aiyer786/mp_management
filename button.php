<html>
    <body>
    <form method="post"><button  name="btn1" class="btn">Approve</button></form>
    <?php 
    $i=1;
    if(isset($_POST['btn1'])){
        echo 'btn1 was pressed';
        $i=2;
    }
    if($i=2){
        echo 'changed';
    }
    ?>

    
</body>

</html>