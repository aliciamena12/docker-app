<?php

namespace App\config;

use mysqli;

class Connection{

    private $host = "localhost";
    private $user = "dev";
    private $password = "dev";
    private $db = "app";
    private $port = "8989";
    private $connection;

    private $fields;
    private $table;
    private $join;
    private $where;
    private $having;

    function __construct()
    {
        $this->connection = new mysqli($this->host, $this->user, $this->password, $this->db, $this->port);
    }

    public function get(){

    }
}
