<?php

class Users extends Utils {

    public function getUserMail($email)
    {   
        if (isset($email)) {
            // $email = $_GET['id'];
            $sql = "SELECT * FROM users WHERE email ='$email'";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $user = $stmt->fetch();
            // dd($user);
            return $user;
        }
    }
    public function isAdmin($email)
    {   
        if (isset($email)) {
            // $email = $_GET['id'];
            $sql = "SELECT * FROM users WHERE email ='$email'";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            $user = $stmt->fetchAll();
            return $user;
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
   
            $stmt = $this->executeQuery($sql, $data);
            $id = $this->connect()->lastInsertId();
    }

    public function createUser($table, $data)
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
        // dd($sql);

        $id = $this->connect()->lastInsertId();
        
        // dd($id);

        return $id;
    }

    function delete($table, $id) {
        $sql = "DELETE FROM $table WHERE id=?";
        $stmt = $this->connect()->prepare($sql);
        // dd($stmt);
        $stmt = $this->executeQuery($sql, ['id' => $id]);
    }

}
