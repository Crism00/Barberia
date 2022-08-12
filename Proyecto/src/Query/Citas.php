<?php
namespace Barberia\Query;
use Barberia\Query\Ejecuta;
use Barberia\Query\Select;

class Citas
{
    public function CITA($fecha, $horario)
    {
        $insert = new Ejecuta();
        $cadena = "INSERT INTO citas(Usuario_c, fecha, hora_cita, Status) VALUES('Invitado','$fecha',".intval($horario).",'Pendiente')";
        $insert->ejecutar($cadena);
    }
    public function SERVICIO($serv1,$serv2)
    {
        $fechas = $_SESSION['fecha'];
        $horario = $_SESSION['horario'];
        $select = new Select();
        $cadena1 = "SELECT * FROM CITAS where citas.fecha='$fechas' and citas.hora_cita=".intval($horario)."";

        echo"$cadena1";
        $select-> seleccionar($cadena1);

        foreach($select as $ola)
        {
            $cita=$ola['id_citas'];
            $insert2 = new Ejecuta();
            $cadena2 = "INSERT INTO servicio_cita(dt_cita,servicio_sc) VALUES(".intval($cita).", ".intval($serv1).")";
            $insert2->ejecutar($cadena2);
        }
    }
}
?>