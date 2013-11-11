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
    public $Id_Carrera;
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
        $result = $this->con->query("call readCarreras();");
        if($result){
            $arreglo = array();
            while($obj = $result->fetch_array()){
                $carrera = new Carrera();
                $carrera->Id_Carrera = $obj["Id_Carrera"];
                $carrera->Nombre = $obj["Nombre"];
                $carrera->Codigo = $obj["Codigo"];
                
                $arreglo[] = ($carrera);
            }
            $result->free();
            return $arreglo;
        }else{
            return $this->con->errno;
        }
    }

    public function Update() {
        
    }    
}

?>
