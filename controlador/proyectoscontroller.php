<?php
require_once("modelo/proyecto.php");
class proyectosController{
    private $model;
    function __construct()
    {
        $this->model=new Proyecto();
    }
    public static function proyectos(){
        $proyecto=new Proyecto();
        $datos=$proyecto->ObtenerDatos();
        require_once("vista/proyectos/mostrar.php");
    }

}
?>