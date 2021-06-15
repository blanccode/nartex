<?php
session_start();

include($root . '/blog/classes/Database.php');
include($root . '/blog/classes/Utils.php');
include($root . '/blog/classes/Users.php');

include($root . '/blog/helpers/ValidateUser.php');


if (isset($_POST['register-user'])) {
    $validate = new ValidateUser($_POST);
    $errors = $validate->checkInput();
    $user = new Users;

    if (count($errors) === 0) {

        if (!empty($user->getUserMail($_POST['email']))) {
            $errors['email'] = 'E-mail already exists';
        } else {
            // dd('asjhasjk');
            $errors = registerUser($user);
            redirectRegisteredUser($baseUrl);
            // unset($_SESSION);
          
        }
    }
}

function logUserIn($postInput) {
    if (isset($postInput['login-user'])) {
        unset($postInput['login-user']);
        echo 'login...';
        $validate = new ValidateUser($postInput);
        $errors = $validate->checkInput();

        if (count($errors) !== 0) {
             return print_r($errors);
        } else {
            $users = new Users();
           $user =  $users->getUserMail($postInput['email']);
           if ($user && password_verify($postInput['password'], $user['password'])) {
               echo 'you are logged in ';

           } else {
               echo 'something';
                // dd($user);

           }
        }
    }
   
}

function registerUser($user) {
    unset($_POST['register-user']);
    unset($_POST['pw-repeat']);
   
    $_POST['admin'] = 0;
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $id = $user->createUser('users', $_POST);
}
function redirectRegisteredUser($baseUrl) {
    // $_SESSION['admin'] = 'Welcome admin';
    $_SESSION['admin'] = 'Welcome admin';

    header('Location:' . $baseUrl . '/blog/admin/dashboard.php');
    exit();
   
}
?>