<?php
require_once("config.php");
require("controlador/indexcontroller.php");
require("controlador/proyectoscontroller.php");
require("controlador/usuarioscontroller.php");
if(isset($_GET['p'])):
    $metodo = $_GET['p'];
    if(method_exists('proyectosController',$metodo)):
        proyectosController::{$metodo}();
    endif;
else:
    if(isset($_GET['i'])):
        $metodo = $_GET['i'];
        if(method_exists('indexController',$metodo)):
            indexController::{$metodo}();
        endif;
    else:
        if(isset($_GET['u'])):
            $metodo = $_GET['u'];
            if(method_exists('usuariosController',$metodo)):
                usuariosController::{$metodo}();
            endif;
        else:
            indexController::index();
        endif;
    endif;
endif;
?>