<?php

// include($root . '/blog/autoloader-abc.php');
include($root . '/blog/classes/Database.php');
include($root . '/blog/classes/Utils.php');
include($root . '/blog/classes/Posts.php');

// if (isset($_GET['delete_id'])) {
//     // dd($_GET);

//     $id = $_GET['delete_id'];
//     unset($_GET['delete_id']);
//     $posts = new Posts();
//     $posts->delete('articles', $id);
//     $_SESSION['type'] = "delete";
//     // header('Location:' . $baseUrl . '/blog/articles/index.php');
//     // exit();
// }

    if (isset($_GET['delete_id'])) {
        // dd($_GET);

        $id = $_GET['delete_id'];
        unset($_GET['delete_id']);
        $posts = new Posts();
        $posts->delete('articles', $id);
        $_SESSION['type'] = "info";
        header('Location:' . $baseUrl . '/blog/articles/index.php');
        exit();
    }

function getArticle() 
{
    $testObj = new Posts();
    $article = $testObj->getPost();
    $article = $article[0];
    return $article;
    
}

    
if (isset($_POST['submit-article'])) {
    // dd($_POST);
    unset($_POST['submit-article']);
    if (!empty($_FILES['image']['name'])) {

        $imageName = time() . '_' . $_FILES['image']['name'];

        $destination = $root . '/blog/images/' . $imageName;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);

        // dd($destination);

        if (!$result) {
            $_SESSION['type'] = "error";
            dd($_SESSION);
            header('Location:' . $baseUrl . '/blog/articles/index.php');
            exit();

        }
    }
    $_POST['image'] = $imageName;
    // dd($_POST['image']);

    $rating = new Posts();
    $rating = $rating->postArticle('articles', $_POST);
    // $_SESSION['message'] = "Article was succesfully added, thank you!";
    // dd($_POST);
    $_SESSION['type'] = "success";
    header('Location:' . $baseUrl . '/blog/articles/index.php');
    exit();
}


if (isset($_POST['update-article'])) {
    if (!empty($_FILES['image']['name'])) {

        $imageName = time() . '_' . $_FILES['image']['name'];

        $destination = $root . '/blog/images/' . $imageName;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        // dd($destination);

        if ($result) {
            $_POST['image'] = $imageName;
        } else {
            //error
        }
    }
    $id = $_POST['id'];
    // dd($id);
    unset($_POST['update-article'], $_POST['id']);
    $posts = new Posts();
    $posts->updatePost($id, $_POST);
    $_SESSION['type'] = "update";
    header('Location:' . $baseUrl . '/blog/articles/index.php');
    exit();
}






