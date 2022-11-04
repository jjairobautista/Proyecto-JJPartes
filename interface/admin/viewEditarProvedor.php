<?php
require_once '../../dao/daoRegistroProvedor.php';
require_once '../../modelo/modeloRegistroProvedor.php';

$rs = daoRegistroProvedor::buscarProvedor($_GET['id']);
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
    <link rel="stylesheet" href="../css/stilos.css">

    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/2082/2082841.png">

    <title>Editar Proveedor</title>
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
            <div class="col-md-2" style="border-right: 1px solid #bbb;">
                <div class="col">
                    <a href="indexAdmin.php?rs=nada" class="btn btn-danger" style="width: 100% ;margin: 5px">Inicio</a>
                </div>
                <div class="col">
                    <a href="viewRegistroProveedor.php" class="btn btn-danger" style="width: 100% ;margin: 5px">Resgitrar
                        Provedor</a>
                </div>
                <div class="col">
                    <a href="viewConsultarProvedor.php" class="btn btn-danger" style="width: 100% ;margin: 5px">Consultar
                        Provedor</a>
                </div>
                <div class="col">
                    <a href="viewRegistroItem.php" class="btn btn-danger" style="width: 100% ;margin: 5px">Registrar
                        Articulo</a>
                </div>
            </div>

            <div class="col-md-10">
                <div class="col ">
                    <div class="conrainer bg-dark text-light p-3 " style="border-radius: 20px">
                        <form action="../../control/controladorAdmin.php?a=actualizar" method="post">
                            <div class="row">
                                <div class="col">
                                    <label for="idProvedor" class="form-label">Cedula</label>
                                    <input type="number" class="form-control" name="idProvedor" id="idProvedor" value="<?=$rs['cedula']?>" readonly>
                                    <br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label for="nombreProvedor" class="form-label">Nombres</label>
                                    <input type="text" class="form-control" name="nombreProvedor" value="<?=$rs['nombre']?>"  id="nombreProvedor"
                                           >
                                </div>
                                <div class="col">
                                    <label for="apellidoProvedor" class="form-label">Apellidos</label>
                                    <input type="text" class="form-control" name="apellidoProvedor"  value="<?=$rs['apellido']?>"  id="apellidoProvedor"
                                           >
                                    <br>
                                </div>
                            </div>
                            <div class="col">
                                <label for="empresa" class="form-label">Empresa</label>
                                <input type="text" class="form-control" name="empresa" id="empresa"  value="<?=$rs['empresa']?>"  >
                                <br>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="correoProvedor" class="form-label">Correo</label>
                                    <input type="email" class="form-control" name="correoProvedor" value="<?=$rs['correo']?>"  id="correoProvedor" >
                                    <br>
                                </div>
                                <div class="col">
                                    <label for="telefono" class="form-label">Telefono</label>
                                    <input type="number" class="form-control" name="telefono" value="<?=$rs['telefono']?>"  id="telefono" >
                                    <br>
                                </div>
                            </div>
                            <button type="submit" style="width: 400px;" class="btn btn-primary m-3" >
                                ACTUALIZAR PROVEDOR
                            </button>
                            <a href="viewConsultarProvedor.php?rs=nada" class="btn btn-success m-3"> Volver</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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