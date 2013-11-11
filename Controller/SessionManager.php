<?php

include_once "ISessionManager.php";
include_once '../Model/Usuario.php';

session_start();
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of SessionManager
 *
 * @author efra
 */
class SessionManager{
    private static $usuario;
    
    private static function isSomeoneLogged(){
        if(isset($_SESSION["Usuario"]) && $_SESSION["Usuario"]!=null)
            return true;
        else 
            return false;
    }


    public static function getNombreUsuario() {
        self::$usuario = $_SESSION["Usuario"];
        return self::$usuario->nombre;
    }

    public static function setUsuario($usuario_) {
        $_SESSION["Usuario"] = self::$usuario = $usuario_;
    }    //put your code here
}

?>
