<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/stilos.css">
    <title>JJ Parte Inicio</title>
</head>

<body>
    <div class="container ">

        <div class="text center">
            <nav class="navbar navbar-expand-lg bg-light p-2">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="../img/LOGO.jpg" width="200px" height="80px" class="rounded float-end" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item" style="border-right: 1px solid #bbb;">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Link</a>
                            </li>
                            <li class="nav-item dropdown" style="border-right: 1px solid #bbb;">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Dropdown
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li>
                        </ul>
                        

                            <div class="modal fade bg-light" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Inicio De Session</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <input class="form-control" type="email" name="" id="">
                                            <br>
                                            <input class="form-control" type="password" name="" id="">
                                        </div>
                                        <div class="modal-footer ">
                                            <a href=""><img src="../img/iniciarSesion.png" width="60px" height="60px" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class="btn btn-success m-2" data-bs-toggle="modal" href="#exampleModalToggle" role="button">LOGIN</a>
                            <a href="#" class="btn btn-primary m-2">REGISTRARME</a>
                    
                    </div>
                </div>
            </nav>
        </div>
        <hr>
        <div class=" text-center">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/banner.jpg" width="500px" height="500px" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/banner1.jpg" width="50%" height="500px" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/kybbanner.png" width="50%" height="500px" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

        </div>
        <hr><br>
        <div class="row bg-dark">
            <div class="col">
                <img src="../img/NOSOTROS.jpg" width="500px" height="400px" class="d-block w-100" alt="...">

            </div>
            <div class="col bg-dark">
                <div class=" text-center text-light tras p-2">
                    <br><br><br>
                    <h2>¿Quienes Somos?</h2><br>
                    <p>Somos un grupo de asesores comerciales especializados en la suspencion, direcciones y amortiguadrores automotriz que te guiaremos con la compra de los repuestos para tu carro, no te lo pierdas.</p>
                </div>
            </div>

            <div class="col">
                <img src="../img/NOSOTROS2.jpg" width="500px" height="400px" class="d-block w-100" alt="...">

            </div>
        </div>
        <br>
        <div class="row text-center">
            <br><br>
            <h2 class="h1">Trabajamos Con Las Siguientes Marcas</h2>
            <br><br>
            <br><br>

            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/logos/CHEVROLET.jpg" width="200px" height="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">CHEVROLET</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/logos/FORD.jpg" width="200px" height="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">FORD</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/logos/HYUNDAI.jpg" width="200px" height="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">HYUNDAI</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/logos/JEEP.jpg" width="200px" height="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">JEEP</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/logos/PEUGEOT.jpg" width="200px" height="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">PEUGEOT</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/logos/RENAULT.jpg" width="200px" height="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">RENAULT</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/logos/TOYOTA.jpg" width="200px" height="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">TOYOTA</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/logos/SSANGYONG.png" width="200px" height="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">SSANGYONG</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row text-center">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/logos/WV.jpg" width="200px" height="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">VOLKSWAGEN</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/logos/citroen2.jpg" width="200px" height="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">CITROEN</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/logos/jaguar.png" width="200px" height="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">JAGUAR</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="../img/logos/HONDA1.jpg" width="200px" height="200px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">HONDA</p>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br>

        <footer>
            <div class="row bg-black" id="footerr">
                <div class="col">
                    <div class="mb-2"><br>
                        <label for="exampleFormControlInput1" class="form-label text-light">Nombre Completo</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Jhon Jairo Bautista">
                        <label for="exampleFormControlInput1" class="form-label text-light">Correo</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="jhonbautista9800@gmail.com">
                        <label for="exampleFormControlInput1" class="form-label text-light">Telefono</label>
                        <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="3114640388">
                    </div>
                    <div class="mb-2">
                        <label for="exampleFormControlTextarea1" class="form-label text-light">Descripcion</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div><br>
                </div>
                <div class="col"><br><br><br><img src="../img/LOGOBLACK.jpg" width="400px" height="200px" class="rounded float-end" alt=""></div>
            </div>
        </footer>
        <br>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>