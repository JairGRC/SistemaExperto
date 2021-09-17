<?php
global $GLOBALS;
$var_1 = "";
$vardescripcion = "";
$var = "";
if (isset($_POST['submit'])) {
    $pr1 = $_POST['p1'];
    $pr2 = $_POST['p2'];
    $pr3 = $_POST['p3'];
    $pr4 = $_POST['p4'];
    $pr5 = $_POST['p5'];
    $pr6 = $_POST['p6'];/*$pr7 = $_POST['p7'];$pr8 = $_POST['p8'];$pr9 = $_POST['p9'];$pr10 = $_POST['p10'];
$pr11 = $_POST['p11'];$pr12 = $_POST['p12'];$pr13 = $_POST['p13'];$pr14 = $_POST['p14'];$pr15 = $_POST['p15'];
$pr16 = $_POST['p16'];$pr17 = $_POST['p17'];$pr18 = $_POST['p18'];$pr19 = $_POST['p19'];$pr20 = $_POST['p20'];
$pr21 = $_POST['p21'];$pr22 = $_POST['p22']; */
    if ($pr1 == "si" && $pr2 == "si" && $pr3 == "si") {
        $var_1 = "Usted Tiene vocacion para: ";
        $nombreCarrera = "Ingeniero_Agricola";
        $var = $nombreCarrera;
        $vardescripcion = descripcion($nombreCarrera);
    } elseif ($pr4 == "si" && $pr5 == "si" && $pr6 == "si") {
        $var_1 = "Usted Tiene vocacion para: ";
        // echo $var="Usted Tiene alergia.";
        $nombreCarrera = "Ingeniero_Zooctenista";
        $var = $nombreCarrera;
        $vardescripcion = descripcion($nombreCarrera);
    }  else {
        $vardescripcion = "Carrera no encontrada";
    }
} else {
    
}

function descripcion($nombreCarrera)
{
    switch($nombreCarrera){
        case "Ingeniero_Agricola":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Ingeniero_Agricola($nombreCarrera). -t 'halt'"`;
            break;
        case "Ingeniero_Zooctenista":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Ingeniero_Zooctenista($nombreCarrera). -t 'halt'"`;
            break;
        case "Ingeniero_Agronomo":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Ingeniero_Agronomo($nombreCarrera). -t 'halt'"`;
            break;
        case "Ingeniero_Informatico":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Ingeniero_Informatico($nombreCarrera). -t 'halt'"`;
            break;   
        case "Ingeniero_Estadistico":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Ingeniero_Estadistico($nombreCarrera). -t 'halt'"`;
            break;  
        case "Licenciado_en_Fisica":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Licenciado_en_Fisica($nombreCarrera). -t 'halt'"`;
            break;   
        case "Licenciado_en_Matematicas":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Licenciado_en_Matematicas($nombreCarrera). -t 'halt'"`;
            break;      
        case "Biologo":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Biologo($nombreCarrera). -t 'halt'"`;
            break;  
        case "Biologo_Microbiologo":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Biologo_Microbiologo($nombreCarrera). -t 'halt'"`;
            break;  
        case "Biologo_Pesquero":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Biologo_Pesquero($nombreCarrera). -t 'halt'"`;
            break; 
        case "Licenciado_en_Administracion":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Licenciado_en_Administracion($nombreCarrera). -t 'halt'"`;
            break; 
        case "Contador_Publico":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Contador_Publico($nombreCarrera). -t 'halt'"`;
            break;     
        case "Economista":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Economista($nombreCarrera). -t 'halt'"`;
            break; 
        case "inicial":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_inicial($nombreCarrera). -t 'halt'"`;
            break;  
        case "primaria":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_primaria($nombreCarrera). -t 'halt'"`;
            break;  
        case "secundaria":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_secundaria($nombreCarrera). -t 'halt'"`;
            break; 
        case "ccomunicacion":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_ccomunicacion($nombreCarrera). -t 'halt'"`;
            break; 
        case "Medico_Cirujano":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Medico_Cirujano($nombreCarrera). -t 'halt'"`;
            break; 
        case "Cirujano_Dentista":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Cirujano_Dentista($nombreCarrera). -t 'halt'"`;
            break; 
        case "Antropologo_Social":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Antropologo_Social($nombreCarrera). -t 'halt'"`;
            break;
        case "Trabajador_Social":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Trabajador_Social($nombreCarrera). -t 'halt'"`;
            break;  
        case "Licenciado_En_Turismo":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Licenciado_En_Turismo($nombreCarrera). -t 'halt'"`;
            break; 
        case "Licenciado_En_Historia":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Licenciado_En_Historia($nombreCarrera). -t 'halt'"`;
            break; 
        case "Abogado":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Abogado($nombreCarrera). -t 'halt'"`;
            break;
        case "Enfermero":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Enfermero($nombreCarrera). -t 'halt'"`;
            break;
        case "Quimico_Farmaceutico":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Quimico_Farmaceutico($nombreCarrera). -t 'halt'"`;
            break; 
        case "Ingeniero_Industrial":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Ingeniero_Industrial($nombreCarrera). -t 'halt'"`;
            break;
        
    }
    exec($command, $descripcion);
    return $command;
}
