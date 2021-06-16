<?php
session_start();


include('../../path.php');
include($root . '/blog/controller/articles.php');

$article = getArticle();



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
        <div class="container">
            <h4>Update your Post</h4>
        </div>
        <div class="card form-container">

            <form action="update.php" class="create-form" method="POST" enctype="multipart/form-data">
                <input name="id" type="hidden" value="<?= $article['id'] ?>">


                <input name="title" required type="text" value="<?= $article['title'] ?>">

                <input name="meta" required type="text" value="<?= $article['meta'] ?>">
                <input name="image" type="file" value="<?= $article['image'] ?>">

                <textarea name="text" id="" rows="18"><?= $article['text'] ?></textarea>

                <button class="create-form-btn mb-1" type="submit" name="update-article">Update</button>

            </form>
        </div>
     


        </section>





</body>