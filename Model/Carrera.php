<?php

include_once "AModel.php";

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Carrera
 *
 * @author efra
 */
class Carrera extends AModel{
    //put your code here
    
    public $Nombre;
    public $Codigo; 
    
    public function __construct() {
        parent::__construct();
    }
    
    public function Create() {
        $retorno = $this->con->query("call createCarrera('{$this->Nombre}','{$this->Codigo}');");
        return $this->con->errno;
    }

    public function Delete() {
        
    }

    public function Read() {
        
    }

    public function Update() {
        
    }    
}

?>
