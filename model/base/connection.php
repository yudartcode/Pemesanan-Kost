<?php
class Connection {
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $database = 'pemesanan_kost';

    public function Connection()
    {
        return mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }
}