<?php

function dd($value)
{
   echo "<div class='article-pannel'> <pre style=' font-family:Roboto;'>" , print_r($value, true), "</pre></div>";
   die();
}

class Test extends Database {

   public function getArticles($table) 
   {
    $sql = "SELECT * FROM $table";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute();
    $titles = $stmt->fetchAll();

   
      return($titles);

   }

   public function getTableRow($table , $row) 
   {
      $sql = "SELECT $row FROM $table ";
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

   public function create($table, $data) 
   {
      $sql = "SELECT $row FROM $table ";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute();
      $titles = $stmt->fetchAll();
      $data;
   }


}