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

                    <a class="btn  m-2" data-bs-toggle="modal" href="#exampleModalToggle"
                       role="button"><img src="../img/cerrar-sesion.png" width="30px" height="30px" alt=""></a>

                </div>
            </div>
        </nav>
    </div>
    <hr>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
</body>
</html>
