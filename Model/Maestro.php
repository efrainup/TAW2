<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mastro
 *
 * @author efra
 */
include_once 'AModel.php';
include_once 'Grupo.php';
include_once 'Materia.php';

class Maestro extends AModel {
    public $Id_Maestro;
    public $Nombre;
    public $NumeroEmpleado;
    
    public function Create() {
        
    }

    public function Delete() {
        
    }

    public function Read() {
        
    }

    public function Update() {
        
    }    //put your code here
    
    public function getGrupos(){
        $this->con->next_result();
        $result = $this->con->query("call traerGrupos({$this->Id_Maestro});");
        if($result){
            $arr = array();
            while($obj = $result->fetch_array()){
            
            $ret = new Grupo();
            $ret->Id_Grupo = $obj["Id_Grupo"];
            $ret->Nombre = $obj["Nombre"];
            $ret->Materia = $obj["Materia"];
            
            $arr[] = $ret;
            }
            $result->free();
            return $arr;
        }else{
            return $this->con->errno;
        }
    }
    
    public function getMaterias(){
        $this->con->next_result();
        $result = $this->con->query("call traerMaterias({$this->Id_Maestro});");
        if($result){
            $array = array();
            while($row = $result->fetch_array()){
                $materia = new Materia();
                $materia->Nombre = $row["Nombre"];
                $array[] = $materia;
            }
            $result->free();
            
            return $array;
        }else{
            return $this->con->errno;
        }
    }
    
}

?>
