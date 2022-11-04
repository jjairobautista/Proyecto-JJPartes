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

    <title>Login Administrador</title>
</head>
<body>
<br>
<div class="container" style="background-color:darkgrey; border-radius: 20px">
    <div class="row">
        <div class="col-md-12  text-center text-light" style="border-radius: 20px">
            <h1>Acceso a JJ Partes Adiminstrador</h1>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-5">
            <img src="../../img/Admin.png" width="100%" height="390px" alt="">

        </div>
        <div class="col-md-7">
            <br><br><br>
            <form action="../admin/indexAdmin.php?rs=nada" method="post">
                <div class="form-group">
                    <br>
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="text" class="form-control" name="userLogin" id="userLogin"
                           aria-describedby="emailHelp" placeholder="Enter email">
                    <br>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" onchange="loginAdmin()" class="form-control" name="passLogin" id="passLogin"
                           placeholder="Password">
                </div>
                <br>

                <button type="submit" id="btnInicioSesion"  class="btn btn-primary" disabled>Iniciar Sesion</button>
            </form>
        </div>
        <script>
            function loginAdmin() {
                var user = document.getElementById("userLogin");
                var pass = document.getElementById("passLogin");
                var btnInicioSesion = document.getElementById("btnInicioSesion")
                if (user.value == "admin" && pass.value == "admin") {

                    btnInicioSesion.disabled = false;
                } else {
                    alert("Credenciales incorrectas, por favor intente de nuevo")
                    btnInicioSesion.disabled = true;

                }
            }
        </script>
    </div>
    <br>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

</body>
</html>