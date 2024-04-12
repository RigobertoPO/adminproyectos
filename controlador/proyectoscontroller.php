<?php
require_once("modelo/proyecto.php");
class proyectosController{
    private $model;
    function __construct()
    {
        $this->model=new Proyecto();
    }
    public static function mostrarproyectos(){
        $proyecto=new Proyecto();
        $datos=$proyecto->ObtenerDatos();
        require_once("vista/proyectos/mostrar.php");
    }
    public static function nuevo()
    {
        require_once("vista/proyectos/nuevo.php");
    }
    public static function guardar(){
        $clave=$_REQUEST['clave'];
        $nombre=$_REQUEST['nombre'];
        $caratula=$_REQUEST['caratula'];
        $fecha=date("Y-m-d");
        $idUsuario=1;//$_SESSION["IdUsuario"];
        $data="'".$clave."','".$nombre."','"
        .$caratula."','".$fecha."','".$idUsuario."'";
        $proyecto=new Proyecto();
        $datos=$proyecto->InsertarProyecto($data);
        header("location:".urlsite."index.php?p=mostrarproyectos");
    }
    public static function editar(){
        $id=$_REQUEST['id']; 
        $condicion="Id=".$id;
        $proyecto=new Proyecto();
        $dato=$proyecto->ObtenerProyectoId($condicion);
        require_once("vista/proyectos/editar.php");
    }
    public static function actualizar(){
        $id=$_REQUEST['id'];
        $clave=$_REQUEST['clave'];
        $nombre=$_REQUEST['nombre'];
        $condicion="Id=".$id;
        $data="Nombre='".$nombre."',Clave='".$clave."'";
        $proyecto=new Proyecto();
        $respuesta=$proyecto->ActualizarProyecto($data,$condicion);
        header("location:".urlsite."index.php?p=mostrarproyectos");
    }
    public static function eliminar(){
        $id=$_REQUEST['id'];
        $condicion="Id=".$id;
        $proyecto=new Proyecto();
        $respuesta=$proyecto->EliminarProyecto($condicion);
        header("location:".urlsite."index.php?p=mostrarproyectos");
    }

}
?>