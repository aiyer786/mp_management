<?php
        
        if (isset($_POST['div_submit'])) {
            $division =strtoupper($_POST['division']);
           echo $division;
           echo("<script>window.location = 'division.php?division=$division'</script>");
            
        }
        
   ?>