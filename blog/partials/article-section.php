<?php

// define('ROOT_DIR', realpath(__DIR__ . '/..'));

// $path = ROOT_DIR;

    include($root . '/blog/autoloader-abc.php');
    include($root . '/blog/classes/Database.php');
    include($root . '/blog/classes/Test.php');

$testObj = new Test();
$titles = $testObj->getArticles();

?>


<div class="card articles-section">

    <?php foreach ($titles as $title) :  ?>
        <div class="article-pannel">
            <a href=<?= "/blog/articles/article.php?id=" . $title['id'] ?>><?= $title['title'] ?>
                <p><?= $title['text'] ?></p>
            </a>


        </div>
    <?php endforeach; ?>
</div>