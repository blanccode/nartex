<?php

class Posts extends Utils {

    public function getPost()
    {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];

            $sql = "SELECT * FROM articles WHERE id =$id";
            // dd($sql);
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $article  = $stmt->fetchAll();

            return ($article);
        }
    }

    public function executeQuery($sql, $data)
    {
        $stmt = $this->connect()->prepare($sql);
        $values = array_values($data);
        $types = str_repeat('s', count($values));
        // dd($values);

        $stmt->execute($values);
  
    }
    function updatePost($id,$data) {
    
            // $values = "";

            $sql = "UPDATE articles SET ";

            $i = 0;

            foreach ($data as $key => $value) {

                if ($i === 0) {
                    $sql = $sql . " $key=?";
                } else {
                    $sql = $sql . ", $key=?";
                }
                $i++;
            }
            $sql = $sql . " WHERE id=$id";
            // dd($sql);


            $stmt = $this->executeQuery($sql, $data);
            $id = $this->connect()->lastInsertId();
    }

    public function postArticle($table, $data)
    {
        // dd($data);
        // "INSERT INTO ratings SET name=?, stars=?, comment=?"
        $sql = "INSERT INTO $table SET ";

        $i = 0;

        foreach ($data as $key => $value) {

            if ($i === 0) {
                $sql = $sql . " $key=?";
            } else {
                $sql = $sql . ", $key=?";
            }
            $i++;
        }
        // dd($sql);
        $stmt = $this->executeQuery($sql, $data);
        $id = $this->connect()->lastInsertId();
        return $id;
    }

    public function delete($table, $id) {
        $sql = "DELETE FROM $table WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        // dd($stmt);
        $stmt = $this->executeQuery($sql, ['id' => $id]);
    }

}

?>