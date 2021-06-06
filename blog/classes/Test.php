<?php

class Test extends Database {

   public function getArticles() 
   {
    $sql = "SELECT * FROM articles";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    $titles = $stmt->fetchAll();

   
      return($titles);

   }

   public function getArticle() 
   {
   if (isset($_GET['id'])) {
      $id = $_GET['id'];

      $sql = "SELECT * FROM articles WHERE id =$id";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      $article  = $stmt->fetchAll();


      return($article);
   }

   }


}