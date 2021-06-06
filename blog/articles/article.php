<?php
include $_SERVER["DOCUMENT_ROOT"] . '/nartex/blog/scripts/autoloader.php';
include $_SERVER["DOCUMENT_ROOT"] . '/nartex/blog/classes/Database.php';
include $_SERVER["DOCUMENT_ROOT"] . '/nartex/blog/classes/Test.php';

$testObj = new Test();
$article = $testObj->getArticle();
$article = $article[0];
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
    <link id="stylesheet" rel="stylesheet" href="/nartex/blog/styles.css">
    <link rel="shortcut icon" type="image/png" href="/nartex/blog/images/favicon.png">
    <!-- Hotjar Tracking Code for http://nartex-berlin.de/ -->

    <script defer src="app.js"></script>

</head>

<body>

    <?php
    include $_SERVER["DOCUMENT_ROOT"] . '/nartex/blog/partials/header.php'
    ?>

    <section>
        <img id="bubble-left" src="/nartex/blog/images/bubble-left.svg" alt="">

        <div class="card mainblock">
            <h1 style="padding-bottom: 2em;"><?= $article['title'] ?></h1>
            <div class="flex-container">

                <img class="article-image" src="/nartex/blog//images/clothes.jpg" alt="">
                <p>
                    <?= $article['text'] ?>
                </p>
            </div>

        </div>


        <img id="bubble-right" src="/nartex/blog/images/bubble-right.svg" alt="">

    </section>

</body>