<?php
session_start();
include_once "ISessionManager.php";
include_once '../Model/Usuario.php';


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
    private static $maestro;
    
    private static function isSomeoneLogged(){
        if(isset($_SESSION["Usuario"]) && $_SESSION["Usuario"]!=null)
            return true;
        else 
            return false;
    }


    public static function getNombreUsuario() {
        self::$usuario = unserialize($_SESSION["Usuario"]);
        return self::$usuario->nombre;
    }

    public static function setUsuario($usuario_) {
        self::$usuario = $usuario_;
        $_SESSION["Usuario"] = serialize($usuario_);
        if(!$usuario_->administrador){
            $_SESSION["Maestro"] = serialize($usuario_->getMaestro());
        }
    }    //put your code here
    
    public static function getMaestro(){
        self::$maestro = unserialize($_SESSION["Maestro"]);
        return self::$maestro;
    }
}

?>
