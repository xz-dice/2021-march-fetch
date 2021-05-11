<?php

namespace Fetch\Classes;

class Db {

    protected \PDO $db;

    function __construct()
    {
        $this->db = new \PDO('mysql:host=db; dbname=fetch', 'root', 'password');
    }

    public function getDb(): \PDO
    {
        return $this->db;
    }
}