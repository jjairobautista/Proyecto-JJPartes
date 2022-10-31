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
            header("Location: ../interface/viewPerfilUsuario.php?id=".$_POST['userLogin']);

        } else {
            echo '<br> no se puede iniciarSesion';
        }
        break;
    case 'cerrar':
        session_start();
        session_destroy();
        header("Location: ../interface/index.php");
        break;
}