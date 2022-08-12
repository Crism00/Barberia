<?php
    extract($_POST);
    use Barberia\Query\CITAS;

    require('../../vendor/autoload.php');
    session_start();

    $fecha = $_SESSION['fecha'];
    $_SESSION['horario'] = $horario;

    $cita = new CITAS();
    $cita-> CITA($fecha, $horario);

    header('location:../cita.php');
?>