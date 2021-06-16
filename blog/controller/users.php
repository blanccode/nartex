<?php
session_start();

include($root . '/blog/classes/Database.php');
include($root . '/blog/classes/Utils.php');
include($root . '/blog/classes/Users.php');

include($root . '/blog/helpers/ValidateUser.php');

$errors[] = "";
if (isset($_POST['register-user'])) {
    $validate = new ValidateUser($_POST);
    $errors = $validate->checkInput();
    

    if (count($errors) === 0) {
        $users = new Users;
        $user = $users->getUserMail($_POST['email']);
        if (!empty($user)) {
            $errors['email'] = 'E-mail already exists';
        } else {
            // dd($user);

            registerUser($users);
            // dd($users);
            $user = $users->getUserMail($_POST['email']);

            // dd($user);
            redirectVerifyedUser($baseUrl,$user);
            // unset($_SESSION);
          
        }
    }
}

// function logUserIn($_POST,$baseUrl) {
    if (isset($_POST['login-user'])) {
        unset($_POST['login-user']);
        // dd($_POST);
        $validate = new ValidateUser($_POST);
        $errors = $validate->checkInput();

        if (count($errors) !== 0) {
             return print_r($errors);
        } else {
            $users = new Users();
           $user =  $users->getUserMail($_POST['email']);
           if ($user && password_verify($_POST['password'], $user['password'])) {
               echo 'you are logged in ';
                // dd($user);

               redirectVerifyedUser($baseUrl,$user);

           } else {
               echo 'something';
                // dd($user);

           }
        }
    }
   
// }

function registerUser($users) {
    unset($_POST['register-user']);
    unset($_POST['pw-repeat']);
   
    $_POST['admin'] = 0;
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $users->createUser('users', $_POST);
    
}

function redirectVerifyedUser($baseUrl,$user) {
    // $_SESSION['admin'] = 'Welcome admin';
    // print_r($user['admin']);
    if ($user['admin'] == 0) {
        // dd($user);
        unset($_SESSION['admin']);
        $_SESSION['user'] = 'Welcome user';
        header('Location:' . $baseUrl . '/blog/index.php');
        exit();

    } elseif ($user['admin'] == 1) {
        $_SESSION['admin'] = 'Welcome admin';
        unset($_SESSION['user']);

        header('Location:' . $baseUrl . '/blog/admin/dashboard.php');
        exit();

    }

   
   
}
?>