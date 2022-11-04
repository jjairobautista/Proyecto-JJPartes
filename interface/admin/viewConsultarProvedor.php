<?php
 require_once '../../dao/daoRegistroProvedor.php';

if ($_GET['rs'] == 'exitosoEliminacion') {
    echo "<div class='col-md-12'>";
    echo "<div class='alert alert-success'>";
    echo "<button class='close' data-dismiss='alert'><span>&times;</span></button>";
    echo "<center><strong>Exitoso! </strong> Se eliminaron los datos correctamente.</center>";
    echo "</div>";
    echo "</div>";

}else if ($_GET['rs'] == 'exitosoActualizacion') {
    echo "<div class='col-md-12'>";
    echo "<div class='alert alert-success'>";
    echo "<button class='close' data-dismiss='alert'><span>&times;</span></button>";
    echo "<center><strong>Exitoso! </strong> Se actualizaron los datos correctamente.</center>";
    echo "</div>";
    echo "</div>";

}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/stilos.css">

    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/2082/2082841.png">

    <title>Registro Articulo</title>
</head>
<body>

<div class="container">
    <br>
    <div class="row">
        <div class="col-md-12">
            <img src="../../img/LOGO.jpg" style="width: 100%; height: 100px;padding-left: 35%; padding-right:35%"
                 alt="">
        </div>
        <hr>
        <div class="row">
            <div class="col-md-2" style="border-right: 1px solid #bbb;height: 100%">
                <div class="col">
                    <a href="indexAdmin.php?rs=nada" class="btn btn-danger" style="width: 100% ;margin: 5px">Inicio</a>
                </div>
                <div class="col">
                    <a href="viewRegistroProveedor.php" class="btn btn-danger" style="width: 100% ;margin: 5px">Resgitrar Provedor</a>

                </div>
                <div class="col">
                    <a href="viewConsultarProvedor.php?rs=nada" class="btn btn-danger" style="width: 100% ;margin: 5px">Consultar
                        Provedor</a>
                </div>
                <div class="col">
                    <a href="viewRegistroItem.php" class="btn btn-danger" style="width: 100% ;margin: 5px">Registrar Articulo</a>

                </div>

            </div>
            <div class="col-md-10">
                <div class="col text-center">
                    <br>
                    <h2>Lista De Provedore</h2>
                    <br>

                    <table class="table table-bordered" id="tabla">
                        <thead>
                        <tr>
                            <th scope="col">Cedula</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Empresa</th>
                            <th scope="col">Correo</th>
                            <th scope="col">Telefono</th>
                            <th scope="col" class="text-center" colspan="2">Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach (daoRegistroProvedor::buscarProvedores() as $fila): ?>
                            <tr>
                                <td><?=$fila['cedula']?></td>
                                <td><?=$fila['nombre']?> <?=$fila['apellido']?></td>
                                <td><?=$fila['empresa']?></td>
                                <td><?=$fila['correo']?></td>
                                <td><?=$fila['telefono']?></td>
                                <td><a class="btn btn-success btn-sm" href="viewEditarProvedor.php?id=<?=$fila['cedula']?>">Editar</a></td>
                                <td><a class="btn btn-danger btn-sm" href="../../control/controladorAdmin.php?a=eliminar&id=<?=$fila['cedula']?>" onclick="return confirm('¿Desea eliminar el registro?')">Eliminar</a></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    <footer>
        <div class="row text-center bg-black" id="footerr">

            <div class="col"><img src="../../img/LOGOBLACK.jpg" width="400px" height="200px" class="rounded float-end"
                                  alt=""></div>
        </div>
    </footer>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

</body>
</html>