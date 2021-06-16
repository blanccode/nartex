<?php
session_start();

include('../../../path.php');
include($root . '/blog/controller/articles.php');


// if ($_SERVER['REQUEST_URI'] ===  '/nartex/blog/articles/create.php') {
//     if (true) {
//         header('Location:' .$baseUrl. '/blog/admin/login.php');
//     }
// }

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
    <div id="site-wrapper">
        <?php
        include $root .  '/blog/admin/partials/header.php'
        ?>



            <div class="admin-section">

                <?php
                include $root .  '/blog/admin/partials/top-nav.php'
                ?>


                <div class="container mt-6">
                    <div class="container">
                        <h4>Create your Post</h4>
                    </div>
                    <div class="card form-container">

                        <form class="create-form" action="create.php" method="POST" enctype="multipart/form-data">
                            <input name="title" required type="text">
                            <input name="meta" required type="text">
                            <input name="image" type="file">

                            <textarea name="text" id="" rows="18"></textarea>

                            <button class="create-form-btn" type="submit" name="submit-article">Submit</button>

                        </form>
                    </div>

                </div>
            </div>
    </div>
</body>