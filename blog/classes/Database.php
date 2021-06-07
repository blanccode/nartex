<?php

class Database {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $dbName = "Nartex";

    // private $host = "db5000979148.hosting-data.io";
    // private $user = "dbu629547";
    // private $password = "mazzaka12";
    // private $dbName = "dbs850957";
    
    protected function connect() {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        $pdo = new PDO($dsn, $this->user, $this->password);
        // $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}
