<?php

// define('ROOT_DIR', realpath(__DIR__ . '/..'));

// $path = ROOT_DIR;

include($root . '/blog/autoloader-abc.php');
include($root . '/blog/classes/Database.php');
include($root . '/blog/classes/Test.php');

$testObj = new Test();
$titles = $testObj->getArticles("articles");
$ratings = $testObj->getArticles("ratings");
$stars = $testObj->getTableRow("ratings", "stars");

// dd($ratings);

function printStar($number, $baseUrl)
    {
        for ($i = 1; $i <= $number; $i++) {
            echo "<img class=' star-icon ' src=" . $baseUrl . "/blog/images/star.png >";
        }
        echo '<br>';


    }

?>


<div class="card articles-section">

    <?php foreach ($titles as $title) :  ?>
        <div class="article-pannel">
            <a href=<?= $baseUrl . "/blog/articles/article.php?id=" . $title['id'] ?>><?= $title['title'] ?>
                <p><?= $title['text'] ?></p>
            </a>


        </div>
    <?php endforeach; ?>

    <div class="ratings-container">
        <?php foreach ($ratings as $key => $rating) : ?>
            <div class="ratings">
                <h4 style="color: white; margin-bottom:1em;"><?= $rating['name'] ?></h4>

                <?= printStar($rating['stars'], $baseUrl); ?>
                <p><?= $rating['comment'] ?></p>
            </div>

        <?php endforeach ?>
    </div>


</div>