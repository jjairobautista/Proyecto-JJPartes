<?php
if ($_GET['dato'] == 'error') {
    echo "<div class='col-md-12'>";
    echo "<div class='alert alert-danger'>";
    echo "<button class='close' data-dismiss='alert'><span>&times;</span></button>";
    echo "<center><strong>Error!</strong> Datos erroneos.</center>";
    echo "</div>";
    echo "</div>";

} else if ($_GET['dato'] == 'cerrar') {
    echo "<div class='col-md-12'>";
    echo "<div class='alert alert-info'>";
    echo "<button class='close' data-dismiss='alert'><span>&times;</span></button>";
    echo "<center><strong>Sesion Cerrada!</strong> Vuelva pronto.</center>";
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

    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/3085/3085411.png">

    <title>Login</title>
</head>
<body>
<br>
<div class="container" style="background-color:black; border-radius: 20px">
    <div class="row">
        <div class="col-md-12  text-center text-light" style="border-radius: 20px">
            <h1>Acceso a JJ Partes Usuarios</h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-5">
           <a href="index2.php">
               <img src="../img/LOGOBLACK.jpg" width="100%" height="390px" alt="">
           </a>

        </div>
        <div class="col-md-7">
            <br><br><br>
            <div>

                <form action="../control/controladorUser.php?a=login&vista=si" method="post">
                    <div class="form-group text-light">
                        <br>
                        <label for="exampleInputEmail1">Cedula</label>
                        <input type="number" class="form-control" name="userLogin" id="userLogin"
                               aria-describedby="emailHelp" placeholder="Enter email">
                        <br>
                    </div>
                    <div class="form-group text-light">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" onchange="loginAdmin()" class="form-control" name="passLogin"
                               id="passLogin"
                               placeholder="Password">
                    </div>
                    <br>

                    <button type="submit" id="btnInicioSesion" class="btn btn-primary m-4" disabled>Iniciar Sesion</button>
                    <a href="viewRegistrarUsuario.php" class="btn btn-success m-4"> Regisrtarme</a>

                </form>

            </div>
        </div>
    </div>
    <br>

    <script >
        if
    </script>
</div>

<script>
    function loginAdmin() {
        var user = document.getElementById("userLogin");
        var pass = document.getElementById("passLogin");
        var btnInicioSesion = document.getElementById("btnInicioSesion")
        if (user.value != null && pass.value != null) {

            btnInicioSesion.disabled = false;
        } else {
            btnInicioSesion.disabled = true;

        }

    }
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

</body>
</html>