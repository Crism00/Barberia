<?php
namespace Barberia\Query;
use PDO;
use PDOException;
use Barberia\data\conexion;

class Ejecuta
{
    public function ejecutar($qry)
    {
        try
        {
            $cc = new conexion("barberia","root","admin");
            $objetoPDO = $cc-> getPDO();
            $objetoPDO-> query($qry);

            $cc-> desconectarDB();
        }
        catch(PDOException $e)
        {
            echo $e-> getMessage();
        }
    }
}
?>