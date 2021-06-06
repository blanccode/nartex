<?php
include $_SERVER["DOCUMENT_ROOT"] . '/nartex/blog/scripts/autoloader.php';


$testObj = new Test();
$titles = $testObj->getArticles();
?>


<div class="card articles-section">

    <?php foreach ($titles as $title) :  ?>
        <div class="article-pannel">
            <a href="./articles/article.php?id=<?=$title['id'] ?>"><?= $title['title'] ?>
                <p><?= $title['text'] ?></p>
            </a>


        </div>
    <?php endforeach; ?>
</div>