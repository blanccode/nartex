<?php 

class Ratings extends Utils{

    public function executeQuery($sql, $data) {
        $stmt = $this->connect()->prepare($sql);
        dd($stmt);

        $values = array_values($data);
        $types = str_repeat('s', count($values));
        // dd($values);
        // $pos=1;

      
        // dd($data);
        $stmt->execute($values);
        $stmt->fetchAll();
        return $stmt;
        // dd($stmt);
    }

    public function getRatings($table)
    {
        $sql = "SELECT * FROM $table ORDER BY id DESC";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        $titles = $stmt->fetchAll();


        return ($titles);
    }

    public function postArticle($table, $data) {
        // "INSERT INTO ratings SET name=?, stars=?, comment=?"
        $sql = "INSERT INTO articles SET ";

        $i = 0;

        foreach ($data as $key => $value) {

            if($i === 0 ) {
                $sql = $sql . " $key=?";
            } else {
                $sql = $sql . ", $key=?";
            }
            $i++;
        }
        $stmt = $this->executeQuery($sql, $data);
        $id = $this->connect()->lastInsertId();
        return $id;
    }
       
    // }
    // public function postRating() {
    //     $sql = "INSERT INTO ratings(name, stars, comment) VALUES(:name, :stars, :comment)";
    //     $stmt = $this->connect()->prepare($sql);
    //     // array(':name' => "filler", ':stars' => "3", ':comment' => 'sddjhs')
    //     $stmt->execute(array(':name' => "filler", ':stars' => "3", ':comment' => 'sddjhs'));
    //     $id = $this->connect()->lastInsertId();
    //     return $id;
    // }
    public function postRating($input) {
        $sql = "INSERT INTO ratings(name,stars,comment) VALUES(:name,:stars,:comment)";
        $stmt = $this->connect()->prepare($sql);
        // array(':name' => "filler", ':stars' => "3", ':comment' => 'sddjhs')
        $stmt->execute($input);
        $id = $this->connect()->lastInsertId();
        return $id;
    }
}

?>