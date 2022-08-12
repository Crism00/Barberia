<?php
namespace Barberia\data;
use PDO;
use PDOException;

class conexion
{
    public $objetoPDO= null;
    public $user="";
    public $pass="";
    public $dbname="";

    public function __construct(string $dbname, string $user, string $pass)
    {
        $this->dbname=$dbname;
        $this->user=$user;
        $this->pass=$pass;
    }
    public function getPDO()
    {
        try
        {
            $host = "mysql:host=localhost;dbname=$this->dbname";
            $objetoPDO = new PDO($host,$this->user,$this->pass);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        return $objetoPDO;
        {
            echo $e->getMessage();
        }
    }
    public function desconectarDB()
    {
        $objetoPDO=null;
    }
}
?>