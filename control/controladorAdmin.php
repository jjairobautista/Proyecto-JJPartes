<?php

require_once '../modelo/modeloRegistroProvedor.php';
require_once '../dao/daoRegistroProvedor.php';
switch ($_GET['a']) {

    case 'registroProvedor':
        $p = new modeloRegistroProvedor();
        $cedula = $_POST['idProvedor'];
        $nombre = $_POST['nombreProvedor'];
        $apellidos = $_POST['apellidoProvedor'];
        $empresa = $_POST['empresa'];
        $correo = $_POST['correoProvedor'];
        $telefono = $_POST['telefono'];

        $p->setCedula(trim($cedula));
        $p->setNombre(trim($nombre));
        $p->setApellidos(trim($apellidos));
        $p->setEmpresa(trim($empresa));
        $p->setCorreo(trim($correo));
        $p->setTelefono(trim($telefono));

        $rs = daoRegistroProvedor::insertarProvedor($p);
        if ($_GET['vista'] == 'si') {
            header('Location: ../interface/admin/indexAdmin.php?rs=exitoso');
        }
        break;

    case 'eliminar':
        $id = $_GET['id'];

        $rs = daoRegistroProvedor::eliminarProvedor($id);
        if ($rs) {
            header('Location: ../interface/admin/viewConsultaProvedor.php?rs=exitosoEliminacion');
        }
        break;

    case 'actualizar':

        $pr = new  modeloRegistroProvedor();

        $cedula = $_POST['idProvedor'];
        $nombre = $_POST['nombreProvedor'];
        $apellidos = $_POST['apellidoProvedor'];
        $empresa = $_POST['empresa'];
        $correo = $_POST['correoProvedor'];
        $telefono = $_POST['telefono'];

        $pr->setCedula(trim($cedula));
        $pr->setNombre(trim($nombre));
        $pr->setApellidos(trim($apellidos));
        $pr->setEmpresa(trim($empresa));
        $pr->setCorreo(trim($correo));
        $pr->setTelefono(trim($telefono));

        $rs = daoRegistroProvedor::actualizarProvedor($pr);
        if ($rs) {
            header('Location: ../interface/admin/viewConsultarProvedor.php?rs=exitosoActualizacion');

        }
        break;
}
