<?php

// define('ROOT_DIR', realpath(__DIR__ . '/..'));

// $path = ROOT_DIR;

// include($root . '/blog/autoloader-abc.php');
// include($root . '/blog/classes/Database.php');
// include($root . '/blog/classes/Utils.php');
// include($root . '/blog/classes/Posts.php');

$table = new Utils();
$posts = new Posts();
$articles = $table->getTable("articles");
$ratings = $table->getTable("ratings");
$stars = $table->getTableRow("ratings", "stars");

// dd($ratings);

function printStar($number, $baseUrl)
{
    for ($i = 1; $i <= $number; $i++) {
        echo "<img class=' star-icon ' src=" . $baseUrl . "/blog/images/star.png >";
    }
    echo '<br>';
}

?>


<div class="card articles-section ">
    
    <div class="card-menu">

        <div class="browser-dot-container">
            <div id="dot-1" class="browser-dot"></div>
            <div id="dot-2" class="browser-dot"></div>
            <div id="dot-3" class="browser-dot"></div>
        </div>

        <div class="section-menu-x-btn card-menu-x-btn">x</div>

    </div>

    <?php foreach ($articles as $title) :  ?>

        <div class="article-pannel box-shadow">
            <a href=<?= $baseUrl . "/blog/articles/article.php?id=" . $title['id'] ?>><?= $title['title'] ?>
                <p><?= $title['text'] ?></p>
            </a>
        </div>

    <?php endforeach; ?>

</div>