<?php
class Index{
    private $listaUsuarios;
    public function __construct() {
        $this-> listaUsuarios = array();
    }
    public function AutentificarUsuario($condicion){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="SELECT * FROM Usuarios where ".$condicion;
        $resultado=$cnn->prepare($consulta);
        $resultado->execute();
        while( $fila =$resultado->fetchAll(PDO::FETCH_ASSOC)){
            $this->listaUsuarios[]=$fila;
        }
        return $this->listaUsuarios;
    }
    public function RegistrarUsuario($datos){
        include_once('conexion.php');
        $cnn=new Conexion();
        $consulta="INSERT INTO Usuarios(Id,NombreCompleto,
        Correo,Password,FechaRegistro,TipoUsuario)
         VALUES(null,".$datos.")";
        $resultado=$cnn->prepare( $consulta);
        $resultado->execute();
        if($resultado){
            return true;
        }else{
            return false;
        }
    }
}
?>