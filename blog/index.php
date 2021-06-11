<?php

include("../path.php");
include($root . '/blog/classes/Database.php');
include($root . '/blog/classes/Utils.php');
include($root . '/blog/classes/Posts.php');

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
    <script defer src=<?= $baseUrl . "/blog/app.js" ?>></script>

</head>

<body>
    <?php
    include $root .  '/blog/partials/header.php'
    ?>
    <section>
        <img id="bubble-left" src="<?= $baseUrl . '/svg/bubble-left.svg' ?>" alt="">

        <div class="card mainblock">
            <div class="card-menu">
                <div class="browser-dot-container">
                    <div id="dot-1"  class="browser-dot"></div>
                    <div id="dot-2" class="browser-dot"></div>
                    <div id="dot-3" class="browser-dot"></div>
                </div>
                <!-- <div class="tab-container">
                    <div class="tab">wholesale</div>
                    <div class="tab">lifestyle</div>
                    <div class="tab">irgednwas</div>
                </div> -->

                <div class="card-menu-x-btn">x</div>
            </div>

            <div class="flex-container">
                <img class="article-image" src="./images/clothes.jpg" alt="">
                <p>
                    As a world player that specializes in the sale of stock clothing, shoes and accessories, "Nartex" brings products sourced through our heart and mind to your showrooms. Our company was founded in.... and since then it is our quest to offer our customers consistent, quality graded clothing.
                    <br>
                    <br>
                    We distribute all over Europe. Our regular and large consignments of closeouts, exports, liquidated textiles, excess goods and customer returns, enable us to supply merchandise of exceptional quality at unmatchable prices to our customers. Whether you are an online store, an outlet mall, a high-end chain or an e-commerce business, come join a reliable wholesale supplier to cater to the needs of your retail customers.
                    <br>
                    <br>
                    Our treasure trove includes famous brand-name clothes and attire for every occasion and season..
                    Shoes ranging from Cinderella's sandals to cozy stylish boots, and accessories so unique, that would ensure constant traffic to your store.
                </p>
            </div>

        </div>

        <?php
        include $root .  "/blog/partials/article-section.php"
        ?>

        <img id="bubble-right" src=<?= $baseUrl . '/svg/bubble-right.svg' ?> alt="">

    </section>



</body>