<?php
class Proyecto{
    private $listaproyectos;
    public function __construct(){
        $this->listaproyectos=array();
    }
    public function ObtenerDatos(){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="SELECT * FROM proyectos";
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();
        while( $fila =$resultado->fetchAll(PDO::FETCH_ASSOC)){
            $this->listaproyectos[]=$fila;
        }
        return $this->listaproyectos;
    }
    public function InsertarProyecto($datos){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="INSERT INTO Proyectos(Id,Clave,
        Nombre,Caratula,FechaCreacion,IdUsuario)
         VALUES(null,".$datos.")";
        $resultado=$cnn->prepare( $consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function ActualizarProyecto($datos,$condicion){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="UPDATE proyectos SET 
        ".$datos." WHERE ".$condicion;
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }

    }
    public function EliminarProyecto($condicion){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="DELETE FROM Proyectos WHERE ".$condicion;
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
    public function ObtenerProyectoId($condicion){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="SELECT * FROM proyectos WHERE ".$condicion;
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();
        while( $fila =$resultado->fetchAll(PDO::FETCH_ASSOC)){
            $this->listaproyectos[]=$fila;
        }
        return $this->listaproyectos;
    }
}
?>
