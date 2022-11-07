<?php

require_once '../modelo/modeloRegistroUsuario.php';
require_once '../dao/daoRegistroUsuario.php';


switch ($_GET['a']) {

    case 'login':
        $user = $_POST['userLogin'];
        $pass = md5($_POST['passLogin']);
        $rs = daoRegistroUsuario::consultaLogin($user);
        $passBD = (trim($rs['clave']));

        echo "<br>" . trim($passBD);
        echo '<br>' . $pass;
        echo '<br>' . strlen(trim($passBD));
        echo '<br>' . strlen($pass);


        if (strcmp($passBD, $pass) == 0) {
            session_start();
            $_SESSION['userLogin'] = $user;
            $_SESSION['tiempoIngreso'] = time();
            $_SESSION['notificacion'] = 'NO';
            header("Location: ../interface/viewPerfilUsuario.php?id=".$_POST['userLogin']);

        } else {
            header("Location: ../interface/loginUsuario.php?dato=error");
        }
        break;
    case 'cerrar':
        session_start();
        session_destroy();
        header("Location: ../interface/loginUsuario.php?dato=cerrar");
        break;

    case 'correo':

        $destino = 'jjairobautista@ucompensar.edu.co';
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $telefono = $_POST['telefono'];
        $descripcion = $_POST['descripcion'];

        $contenido = "Nombre: " . $nombre . "\n Correo: " . $correo . "\n Telefono: " . $telefono .
            "\n Descripcion: " . $descripcion ;

        mail($destino, "Consulta De ".$nombre, $contenido );
        header("Location: ../interface/index2.php?id=".$_POST['cedula']);
        break;
}