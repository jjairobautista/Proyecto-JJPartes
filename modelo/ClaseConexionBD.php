<?php
class claseConexion
{

    private $conec = "host=localhost dbname=JJ-Partes user=postgres password=12345";

    public function getConec()
    {
        return $this->conec;
    }

    public function __construct()
    {
        $conexion = pg_connect($this->conec);
    }


    public function ejecutarConsulta($pgquery){
        $conexion = pg_connect($this->conec);
        try {
            $contener = pg_query($conexion, $pgquery);
            $devolver = pg_fetch_all($contener);

        }
        catch (Exception $e) {
            // not a MySQL exception
            $e->getMessage();
            return $e;
        }
        return $devolver;
    }

    public function ejecutarActualizacion($pgquery)
    {
        $conexion = pg_connect($this->conec);
        try {
            $refresh = pg_query($conexion, $pgquery);
        } catch (\Exception $e) {
            $e->getMessage();
            return $e;
        }

        return $refresh;
    }

    public function cerrarConexion()
    {
        $conexion = pg_connect($this->conec);
        try {
            pg_close($conexion);
        } catch (\Throwable $e) {
            $e->getMessage();
            return $e;
        }
    }
}
