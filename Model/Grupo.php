<?php

include_once "Alumno.php";

include_once "AModel.php";

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Grupo
 *
 * @author efra
 */
class Grupo extends AModel{
    public $Id_Grupo;
    public $Nombre;
    public $Materia;
    public $Alumnos;
    
    public function Create() {
        
    }

    public function Delete() {
        
    }

    public function Read() {
        
    }

    public function Update() {
        
    }
    
    public function getAlumnos(){
        $result = $this->con->query("call GetAlumnos({$this->Id_Grupo});");
        if($result){
            $arr = array();
            while($obj = $result->fetch_array()){
            
            $ret = new Alumno();
            $ret->Id_Alumno = $obj["Id_Alumno"];
            $ret->Nombre = $obj["Nombre"];
            $ret->Matricula = $obj["Matricula"];
            $ret->NombreCarrera = $obj["NombreCarrera"];
            
            $arr[] = $ret;
            }
            return $arr;
        }else{
            return $this->con->errno;
        }
    }
}

?>
