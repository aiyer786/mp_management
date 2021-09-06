<?php
        
        if (isset($_POST['div_submit'])) {
            $division =strtoupper($_POST['division']);
           echo("<script>window.location = 'group.php?division=$division'</script>");
            
        }
        
   ?>