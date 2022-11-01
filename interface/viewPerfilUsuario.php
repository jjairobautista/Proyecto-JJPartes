<?php
include '../dao/daoRegistroUsuario.php';
$id = $_GET['id'];
$ref = daoRegistroUsuario::buscarCliente($id);
$cedula = $ref['cedula'];

//$ref = daoRegistroUsuario::buscarCliente(1012456109);
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
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/3085/3085411.png">

    <title>Mi Perfil</title>
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
                            <a class="nav-link" aria-current="page" href="index.php?dato=bien">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" style="border-right: 1px solid #bbb;" href="#">Navega</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link disabled">Disabled</a>
                        </li>
                    </ul>

                    <a class="btn  m-2" href="../control/controlador.php?a=cerrar">
                        <img src="../img/cerrar-sesion.png" class="img-thumbnail" style="border-radius: 50%;" width="50px" height="50px" alt="">
                    </a>

                </div>
            </div>
        </nav>
    </div>
    <hr>
    <div class="container ">
        <div class="row">
            <div class="col-md-4" style="border-right: 1px solid #bbb;">
                <div class="col">
                    <div class="text-center">
                        <img src="../img/perfilUser.jpg" style="border-radius: 50%; width: 400px; height: 400px;"
                             class="img-thumbnail" alt="...">

                    </div>
                    <br>
                    <div class="card" style="width: 100%;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><?= $ref['cedula'] ?></li>
                            <li class="list-group-item"><?= $ref['nombres'] ?> <?= $ref['apellidos'] ?></li>
                            <li class="list-group-item"><?= $ref['correo'] ?></li>
                            <li class="list-group-item"><?= $ref['direccion'] ?></li>
                        </ul>
                    </div>
                    <br>
                    <div class="col p-4 text-center">
                        <a type="button" class="btn btn-info" href="viewEditarPerfilUser.php?id=<?= $cedula?>">Editar
                            Información</a>
                    </div>
                    <div class="col p-4 text-center">
                        <a type="button" class="btn btn-warning" href="">Cambio De Contraseña</a>
                    </div>

                </div>
            </div>
            <div class="col-md-8">

                <div class="col p-5">
                    <h2>Mis Compras</h2>
                    <br>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Compra: 01/02/2022
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Compra: 15/03/2022
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                    Compra: 26/09/2022
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                 data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <footer>
        <div class="row text-center bg-black" id="footerr">

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
