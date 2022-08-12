<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../../css/bootstrap.min.css">
        <title>Registro</title>
    </head>
    <body>
        <div class="container">
            <?php
                use Barberia\Query\Select;
                require("../../vendor/autoload.php");

                $insert = new Select();
                extract($_POST);

                $subcadena = "SELECT nombre_usuario from cuentas";
                $cadena = "UPDATE CUENTA SET ap_materno='$ap_m' where nombre_usuario='XxAbelardoxX'";
                $insert->seleccionar($cadena);
                
                echo"<div class='alert alert-succes'>
                CLIENTE REGISTRADO</div>";
                header("location: /Proyecto/views/barbero.php");
            ?>
        </div>
    </body>
</html>