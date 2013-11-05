<?php

include_once "ISessionManager.php";

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
    
    public static function getNombreUsuario() {
        return self::$usuario->nombre;
    }

    public static function setUsuario($usuario_) {
        $_SESSION["Usuario"] = self::$usuario = $usuario_;
    }    //put your code here
}

?>
