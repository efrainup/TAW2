<?php

include_once "AModel.php";

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Alumno
 *
 * @author efra
 */
class Alumno extends AModel{
    
    public $Nombre;
    public $Matricula;
    private $_Asistencia;
    
    public function __construct() {
        parent::AModel();
        
        
    }
    
    public function Create() {
        $this->con->query("call createAlumno('{$this->Nombre}','{$this->Matricula}');");
        return $this->con->errno;
    }

    public function Delete() {
        $this->con->query("call deleteAlumno('{$this->Matricula}');");
        return $this->con->errno;
    }
    
    public function Read() {
        
        $result = $this->con->query("call readAlumnos(0);");
        if($result){
            $arreglo = array();
            while($obj = $result->fetch_array()){
                $alumno = new Alumno();
                $alumno->Nombre = $obj["Nombre"];
                $alumno->Matricula = $obj["Matricula"];
                
                $arreglo[] = ($alumno);
            }
            $result->free();
            return $arreglo;
        }else{
            return $this->con->errno;
        }
    }

    public function Update() {
        
    }
    
    /**
     * @abstract 
     * @param bool $asistencia Booleano que indica si asistió o no, NULL para indicar que no se pasó lista
     */
    public function pasarLista($grupo, $asistencia=NULL){
        
        //$fecha = new DateTime();
        
        
        
    }

   
}

?>
