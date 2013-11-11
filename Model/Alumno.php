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
    
    public $Id_Alumno;
    public $Nombre;
    public $Matricula;
    public $Id_Carrera;
    public $NombreCarrera;
    private $_Asistencia;
    
    public function __construct() {
        parent::AModel();
        
        
    }
    
    public function Create() {
        $this->con->query("call createAlumno('{$this->Nombre}','{$this->Matricula}','{$this->Id_Carrera}');");
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
        
        $resut = $this->con->query("call readAsistencia('{$this->Id_Alumno}','{$grupo}');");
        
        if($resut){
            $obj = $resut->fetch_array();
            
            $arr = json_decode($obj["Asistencia"]);
            
            //$arr[] = ;
            
            
            
        }else{
            return $this->con->errno;
        }
        
        
        
    }

   
}

?>
