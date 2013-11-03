<?php

include_once "./AModel.php";
/**
 * Description of Usuario
 *
 * @author efra
 */
class Usuario extends AModel{
    
    public $nombre;
    public $usuario;
    public $password;
    
    public function Usuario(){
        parent::__construct();
    }
    
    public function Create() {
        parent::$con->query("call inserUsuario('{$nombre}','{$usuario}','{$password}');");  
         
    }

    public function Delete() {
        
    }

    public function Update() {
        
    }    //put your code here
}

?>
