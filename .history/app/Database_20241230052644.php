<?php
namespace App;


class Database
{
    private $dbconn;
    public function __construct()
    {
        $this->dbconn = mysqli_connect("localhost","root","password","php_crud");
    }

    public function getContacts()
    {
        $sql = "SELECT * FROM contacts";
        $result = mysqli_query($this->dbconn, $sql);
        $contacts = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $contacts;
    }

    public function addContact($name_first, $name_last, $email, $birthday)
    {
        $sql = "INSERT INTO contacts (name_first, name_last, email, birthday) VALUES ('$name_first', '$name_last', '$email', '$birthday')";
        mysqli_query($this->dbconn, $sql);
    }
}