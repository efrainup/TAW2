<?php
    include_once '../Model/Alumno.php';
    
    switch ($_REQUEST["Accion"]){
        case "C":
            if(Create())
                header ("Location:../View/consula-alumno.php");
            
            break;
        case "D":
            if(Delete())
                header ("Location:../View/consula-alumno.php");
            break;
        default:
            throw new Exception("No se especificó ninguna acción");
    }

    function Create(){
        $alumno = new Alumno();
        
        $alumno->Nombre = $_REQUEST["Nombre"];
        $alumno->Matricula = $_REQUEST["Matricula"];
        $alumno->Id_Carrera = $_REQUEST["Carrera"];
        if($alumno->Create()){
            throw new Exception("Error al crear alumno");
        }
        
        return true;
    }
    
    function Delete(){
        $alumno = new Alumno();
        
        $alumno->Matricula = $_REQUEST["Matricula"];
        
        if($alumno->Delete()){
            throw new Exception("Error al crear alumno");
        }
        
        return true;
    }
    

?>
