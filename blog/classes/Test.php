<?php

class Test extends Database {

   public function getArticles() 
   {
    $sql = "SELECT * FROM articles WHERE title";
    $stmt = $this->connect()->query($sql);
    $titles = $stmt->fetchAll();

    foreach($titles as $title) {
       echo $title['meta'] . '<br>';

    }

   }


}