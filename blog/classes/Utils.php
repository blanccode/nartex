<?php

function dd($value)
{
   echo "<div class='article-pannel'> <pre style=' font-family:Roboto;'>" , print_r($value, true), "</pre></div>";
   die();
}

class Utils extends Database {

   public function getTable($table) 
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

   

   // public function create($table, $data) 
   // {
   //    // $sql = "SELECT $data FROM $table ";
   //    // $stmt = $this->connect()->prepare($sql);
   //    // $stmt->execute();
   //    // $titles = $stmt->fetchAll();
   //    // $data;
   //    $sql = "INSERT INTO ratings SET name=?, stars=?, comment=?)";
   //    $stmt = $this->connect()->prepare($sql);
   //    $stmt->execute([$name, $star, $comment]);
   // }



}