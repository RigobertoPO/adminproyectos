<?php
require_once("modelo/index.php");
class indexController{
    function __construct(){
    }
    public static function index(){
        require_once("vista/index.php");
    }
    public static function login(){
        require_once("vista/login.php");
    }
    public static function registrar(){
        require_once("vista/registro.php");
    }
    public static function autentificar(){
        $correo=$_REQUEST['correo'];
        $password=$_REQUEST['pass'];
        $condicion="Correo='".$correo."' and Password='".$password."'";
        $usuario=new Index();
        $usuarioLogueado=$usuario->AutentificarUsuario($condicion);
        require_once("vista/index.php");
    }
    public static function cerrarSesion(){
        session_start();
        if(session_destroy()){
            require_once("vista/index.php"); 
        }
    }
}
?>