<?php

include_once "Maestro.php";


include_once "AModel.php";
/**
 * Description of Usuario
 *
 * @author efra
 */
class Usuario extends AModel{
    public $Id_Usuario;
    public $nombre;
    public $usuario;
    public $password;
    public $administrador;
    
    public function Usuario(){
        parent::__construct();
    }
    
    public function Create() {
        parent::$con->query("call createUsuario('{$this->nombre}','{$this->usuario}','{$this->password}','{$this->administrador}');");  
    }

    public function Delete() {
        
    }

    public function Update() {
        
    }

    public function Read() {
        
    } 
    
    public function Login(){
        
        $result = $this->con->query("call searchUsuario('{$this->usuario}','{$this->password}');");
        if($result){
            $obj = $result->fetch_array();
            $this->Id_Usuario = $obj["Id_Usuario"];
            $this->nombre = $obj["Nombre"];
            $this->administrador = $obj["Administrador"];
            $result->free();
            $this->con->next_result();
            return true;
        }
        return false;
    }
    
    public function getMaestro(){
        $this->con->next_result();
         $result = $this->con->query("call getMaestro({$this->Id_Usuario});");
        if($result){
            $obj = $result->fetch_array();
            $obj2 = new Maestro();
            $obj2->Id_Maestro = $obj["Id_Maestro"];
            $obj2->Nombre = $obj["Nombre"];
            $obj2->NumeroEmpleado = $obj["NumeroEmpleado"];
            
            $result->free();
            $this->con->next_result();
            
            return $obj2;
        }
        $error = $this->con->errno;
        return $error;
    }
}

?>
