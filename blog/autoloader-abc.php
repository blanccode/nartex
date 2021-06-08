<?php
// include('../path.php');
// include('../../blog/classes/Test.php');
spl_autoload_register('myAutoloader');

function myAutoloader($className) {
    $path2 = "/blog/classes/";
    $extension = ".php";
    $fileName = $path2 . $className . $extension;

    if (!file_exists($fileName)) {
        return false;
    }

    include_once $path2 . $className . $extension;

}

