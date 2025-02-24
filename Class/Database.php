<?php

class Database 
{
    public $conn;
    
    public function __construct($config)
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');

        $this->conn = new PDO($dsn);
    }
    public function query($query, $params = [])
    {
       

        $statement = $this->conn->prepare($query);
        $statement->execute($params);

        return $statement;
    }
}

?>