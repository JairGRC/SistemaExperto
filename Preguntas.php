<?php


function pregunta1($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Agricola";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Agricola($nombreCarrera). -t 'halt'"`;
    exec($command);
    //echo $command;
    $data = $command;
    list($p1, $p2, $p3) = explode(",", $data);
    //var_dump($output);
    echo $p1;
}
function pregunta2($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Agricola";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Agricola($nombreCarrera). -t 'halt'"`;
    exec($command);
    //echo $command;
    $data = $command;
    list($p1, $p2, $p3) = explode(",", $data);
    //var_dump($output);
    echo $p2;
}
function pregunta3($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Agricola";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Agricola($nombreCarrera). -t 'halt'"`;
    exec($command);
    //echo $command;
    $data = $command;
    list($p1, $p2, $p3) = explode(",", $data);
    //var_dump($output);
    echo $p3;
}

function pregunta4($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Zooctenista";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Zooctenista($nombreCarrera). -t 'halt'"`;
    exec($command);
    //echo $command;
    $data = $command;
    list($p4, $p5, $p6) = explode(",", $data);
    //var_dump($output);
    echo $p4;
}

function pregunta5($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Zooctenista";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Zooctenista($nombreCarrera). -t 'halt'"`;
    exec($command);
    //echo $command;
    $data = $command;
    list($p4, $p5, $p6) = explode(",", $data);
    //var_dump($output);
    echo $p5;
}


function pregunta6($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Zooctenista";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Zooctenista($nombreCarrera). -t 'halt'"`;
    exec($command);
    //echo $command;
    $data = $command;
    list($p4, $p5, $p6) = explode(",", $data);
    //var_dump($output);
    echo $p6;
}


?>