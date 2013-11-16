<?php
session_start();
    include_once '../Model/Alumno.php';
    include_once '../Model/Asistencia.php';
    
    switch ($_REQUEST["Accion"]){
        case "C":
            if(Create())
                header ("Location:../View/consula-alumno.php");
            
            break;
        case "D":
            if(Delete())
                header ("Location:../View/consula-alumno.php");
            break;
        case "LISTA":
            Lista();
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
    
    function Lista(){
        $grupo = $_REQUEST["idGrupo"];
        $alumnos = unserialize($_SESSION["AsistenciaAlumnos"]);
        $asistencia = $_REQUEST["asistencia"];
        
        foreach($alumnos as $alumno){
            $asis = new Asistencia();
            $asis->Fecha = date("Y-m-d");
            $asis->Asistencia = 0;
            if(in_array($alumno->Id_Alumno, $asistencia))
                $asis->Asistencia = 1;
            $alumno->pasarLista($grupo,$asis);
        }
        
        header("Location:../View/Asistencia.php?Grupo={$grupo}");
    }
    

?>
