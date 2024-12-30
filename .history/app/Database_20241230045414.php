<?php
namespace App;


class Database
{
    private $dbconn;
    public function __construct()
    {
        $this->dbconn = mysqli_connect('localhost',"phpcrud","password","php_crud");
    }

    public function __destruct()
    {
        mysqli_close($this->dbconn);
    }
}