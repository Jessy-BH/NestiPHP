<?php
class Database
{

    // information of the database
    private $dbName = 'nesti_admin';
    private $dbHost = 'localhost';
    private $dbUsername = 'root';
    private $dbUserPassword = '';

    protected $cont;
    public $table;

    public function connect()
    {
        // we first delete the former connection
        $this->cont = null;
        // then we try to connect to the database
        try {
            $this->cont = new PDO(
                "mysql:host=" . $this->dbHost . ";" . "dbname=" . $this->dbName,
                $this->dbUsername,
                $this->dbUserPassword
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        return $this->cont;
    }

    public function deco()

    {
        $this->cont = null;
        session_unset();
        session_destroy();
        header('location:' . BASE_URL . "index.php?loc=connection");
        die();
    }
}
