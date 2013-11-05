<?php


include_once "AModel.php";
/**
 * Description of Usuario
 *
 * @author efra
 */
class Usuario extends AModel{
    
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
            
            $this->nombre = $obj["Nombre"];
            $this->administrador = $obj["Administrador"];
            return true;
        }
        return false;
    }
}

?>
