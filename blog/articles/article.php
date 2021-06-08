<?php

include('../../path.php');
include($root . '/blog/autoloader-abc.php');
include($root . '/blog/classes/Database.php');
include($root . '/blog/classes/Test.php');

$testObj = new Test();
$article = $testObj->getArticle();
$article = $article[0];

?>


<!DOCTYPE html>
<html class="eng" lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="description" content="<?= $article['meta'] ?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $article['title']?></title>
    <link id="stylesheet" rel="stylesheet" href=<?= $baseUrl . "/blog/styles.css" ?>>
    <link rel="shortcut icon" type="image/png" href=<?= $baseUrl . "/blog/images/favicon.png" ?>>
    <!-- Hotjar Tracking Code for http://nartex-berlin.de/ -->

    <script defer src=<?= $baseUrl . "/blog/app.js" ?>></script>

</head>

<body>

    <?php
    include $root .  '/blog/partials/header.php'
    ?>

    <section>
        <img id="bubble-left" src="/nartex/blog/images/bubble-left.svg" alt="">

        <div class="card mainblock">
            <h1 style="padding-bottom: 1em;"><?= $article['title'] ?></h1>
            <div class="flex-container">

                <img class="article-image" src=<?= $baseUrl . "/blog/images/clothes.jpeg" ?> alt="">
                <p>
                    <?= $article['text'] ?>


                </p>
            </div>

        </div>


        <img id="bubble-right" src="/nartex/blog/images/bubble-right.svg" alt="">

    </section>

</body>