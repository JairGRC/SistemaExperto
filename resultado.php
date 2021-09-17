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
    $pr6 = $_POST['p6'];
    $pr7 = $_POST['p7'];$pr8 = $_POST['p8'];$pr9 = $_POST['p9'];$pr10 = $_POST['p10'];
$pr11 = $_POST['p11'];$pr12 = $_POST['p12'];$pr13 = $_POST['p13'];$pr14 = $_POST['p14'];$pr15 = $_POST['p15'];
$pr16 = $_POST['p16'];$pr17 = $_POST['p17'];$pr18 = $_POST['p18'];$pr19 = $_POST['p19'];$pr20 = $_POST['p20'];
$pr21 = $_POST['p21'];$pr22 = $_POST['p22'];$pr23 = $_POST['p23'];$pr24 = $_POST['p24'];$pr25 = $_POST['p25'];
$pr26 = $_POST['p26'];$pr27 = $_POST['p27'];$pr28 = $_POST['p28'];$pr29 = $_POST['p30'];
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
    }  elseif ($pr7 == "si" && $pr8 == "si" && $pr9 == "si") {
        $var_1 = "Usted Tiene vocacion para: ";
        // echo $var="Usted Tiene alergia.";
        $nombreCarrera = "Ingeniero_Agronomo";
        $var = $nombreCarrera;
        $vardescripcion = descripcion($nombreCarrera);
    }elseif ($pr10 == "si" && $pr11 == "si" && $pr12 == "si") {
        $var_1 = "Usted Tiene vocacion para: ";
        // echo $var="Usted Tiene alergia.";
        $nombreCarrera = "Ingeniero_Informatico";
        $var = $nombreCarrera;
        $vardescripcion = descripcion($nombreCarrera);
    }elseif ($pr13 == "si" && $pr14 == "si" && $pr15 == "si") {
        $var_1 = "Usted Tiene vocacion para: ";
        // echo $var="Usted Tiene alergia.";
        $nombreCarrera = "Ingeniero_Estadistico";
        $var = $nombreCarrera;
        $vardescripcion = descripcion($nombreCarrera);
    }elseif ($pr16 == "si" && $pr17 == "si" && $pr18 == "si") {
        $var_1 = "Usted Tiene vocacion para: ";
        // echo $var="Usted Tiene alergia.";
        $nombreCarrera = "Licenciado_en_Fisica";
        $var = $nombreCarrera;
        $vardescripcion = descripcion($nombreCarrera);
    }elseif ($pr19 == "si" && $pr20 == "si" && $pr21 == "si") {
        $var_1 = "Usted Tiene vocacion para: ";
        // echo $var="Usted Tiene alergia.";
        $nombreCarrera = "Licenciado_en_Matematicas";
        $var = $nombreCarrera;
        $vardescripcion = descripcion($nombreCarrera);
    } elseif ($pr22 == "si" && $pr23 == "si" && $pr24 == "si") {
        $var_1 = "Usted Tiene vocacion para: ";
        // echo $var="Usted Tiene alergia.";
        $nombreCarrera = "Biologo";
        $var = $nombreCarrera;
        $vardescripcion = descripcion($nombreCarrera);
    } elseif ($pr25 == "si" && $pr26 == "si" && $pr27 == "si") {
        $var_1 = "Usted Tiene vocacion para: ";
        // echo $var="Usted Tiene alergia.";
        $nombreCarrera = "Biologo_Microbiologo";
        $var = $nombreCarrera;
        $vardescripcion = descripcion($nombreCarrera);
    } elseif ($pr28 == "si" && $pr29 == "si" && $pr30 == "si") {
        $var_1 = "Usted Tiene vocacion para: ";
        // echo $var="Usted Tiene alergia.";
        $nombreCarrera = "Biologo_Pesquero";
        $var = $nombreCarrera;
        $vardescripcion = descripcion($nombreCarrera);
    }     else {
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
        case "Ingeniero_Mecanico":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Ingeniero_Mecanico($nombreCarrera). -t 'halt'"`;
            break;
        case "Ingeniero_Metalurgico":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Ingeniero_Metalurgico($nombreCarrera). -t 'halt'"`;
            break;
        case "Ingeniero_de_Sistemas":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Ingeniero_de_Sistemas($nombreCarrera). -t 'halt'"`;
            break;  
        case "Ingeniero_de_Materiales":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Ingeniero_de_Materiales($nombreCarrera). -t 'halt'"`;
            break;   
        case "Ingeniero_de_Minas":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Ingeniero_de_Minas($nombreCarrera). -t 'halt'"`;
            break; 
        case "Ingeniero_Mecatronico":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Ingeniero_Mecatronico($nombreCarrera). -t 'halt'"`;
            break; 
        case "Ingeniero_Quimico":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Ingeniero_Quimico($nombreCarrera). -t 'halt'"`;
            break; 
        case "Ingeniero_Ambiental":
            $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_Ingeniero_Ambiental($nombreCarrera). -t 'halt'"`;
            break; 
    }
    exec($command, $descripcion);
    return $command;
}
