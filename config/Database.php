<?php 

  // Database class
  class Database {
    private $user = 'localhost';
    private $host = 'root';
    private $password = '';
    private $dbname = '';
    private $conn;

    public function connect() {
      $this->conn = null;

      try {
        $this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname",
      $this->user, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch (PDOEXCEPTION $e) {
        echo 'Connection Error: ' . $e->getMessage();
      }
      return $this->conn;
    }
  }

?>