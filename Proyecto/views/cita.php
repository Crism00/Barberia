<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/Proyecto/css/bootstrap.min.css">
        <title>Document</title>
    </head>
    <body>
        <?php session_start(); ?>
        <div class="container">
            <center>
                <H1>Citas</H1>
            </center>
            <div class="row">
                <div class="col-md-3">
                    <form action="/Proyecto/views/cita.php" method="POST">
                        <label for="fecha">Ingresa fecha "Año-Dia-Mes"</label>
                        <input type="date" name="fecha" id="fecha" class="form-select"><br>
                        <Button type="submit" class="btn btn-lg btn-primary" >Comprobar fecha</Button>
                    </form>
                </div>
                <div class="col-md-3">
                    <form action="/Proyecto/views/scripts/agendarCita.php" method="POST">
                        <?php
                            $fecha = '';
                            extract($_POST);
                            $_SESSION['fecha'] = $fecha;

                            use Barberia\Query\Select;
                            require('../vendor/autoload.php');

                            $query = new Select();
                            $cadena = "SELECT id_horario, horarios from HORARIOS LEFT JOIN (SELECT id_horario IH ,hora_cita HC, fecha, horarios.horarios HH 
                            from citas inner join horarios on horarios.id_horario=citas.hora_cita where fecha='".$_SESSION['fecha']."')
                            as HF on horarios.id_horario = HF.IH  where HF.HH is null;";
                            
                            $reg = $query->seleccionar($cadena);

                            echo 
                            "<div class='mb-3'>
                                <label class='control-label'>
                                    horario
                                </label>
                                <select name='horario' class='form-select'>";

                            foreach ($reg as $value) {
                                if (!isset($value-> hora_cita)) 
                                {
                                    echo "<option value=" . $value-> id_horario . "'>" . $value-> horarios . "</option>";
                                }
                            }

                            echo 
                            "   </select>
                            </div>";
                        ?>

                        <?php
                            if($_POST == null)
                            {
                            echo
                            "<div class='col-md-3'>
                                <button type='submit' class ='btn btn-lg btn-primary' disabled>Agendar Cita</button>
                            </div>";
                            }
                            else
                            {
                            echo
                            "<div class='col-md-3'>
                                <button type='submit' class ='btn btn-lg btn-primary'>Agendar Cita</button>
                            </div>";
                            }
                        ?>
                    </form>
                </div>
                <form method="POST" action="/Proyecto/views/scripts/agendarServicios.php">
                    <div class="row">
                        <div class="col-md-3">
                            <?php
                                $query1 = new Select();
                                $cadena1 = "SELECT * from servicios";
                                $reg1 = $query->seleccionar($cadena1);

                                echo 
                                "<div class='mb-3'>
                                    <label class='control-label'>
                                        Servicio 1:
                                    </label>
                                    <select name='serv1' class='form-select'>";
                                foreach ($reg1 as $value1) {
                                    if (!isset($value-> id_servicio)) {
                                        echo "<option value=" . $value1->id_servicio . "'>" . $value1->nombre_servicio . "</option>";
                                    }
                                }
                                echo 
                                "   </select>
                                </div>";
                            ?>
                            </div>
                            <div class="col-md-3">
                                <?php
                                    $query2 = new Select();
                                    $cadena2 = "SELECT * from servicios";
                                    $reg2 = $query->seleccionar($cadena2);
                                    echo 
                                    "<div class='mb-3'>
                                        <label class='control-label'>
                                            Servicio 2:
                                        </label>
                                        <select name='serv2' class='form-select'>";
                                    foreach ($reg2 as $value2) {
                                        if (!isset($value->id_servicio)) 
                                        {
                                            echo "<option value=" . $value2->id_servicio . "'>" . $value2->nombre_servicio . "</option>";
                                        }
                                    }
                                    echo 
                                    "   </select>
                                    </div>";
                                ?>
                            </div>
                            <div class="col-md-3">
                                <button type="submit" class="btn btn-lg btn-primary">Subir Servicios</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>