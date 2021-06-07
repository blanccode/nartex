<?php

// $mypath = "/Applications/XAMPP/xamppfiles/htdocs/nartex/blog/autoloader-abc.php";
// require "$path";


include('../../path.php');
// set_include_path('.:/Applications/XAMPP/xamppfiles/lib/php');

// include $_SERVER["DOCUMENT_ROOT"] . '/nartex/blog/autoloader.php';
// include '../classes/Database.php';





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
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 2275810,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <script defer src="app.js"></script>

</head>

<body>
    <?php
    include $root .  '/blog/partials/header.php'

    ?>



    <?php
    include $root .  "/blog/partials/article-section.php"
    ?>


</body>