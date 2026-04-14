<?php
namespace App\Core;
require_once '../app/config/app.php';

class Database
{
    protected $connection;

    public function __construct()
    {
        $this->connection = mysqli_connect(
            DB_HOST,
            DB_USER,
            DB_PASSWORD,
            DB_NAME
        );

        // Untuk pengecekan, jika tidak terkoneksi database maka databasenya akan dinonaktifkan
        if ($this->connection) {
            die("Error to connect Database");
        }
    }
}

?>