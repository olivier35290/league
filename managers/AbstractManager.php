<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */


abstract class AbstractManager
{
    protected PDO $db;

    public function __construct()
    {
        $connexion = "mysql:host=".$_ENV["DB_HOST"].";port=3306;charset=".$_ENV["DB_CHARSET"].";dbname=".$_ENV["DB_NAME"];
        $this->db = new PDO(
            $connexion,
            $_ENV["DB_USER"],
            $_ENV["DB_PASSWORD"]
        );
    }
    
    
    private function getDatabaseInfo() : array
    {
        $handle = fopen(".env", "r");
        $lineNbr = 0;
        $info = [];

        if ($handle) {

            while (($line = fgets($handle)) !== false) {

                if($lineNbr === 3)
                {
                    $info["user"] = trim($line);
                }
                else if($lineNbr === 4)
                {
                    $info["password"] = trim($line);
                }
                else if($lineNbr === 6)
                {
                    $info["host"] = trim($line);
                }
                else if($lineNbr === 2)
                {
                    $info["db_name"] = trim($line);
                }

                $lineNbr++;
            }

            fclose($handle);
        }
        return $info;
    }

}    
