<?php
include './scripts/autoloader.php';
// spl_autoload_register('myAutoloader');

// function myAutoloader($className) {
//     $path = "classes/";
//     $extension = ".php";
//     $fullPath = $path . $className . $extension;

//     include_once $fullPath;

// }

$testObj = new Test();


?>


<div class="card articles-section">

    <?php  ?>
        <h1> <?php $testObj->getArticles(); ?></h1>
    <?php  ?>

</div>