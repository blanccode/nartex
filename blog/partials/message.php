<?php
// echo $_SESSION['type'];


      if (isset($_SESSION['type']) && $_SESSION['type'] == 'success') {

        echo  "<div class='success'>Article was succesfully added, thank you!</div>";
     }
      elseif (isset($_SESSION['type']) && $_SESSION['type'] == 'error') {
        echo  "<div class="  . $_SESSION['type'] . ">There has an error accurred pls try again.</div>";
     }
     elseif (isset($_SESSION['type']) && $_SESSION['type'] == 'update') {
        echo  "<div class='success'>Article was succesfully updated, thank you!</div>";
     }
     elseif (isset($_SESSION['type']) && $_SESSION['type'] == 'info') {
        echo  "<div class='info'>Article was succesfully deleted</div>";
     }
    
// showMessage('error','Article was succesfully added, thank you!');
// unset($_SESSION['error']);
// unset($_SESSION['message']);
unset($_SESSION['type']);

?>