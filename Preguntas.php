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


function pregunta7($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Agronomo";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Agronomo($nombreCarrera). -t 'halt'"`;
    exec($command);
    //echo $command;
    $data = $command;
    list($p7, $p8, $p9) = explode(",", $data);
    //var_dump($output);
    echo $p7;
}

function pregunta8($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Agronomo";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Agronomo($nombreCarrera). -t 'halt'"`;
    exec($command);
    //echo $command;
    $data = $command;
    list($p7, $p8, $p9) = explode(",", $data);
    //var_dump($output);
    echo $p8;
}

function pregunta9($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Agronomo";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Agronomo($nombreCarrera). -t 'halt'"`;
    exec($command);
    //echo $command;
    $data = $command;
    list($p7, $p8, $p9) = explode(",", $data);
    //var_dump($output);
    echo $p9;
}


function pregunta10($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Informatico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Informatico($nombreCarrera). -t 'halt'"`;
    exec($command);
    //echo $command;
    $data = $command;
    list($p10, $p11, $p12) = explode(",", $data);
    //var_dump($output);
    echo $p10;
}

function pregunta11($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Informatico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Informatico($nombreCarrera). -t 'halt'"`;
    exec($command);
    //echo $command;
    $data = $command;
    list($p10, $p11, $p12) = explode(",", $data);
    //var_dump($output);
    echo $p11;
}

function pregunta12($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Informatico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Informatico($nombreCarrera). -t 'halt'"`;
    exec($command);
    //echo $command;
    $data = $command;
    list($p10, $p11, $p12) = explode(",", $data);
    //var_dump($output);
    echo $p12;
}

function pregunta13($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Estadistico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Estadistico($nombreCarrera). -t 'halt'"`;
    exec($command);
    //echo $command;
    $data = $command;
    list($p13, $p14, $p15) = explode(",", $data);
    //var_dump($output);
    echo $p13;
}

function pregunta14($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Estadistico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Estadistico($nombreCarrera). -t 'halt'"`;
    exec($command);
    //echo $command;
    $data = $command;
    list($p13, $p14, $p15) = explode(",", $data);
    //var_dump($output);
    echo $p14;
}

function pregunta15($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Estadistico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Estadistico($nombreCarrera). -t 'halt'"`;
    exec($command);
    //echo $command;
    $data = $command;
    list($p13, $p14, $p15) = explode(",", $data);
    //var_dump($output);
    echo $p15;
}

function pregunta16($nombreCarrera)
{
    $nombreCarrera = "Licenciado_en_Fisica";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaLicenciado_en_Fisica($nombreCarrera). -t 'halt'"`;
    exec($command);
    //echo $command;
    $data = $command;
    list($p16, $p17, $p18) = explode(",", $data);
    //var_dump($output);
    echo $p16;
}

function pregunta17($nombreCarrera)
{
    $nombreCarrera = "Licenciado_en_Fisica";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaLicenciado_en_Fisica($nombreCarrera). -t 'halt'"`;
    exec($command);
    //echo $command;
    $data = $command;
    list($p16, $p17, $p18) = explode(",", $data);
    //var_dump($output);
    echo $p17;
}

function pregunta18($nombreCarrera)
{
    $nombreCarrera = "Licenciado_en_Fisica";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaLicenciado_en_Fisica($nombreCarrera). -t 'halt'"`;
    exec($command);
    //echo $command;
    $data = $command;
    list($p16, $p17, $p18) = explode(",", $data);
    //var_dump($output);
    echo $p18;
}

function pregunta19($nombreCarrera)
{
    $nombreCarrera = "Licenciado_en_Matematicas";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaLicenciado_en_Matematicas($nombreCarrera). -t 'halt'"`;
    exec($command);
    //echo $command;
    $data = $command;
    list($p19, $p20, $p21) = explode(",", $data);
    //var_dump($output);
    echo $p19;
}

function pregunta20($nombreCarrera)
{
    $nombreCarrera = "Licenciado_en_Matematicas";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaLicenciado_en_Matematicas($nombreCarrera). -t 'halt'"`;
    exec($command);
    //echo $command;
    $data = $command;
    list($p19, $p20, $p21) = explode(",", $data);
    //var_dump($output);
    echo $p20;
}

function pregunta21($nombreCarrera)
{
    $nombreCarrera = "Licenciado_en_Matematicas";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaLicenciado_en_Matematicas($nombreCarrera). -t 'halt'"`;
    exec($command);
    //echo $command;
    $data = $command;
    list($p19, $p20, $p21) = explode(",", $data);
    //var_dump($output);
    echo $p21;
}


?>