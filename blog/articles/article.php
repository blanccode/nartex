<?php
session_start();

include('../../path.php');

include($root . '/blog/controller/articles.php');


// dd($id);
$article =  getArticle();


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
                    <h1 style=" "><?= $article['title'] ?></h1>

                    <div class="img-container">
                        <img class="article-image" src="<?= $baseUrl . '/blog/images/' . $article['image'] ?>" alt="">

                    </div>
                    <p>
                        <?= $article['text'] ?>

                    </p>

                    <?php if (isset($_SESSION['admin'])): ?>
                    <div class="btn-container">
                        <a class="" href=<?= $baseUrl . '/blog/articles/delete.php?delete_id=' . $article['id']  ?>>Delete</a>

                        <a class="" href=<?= $baseUrl . '/blog/admin/posts/update.php?id=' . $article['id'] ?>>Bearbeiten</a>

                    </div>
                    <?php endif ?>
                </div>
            </div>


        </div>



    </section>

</body>