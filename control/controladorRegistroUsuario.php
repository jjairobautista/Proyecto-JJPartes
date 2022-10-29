<?php

use Couchbase\User;

require_once '../modelo/modeloRegistroUsuario.php';
require_once '../dao/daoRegistroUsuario.php';

session_start();

switch ($_GET['a']) {
    case 'registrar':
        $user = new modeloRegistroUsuario();
        $user->setCedula($_POST['idCliente']);
        $user->setNombre($_POST['nombreCliente']);
        $user->setApellido($_POST['apellidoCliente']);
        $user->setCiudad($_POST['ciudad']);
        $user->setDireccion($_POST['direccionCliente']);
        $user->setCorreo($_POST['correoCliente']);
        $pass = md5($_POST['clave']);

        $user->setPass($pass);
        $rs = daoRegistroUsuario::registrarUsuario($user);

        if ($_GET['vista'] == 'si'){
            header('Location: ../interface/index.php');
        }
        break;
}