<?php

    class DatabaseInfo
    {
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $dbName = "adamarc";
        public $con;
        function __construct()
        {
         
            $this->con = mysqli_connect($this->host, $this->user, $this->pass, $this->dbName) or die("Cannot connect to database!");
           
        }
    }
?>