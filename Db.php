<?php

use Envms\FluentPDO\Query;

class Db {
    public $connection;
    public $fluent;

    
    // подключение к бд
    public function getConnection() {
     $dsn = DB_DRIVER . ":host=" . HOST . ";port=" . PORT . ";dbname=" . DB;  
     $this->connection = new \PDO($dsn, USER, PASS);
     $this->fluent = new Envms\FluentPDO\Query($this->connection);
    // режим получения данных по умолчанию - режим ассоциативного массива
    // $this->connection->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
            return $this->fluent;


        }
        
} 


