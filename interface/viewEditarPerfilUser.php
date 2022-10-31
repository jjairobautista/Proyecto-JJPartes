<?php
include "../dao/daoRegistroUsuario.php";

$ref = daoRegistroUsuario::buscarCliente($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/stilos.css">

    <title>Document</title>
</head>

<body>

<div class="container">
    <div class="text center">
        <nav class="navbar navbar-expand-lg bg-light p-2">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../img/LOGO.jpg" width="200px" height="80px" class="rounded float-end" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item" style="border-right: 1px solid #bbb;">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" style="border-right: 1px solid #bbb;" href="#">Navega</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>
                    <a class="btn btn-success m-2" href="viewPerfilUsuario.php"
                       role="button">Volver</a>

                </div>
            </div>
        </nav>
    </div>
    <hr>
    <div class="container bg-dark text-light p-5" style="border-radius: 20px" id="formRegistro">
        <form action="../control/controladorRegistroUsuario.php?a=editar&vista=si" method="post">

            <div class="row">
                <div class="col">
                    <label for="idCliente" class="form-label">Cedula</label>
                    <input type="number" class="form-control" name="idCliente" id="idCliente" value="<?=$ref['cedula']?>" readonly>
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="nombreCliente" class="form-label">Nombres</label>
                    <input type="text" class="form-control" name="nombreCliente" id="nombreCliente" value="<?=$ref['nombres']?>">
                </div>
                <div class="col">
                    <label for="apellidoCliente" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="apellidoCliente" id="apellidoCliente" value="<?=$ref['apellidos']?>">
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="ciudad" class="form-label">Ciudad</label>
                    <select class="form-select" name="ciudad" required">
                        <option value="<?=$ref['ciudad']?>"><?=$ref['ciudad']?></option>
                        <?php foreach (daoRegistroUsuario::buscarCiudades() as $ciudad) :
                            ?>
                            <option value="<?= $ciudad['nombre_departamento'] ?> - <?= $ciudad['nombre_ciudad'] ?>"><?= $ciudad['nombre_departamento'] ?>
                                - <?= $ciudad['nombre_ciudad'] ?></option>

                        <?php endforeach;
                        ?>
                    </select> <br>
                </div>
                <script>
                    var select = document.getElementById('ciudad');
                    select.addEventListener('change',
                        function () {
                            var selectedOption = this.options[select.selectedIndex];
                            var ciudadSelecionada = selectedOption.value;
                            console.log(ciudadSelecionada);
                        });
                </script>

                <div class="col">
                    <label for="direccionCliente" class="form-label">Direccion</label>
                    <input type="text" class="form-control" name="direccionCliente" id="direccionCliente" value="<?=$ref['direccion']?>">
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="correoCliente" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="correoCliente" id="correoCliente" value="<?=$ref['correo']?>">
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <button type="submit" id="btnRegistrar" style="width: 200px;" class="btn btn-primary" >
                        ACTUALIZAR
                    </button>

                </div>
            </div>
        </form>
        <hr>
    </div>
    <br>


    <footer>
        <div class="row bg-black" id="footerr">

            <div class="col"><img src="../img/LOGOBLACK.jpg" width="400px" height="200px" class="rounded float-end"
                                  alt=""></div>
        </div>
    </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

</body>

</html>