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

    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "descripcion_carrera($nombreCarrera). -t 'halt'"`;
    exec($command, $descripcion);
    return $command;
}
