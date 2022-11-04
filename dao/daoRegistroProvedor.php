<?php

require_once __DIR__ . '../../modelo/ClaseConexionBD.php';

class daoRegistroProvedor
{

    public static function buscarProvedores()
    {
        $connection = new claseConexion();
        $query = "select * from tbl_provedor";
        $rs = $connection->ejecutarConsulta($query);
        $connection->cerrarConexion();
        return $rs;
    }

    public static function buscarProvedor($id)
    {
        $connection = new claseConexion();
        $query = "select * from tbl_provedor where cedula = '$id'";
        $rs = $connection->ejecutarConsulta($query);
        $connection->cerrarConexion();
        return $rs[0];
    }

    public static function insertarProvedor($p)
    {
        $connection = new claseConexion();
        $query = "INSERT INTO public.tbl_provedor(
	cedula, nombre, apellido, empresa, correo, telefono)
	VALUES (" . $p->getCedula() . ", '" . $p->getNombre() . "', '" . $p->getApellidos() . "', '" . $p->getEmpresa() . "', '" . $p->getCorreo() . "', " . $p->getTelefono() . ")";
        $rs = $connection->ejecutarActualizacion($query);
        $connection->cerrarConexion();
        return $rs;
    }

    public static function eliminarProvedor($id)
    {
        $connection = new claseConexion();
        $query = "delete from tbl_provedor where cedula = " . $id;
        $rs = $connection->ejecutarActualizacion($query);
        $connection->cerrarConexion();
        return $rs;


    }

    public static function actualizarProvedor($p)
    {

        $connection = new claseConexion();
        $query = "	UPDATE tbl_provedor 
SET  nombre='" . $p->getNombre() . "', apellido='" . $p->getApellidos() . "', empresa='" . $p->getEmpresa() . "', correo='" . $p->getCorreo() . "', telefono= " . $p->getTelefono() . "
        WHERE cedula=  " . $p->getCedula();

        $rs = $connection->ejecutarActualizacion($query);
        $connection->cerrarConexion();
        return $rs;
    }
}