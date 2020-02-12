<?php

namespace db;

use PDO;
use PDOException;

class Database
{
    public function __construct()
    {
        try {
            $this->connection = new PDO('mysql:
            host=localhost:8889;dbname=testine;charset=utf8',
                'root', 'root');
            $this->connection->setAttribute(
                PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            print "DB Connection Failed: " . $e->getMessage();
        }
    }

    public function select($sql)
    {
        return $this->connection->query($sql)->fetchAll(PDO::FETCH_OBJ);
    }

    public function deleteInsert($sql, $name)
    {
        return $this->connection->prepare($sql)->execute($name);
    }


}