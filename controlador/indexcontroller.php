<?php
require_once("modelo/index.php");
class indexController{
    function __construct(){
    }
    public static function index(){
        require_once("vista/index.php");
    }
    public static function contacto(){
        require_once("vista/contacto.php");
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
        $condicion  ="Correo='".$correo."' AND Password='".$password."'";
        $usuario=new Index();
        $usuarioLogueado=$usuario->AutentificarUsuario($condicion);
        session_start();
        foreach($usuarioLogueado as $key=>$value)
            foreach($value as $item):
                $_SESSION["correoUsuario"]=$item['Correo'];
                $_SESSION["nombreUsuario"]=$item['NombreCompleto'];
                $_SESSION["idUsuario"]=$item['Id'];
                $_SESSION["tipoUsuario"]=$item['TipoUsuario'];
        endforeach;
        header("location:".urlsite. "index.php?i=index");
    }
    public static function cerrarSesion(){
        session_start();
        if(session_destroy()){
            require_once("vista/index.php"); 
        }
    }
}
?>