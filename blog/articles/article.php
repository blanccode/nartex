<?php

include('../../path.php');
// include($root . '/blog/autoloader-abc.php');
include($root . '/blog/classes/Database.php');
include($root . '/blog/classes/Utils.php');
include($root . '/blog/classes/Posts.php');

$testObj = new Posts();
$article = $testObj->getPost();
$article = $article[0];

$id = $_GET['id'];
// dd($id);


?>


<!DOCTYPE html>
<html class="eng" lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="description" content="<?= $article['meta'] ?> ">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $article['title'] ?></title>
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


        <div class="card mainblock">
            <div class="articles-container">
                <div class="flex-container">
                    <h1 style="padding-bottom: 1em; "><?= $article['title'] ?></h1>

                    <div class="img-container">
                        <img class="article-image" src=<?= $baseUrl . "/blog/images/clothes.jpg" ?> alt="">

                    </div>
                    <p>
                        <?= $article['text'] ?>

                    </p>

                    <div class="btn-container">
                        <a class="delete-btn" href=<?= $baseUrl . '/blog/articles/delete.php?delete_id=' . $id  ?>>Delete</a>

                        <a class="update-btn" href=<?= $baseUrl . '/blog/articles/update.php?id=' . $id  ?>>Bearbeiten</a>

                    </div>

                </div>
            </div>


        </div>



    </section>

</body>