<?php
class Constant{
    private  $host = "localhost";
    private $userName = "root";
    private $passWord = "";
    private $dbName ="MyContacts";

    function getHost(){
        return $this->host;
    }
    function getUserName(){
        return $this->userName;
    }
    function getPassWord(){
        return $this->passWord;
    }
    function getDbName(){
        return $this->dbName;
    }
}