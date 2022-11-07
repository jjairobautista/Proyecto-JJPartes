<?php



require_once '../modelo/modeloRegistroUsuario.php';
require_once '../dao/daoRegistroUsuario.php';

switch ($_GET['a']) {
    case 'registrar':
        $user = new modeloRegistroUsuario();
        $cedula = $_POST['idCliente'];
        $user->setCedula(trim($_POST['idCliente']));
        $user->setNombre(trim($_POST['nombreCliente']));
        $user->setApellido(trim($_POST['apellidoCliente']));
        $user->setCiudad(trim($_POST['ciudad']));
        $user->setDireccion(trim($_POST['direccionCliente']));
        $user->setCorreo(trim($_POST['correoCliente']));
        $pass = md5(trim($_POST['clave']));
        $user->setPass($pass);

        $rs = daoRegistroUsuario::registrarUsuario($user);

        if ($_GET['vista'] == 'si') {
            session_start();

            header('Location: ../interface/index2.php?dato=iniceSesion');
        }
        break;
        case 'editar':
            $user = new modeloRegistroUsuario();
            $user->setCedula(trim($_POST['idCliente']));
            $user->setNombre(trim($_POST['nombreCliente']));
            $user->setApellido(trim($_POST['apellidoCliente']));
            $user->setCiudad(trim($_POST['ciudad']));
            $user->setDireccion(trim($_POST['direccionCliente']));
            $user->setCorreo(trim($_POST['correoCliente']));
            $rs = daoRegistroUsuario::actualizarUsuario($user);

            if ($rs){
                header("Location: ../interface/viewPerfilUsuario.php?id=".$_POST['idCliente']);

            }
            break;

}