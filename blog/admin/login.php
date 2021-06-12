<?php

// session_start();

include("../../path.php");
// include($root . '/blog/autoloader-abc.php');
// include($root . '/blog/classes/Database.php');
// include($root . '/blog/classes/Utils.php');
// include($root . '/blog/classes/Posts.php');

?>

<!DOCTYPE html>
<html class="eng" lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="As a world player that specializes in the sale of stock clothing, &#34;Nartex&#34;
    brings products like famouse brand-name clothes and stylish boots and shoes to your showrooms, Whether you are an online store, an outlet mall, a high-end chain or an
    e-commerce business, come join a reliable wholesale supplier to cater to
    the needs of your retail customers.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nartex Berlin | Blog</title>
    <link id="stylesheet" rel="stylesheet" href=<?= $baseUrl . "/blog/styles.css" ?>>
    <link rel="shortcut icon" type="image/png" href=<?= $baseUrl . "/blog/images/favicon.png" ?>>
    <!-- Hotjar Tracking Code for http://nartex-berlin.de/ -->

    <script defer src=<?= $baseUrl . "/blog/app.js" ?>></script>
</head>

<body>
    <?php
    include $root .  '/blog/partials/header.php'
    ?>

    <div class="container mt-6">

        <div class="card register-form-container">
            <div class="mt-1 mb-1 container">
                <h4>Login as Admin:</h4>
            </div>
            <form action=<?= $baseUrl. "/blog/controller/admin.php"  ?> class="register-form" method="POST">

                <input name="id" type="hidden" value="">

                <input name="email" required type="text" placeholder="E-mail">

                <input name="password" required type="text" placeholder="Password">


                <button class="create-form-btn mb-1" type="submit" name="update-article">Login</button>

            </form>
        </div>
    </div>

</body>