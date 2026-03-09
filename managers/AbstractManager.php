<?php
namespace App\Managers;

use PDO;
use PDOException;

abstract class AbstractManager
{
    protected PDO $db;

    public function __construct()
    {
        try {
            $connexion = 'mysql:host=' . $_ENV['DB_HOST'] . ';port=3306;charset=' . $_ENV['DB_CHARSET'] . ';dbname=' . $_ENV['DB_NAME'];

            $this->db = new PDO(
                $connexion,
                $_ENV['DB_USER'],
                $_ENV['DB_PASSWORD'],
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
                ]
            );
        } catch (PDOException $e) {
            die('Erreur de connexion à la base de données : ' . $e->getMessage());
        }
    }
}