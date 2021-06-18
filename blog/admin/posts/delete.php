<?php
include('../../path.php');


$id = $_GET['delete_id'];
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

    <script defer src=<?= $baseUrl . "/blog/admin/assets/app.js" ?>></script>

</head>

<body>

    <?php
    include $root .  '/blog/partials/header.php'
    ?>

    <div class="container mt-6">

        <div class="flex-center">
            <h4>Are you sure want to delete this article?</h4>

            <a class="delete-btn" href=<?= $baseUrl . '/blog/articles/index.php?delete_id=' . $id  ?>>Delete</a>

        </div>

        </section>

</body>