<?php
// $_SESSION['success'] = "Article was succesfully added, thank you!";

// function showMessage($info, $text) {
//     $_SESSION[$info] = $text;
//     if (isset($_SESSION[$info]) == 'success') {
//         echo "<h2 style='success'>" . $text . "</h2>";
//         unset($_SESSION[$info]);
//     } else if (isset($_SESSION[$info]) == 'error') {
//         echo "<h2 style='error'> error text here </h2>";
//         unset($_SESSION[$info]);
//     } else {

//     }

//     // exit;
//     unset($_SESSION[$info]);

// }
// if (isset($_SESSION['type']) == 'success') {
//     echo "<h2 style="  . $_SESSION['type'] . ">Article was succesfully added, thank you!</h2>";
// } else if (isset($_SESSION['type']) == 'error') {
//     echo "<h2 style="  . $_SESSION['type'] . ">There has an error accurred pls try again.</h2>";
// }

     if (isset($_SESSION['type']) && $_SESSION['type'] == 'success') {
      echo "<div class="  . $_SESSION['type'] . ">Article was succesfully added, thank you!</div>";

     } elseif (isset($_SESSION['type']) && $_SESSION['type'] == 'error') {
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