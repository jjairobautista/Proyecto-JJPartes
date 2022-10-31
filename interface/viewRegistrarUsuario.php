<?php
include "../dao/daoRegistroUsuario.php";

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


                    <div class="modal fade bg-primary" id="exampleModalToggle" aria-hidden="true"
                         aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Inicio De Session</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <input class="form-control" type="email" name="" id="" required>
                                    <br>
                                    <input class="form-control" type="password" name="" id="" required>
                                </div>
                                <div class="modal-footer ">
                                    <a href=""><img src="../img/iniciarSesion.png" width="60px" height="60px"
                                                    alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a class="btn btn-success m-2" data-bs-toggle="modal" href="#exampleModalToggle"
                       role="button">LOGIN</a>

                </div>
            </div>
        </nav>
    </div>
    <hr>
    <div class="container bg-dark text-light p-5" id="formRegistro">
        <form action="../control/controladorRegistroUsuario.php?a=registrar&vista=si" method="post">

            <div class="row">
                <div class="col">
                    <label for="idCliente" class="form-label">Cedula</label>
                    <input type="number" class="form-control" name="idCliente" id="idCliente" required>
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="nombreCliente" class="form-label">Nombres</label>
                    <input type="text" class="form-control" name="nombreCliente" id="nombreCliente" required>
                </div>
                <div class="col">
                    <label for="apellidoCliente" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="apellidoCliente" id="apellidoCliente" required>
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="ciudad" class="form-label">Ciudad</label>
                    <select class="form-select" name="ciudad" required>
                        <option selected disabled>Seleccione la Ciudad</option>
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
                    <input type="text" class="form-control" name="direccionCliente" id="direccionCliente" required>
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label for="correoCliente" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="correoCliente" id="correoCliente" required>
                    <br>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="clave" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="clave" id="clave" required>
                </div>
                <div class="col">
                    <label for="confirmaClave" class="form-label">Confirme Contraseña</label>
                    <input type="password" class="form-control" name="confirmaClave" id="confirmaClave"
                           onchange="registrar()" required>
                    <br>
                </div>
                <script>
                    function registrar() {
                        var password = document.getElementById("clave");
                        var passwordConfirm = document.getElementById("confirmaClave");
                        var btnRegitsrar = document.getElementById("btnRegistrar");
                        if (password.value == passwordConfirm.value) {
                            btnRegitsrar.disabled = false;
                        } else {
                            alert("Las constraseñas no coinciden");
                            btnRegitsrar.disabled = true;
                        }
                    }

                </script>
            </div>
            <div class="row">
                <div class="col text-center">
                    <button type="submit" id="btnRegistrar" style="width: 200px;" class="btn btn-primary" disabled>
                        REGISTRARME
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