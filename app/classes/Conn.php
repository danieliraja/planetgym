<?php

/**
 * Created by PhpStorm.
 * User: danie
 * Date: 01/03/2017
 * Time: 15:14
 */
class Conn {

    private $host;
    private $db;
    private $user;
    private $pass;

    public function __construct($host, $db, $user, $pass) {
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
        $this->pass = $pass;
    }


    public function connect() {
        try {
            return new PDO("mysql:host={$this->host};dbname={$this->banco}", $this->usuario, $this->senha);
        } catch (Exception $ex) {
            echo "O erro {$ex->getMessage()} aconteceu por favor verifique na linha {$ex->getLine()}, sendo o codigo do erro {$ex->getCode()} no arquivo {$ex->getFile()}.";
            exit;
        }
    }
}