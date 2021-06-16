<?php
$posts = new Posts();
$articles = $posts->getTable("articles");
// $articles = getArticles();
// $id = $_GET['id']; 
?>
<div class="card articles-section ">



    <?php foreach ($articles as $article) :  ?>

        <div class="article-pannel box-shadow">
            <a href=<?= $baseUrl . "/blog/articles/article.php?id=" . $article['id'] ?>><?= $article['title'] ?>
                <!-- <br> -->
                <!-- <div class="admin-post-container"> -->
                <p><?= $article['text'] ?></p>
                <div class="btn-container">
                    <a class="" href=<?= $baseUrl . '/blog/articles/delete.php?delete_id=' . $article['id']  ?>>Delete</a>

                    <a class="" href=<?= $baseUrl . '/blog/admin/posts/update.php?id=' . $article['id'] ?>>Bearbeiten</a>

                </div>

                <!-- </div> -->
            </a>
        </div>

    <?php endforeach; ?>

        <div class="flex-container">
            <a class="btn border" href=<?= $baseUrl . '/blog/admin/posts/create.php ' ?>>Write a Article</a>
        </div>

</div>