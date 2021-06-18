<?php

// include($root . '/blog/autoloader-abc.php');
// include($root . '/blog/classes/Database.php');
// include($root . '/blog/classes/Utils.php');
include($root . '/blog/classes/Users.php');
include($root . '/blog/classes/Ratings.php');



function getUserNmbr()
{
    $users = new Users;
    $users = $users->getTable('users');
    $n = 0;
    foreach ($users as $user) {
        $n++;
    }
    return $n;
}

function getPostsNmbr()
{
    $posts = new Posts;
    $posts = $posts->getTable('articles');
    $n = 0;
    foreach ($posts as $post) {
        $n++;
    }
    return $n;
}
function getRatingsNmbr()
{
    $ratings = new Ratings;
    $ratings = $ratings->getTable('ratings');
    $n = 0;
    foreach ($ratings as $rating) {
        $n++;
    }
    return $n;
}