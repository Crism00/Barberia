<?php
namespace Barberia\Query;
use PDO;
use PDOException;
use Barberia\data\conexion;

class Select
{
    public function seleccionar($qry)
    {
        try
        {
            $cc = new conexion("barberia","root","admin");
            $objetoPDO = $cc-> getPDO();
            $resultado = $objetoPDO-> query($qry);
            $fila = $resultado-> fetchALL(PDO::FETCH_OBJ);
            $cc-> desconectarDB();
            return $fila;
        }
        catch(PDOException $e)
        {
            echo $e-> getMessage();
        }
    }
}
?>