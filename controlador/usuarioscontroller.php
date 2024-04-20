<?php
//require_once("modelo/proyecto.php");
class usuariosController{
    function __construct(){
    }
    public static function mostrarusuarios(){
        require_once("vista/usuarios/mostrar.php");
    } 
}
?>