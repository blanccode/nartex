<?php

session_start();

include('../../path.php');
include($root . '/blog/autoloader-abc.php');
include($root . '/blog/classes/Database.php');
include($root . '/blog/classes/Utils.php');
include($root . '/blog/classes/Posts.php');

$posts = new Posts();
$article = $posts->getPost();
$article = $article[0];

if (isset($_POST['update-article'])) {
    $id = $_POST['id'];
    unset($_POST['update-article'], $_POST['id']);
    // dd($_POST);
    $posts->updatePost($id, $_POST);
    $_SESSION['type'] = "update";
    header('Location:' .$baseUrl. '/blog/articles/index.php');
    exit();
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

    <section>

        <div class="card mainblock">

            <form action="update.php" method="POST">
                <input name="id" type="hidden" value="<?= $article['id'] ?>">

                <div>
                    <div>
                        <input name="title" required type="text" value="<?= $article['title'] ?>">
                    </div>
                    <div>
                        <input name="meta" required type="text" value="<?= $article['meta'] ?>">
                    </div>

                    <div>
                        <textarea name="text" id="" rows="10"><?= $article['text'] ?></textarea>
                    </div>

                    <div>
                        <button type="submit" name="update-article">Submit</button>
                    </div>
                </div>

            </form>
        </div>



    </section>





</body>