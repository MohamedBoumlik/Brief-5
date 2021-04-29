<?php
require_once __DIR__.'/connection.php';

class SalleModel{
    private $conn;
    function __construct()
    {
         $this->conn = Connetcion::config();
    }
}

