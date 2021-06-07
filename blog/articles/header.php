<?php

// define('ROOT_DIR', realpath(__DIR__ . '/..'));

// $path = ROOT_DIR;

// echo($path);

?>


<header id="home">


    <nav id="nav" class="pointer nav">
        <div class="logo-container">
            <img src=<?= $baseUrl . "/blog/images/logo.png" ?> alt="'Nartex'-Firm-Logo" class="logo" width="120px" height="auto">
        </div>

        <ul class="flex-eng-container nav-links">

            <li class="1"><a href=<?= $baseUrl . "/blog/index.php" ?>>Home</a></li>
            <li class="3"><a href=<?= $baseUrl . "/blog/articles/index.php" ?>>Articles</a></li>
            <li class="4"><a href="#footer">Contact</a></li>
            <li class="4"><a class="blog-link" href=<?= $baseUrl . "/" ?>>Business</a></li>
            <div id="dot"></div>

        </ul>
        <ul class="flex-pol-container nav-links">

            <li class="1"><a href="#home">Strona główna</a></li>
            <li class="3"><a href="#about">O nas</a></li>
            <li class="2"><a href="#collection">Kolekcja</a></li>
            <li class="4"><a href="#footer">Kontakt</a></li>
            <div id="dot"></div>

        </ul>


        <div class="burger">
            <div class="1-line lines"></div>
            <div class="2-line lines"></div>
            <div class="3-line lines"></div>
        </div>
    </nav>

</header>