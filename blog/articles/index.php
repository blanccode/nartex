<?php

include('../../path.php');
// include($root . '/blog/autoloader-abc.php');
include($root . '/blog/classes/Database.php');
include($root . '/blog/classes/Utils.php');
include($root . '/blog/classes/Posts.php');

session_start();

if (isset($_GET['delete_id'])) {
    // dd($_GET);

    $id = $_GET['delete_id'];
    unset($_GET['delete_id']);
    $posts = new Posts();
    $posts->delete('articles', $id);
    $_SESSION['type'] = "delete";
    // header('Location:' . $baseUrl . '/blog/articles/index.php');
    // exit();
}

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

    <?php
    include $root . '/blog/partials/message.php';
    ?>
    <main class="box-shadow border" id="articles-mainsection" style=" padding: 1em 1em;">
        <?php
        include $root .  "/blog/partials/article-section.php";
        ?>
        <div class="flex-container">
            <a class="btn" href=<?= $baseUrl . '/blog/articles/create.php ' ?>>Write a Article</a>

        </div>

    </main>




</body>