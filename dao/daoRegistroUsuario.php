<?php
require_once '../modelo/ClaseConexionBD.php';

class daoRegistroUsuario
{

    public static function buscarCiudades()
    {
        $connection = new claseConexion();
        $query = "select c.id_ciudad, c.nombre_ciudad, d.id_departamento,d.nombre_departamento FROM tbl_departamento as d
                    JOIN tbl_ciudad as c oN c.id_departamento = d.id_departamento
					order by d.id_departamento asc;";
        $rs = $connection->ejecutarConsulta($query);
        $connection->cerrarConexion();
        return $rs;
    }

    public function buscarDepartamentos($idCiudad)
    {
        $connection = new claseConexion();
        $query = "select d.* FROM tbl_departamento as d
                    JOIN tbl_ciudad as c oN c.id_ciudad = " . $idCiudad . "
                    and c.id_ciudad = d.id_ciudad;";
        $rs = $connection->ejecutarConsulta($query);

        return $rs;
    }

    public static function buscarCliente($id)
    {
        $connection = new claseConexion();
        $query = "SELECT * FROM tbl_cliente WHERE cedula =" . $id;
        $rs = $connection->ejecutarConsulta($query);
        $connection->cerrarConexion();
        return $rs[0];
    }

    public static function registrarUsuario($user)
    {
        $connection = new claseConexion();
        $query = "INSERT INTO public.tbl_cliente(
	cedula, nombres, apellidos, ciudad, direccion, correo, clave)
	VALUES (" . trim($user->getCedula()) . ", '" . trim($user->getNombre()) . "','" . trim($user->getApellido()) . "','" . trim($user->getCiudad()) . "','" . trim($user->getDireccion()) . "','" . trim($user->getCorreo()) . "','" . trim($user->getPass()) . "')";
        $connection->ejecutarActualizacion($query);
        echo $connection->ejecutarActualizacion($query);
        $connection->cerrarConexion();

    }

    public static function actualizarUsuario($user)
    {
        $connection = new claseConexion();
        $query = "UPDATE public.tbl_cliente
	SET  nombres ='".$user->getNombre()."', apellidos='".$user->getApellido()."', ciudad='".$user->getCiudad()."', direccion='". $user->getDireccion()."', correo='".$user->getCorreo()."'	WHERE cedula =" . $user->getCedula();
        $rs = $connection->ejecutarActualizacion($query);
        $connection->cerrarConexion();
        return $rs;
    }

    public static function consultaLogin($user)
    {
        $connection = new claseConexion();
        $query = "SELECT clave FROM tbl_cliente WHERE cedula =" . $user;
        $rs = $connection->ejecutarConsulta($query);
        $connection->cerrarConexion();
        return $rs[0];


    }
}