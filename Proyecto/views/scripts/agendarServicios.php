<?php
extract($_POST);
use Barberia\Query\CITAS;
require('../../vendor/autoload.php');
session_start();
$fecha = $_SESSION['fecha'];
$horario =$_SESSION['horario'];
    $servicios = new CITAS();
    $servicios->SERVICIO($serv1,$serv2);
?>