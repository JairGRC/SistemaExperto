<?php

function pregunta1($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Agricola";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Agricola($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p1, $p2, $p3) = explode(",", $data);
    echo $p1;
}
function pregunta2($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Agricola";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Agricola($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p1, $p2, $p3) = explode(",", $data);
    echo $p2;
}
function pregunta3($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Agricola";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Agricola($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p1, $p2, $p3) = explode(",", $data);
    echo $p3;
}

function pregunta4($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Zooctenista";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Zooctenista($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p4, $p5, $p6) = explode(",", $data);
    echo $p4;
}

function pregunta5($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Zooctenista";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Zooctenista($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p4, $p5, $p6) = explode(",", $data);
    echo $p5;
}


function pregunta6($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Zooctenista";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Zooctenista($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p4, $p5, $p6) = explode(",", $data);
    echo $p6;
}


function pregunta7($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Agronomo";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Agronomo($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p7, $p8, $p9) = explode(",", $data);
    echo $p7;
}

function pregunta8($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Agronomo";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Agronomo($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p7, $p8, $p9) = explode(",", $data);
    echo $p8;
}

function pregunta9($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Agronomo";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Agronomo($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p7, $p8, $p9) = explode(",", $data);
    echo $p9;
}


function pregunta10($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Informatico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Informatico($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p10, $p11, $p12) = explode(",", $data);
    echo $p10;
}

function pregunta11($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Informatico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Informatico($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p10, $p11, $p12) = explode(",", $data);
    echo $p11;
}

function pregunta12($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Informatico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Informatico($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p10, $p11, $p12) = explode(",", $data);
    echo $p12;
}

function pregunta13($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Estadistico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Estadistico($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p13, $p14, $p15) = explode(",", $data);
    echo $p13;
}

function pregunta14($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Estadistico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Estadistico($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p13, $p14, $p15) = explode(",", $data);
    echo $p14;
}

function pregunta15($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Estadistico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Estadistico($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p13, $p14, $p15) = explode(",", $data);
    echo $p15;
}

function pregunta16($nombreCarrera)
{
    $nombreCarrera = "Licenciado_en_Fisica";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaLicenciado_en_Fisica($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p16, $p17, $p18) = explode(",", $data);
    echo $p16;
}

function pregunta17($nombreCarrera)
{
    $nombreCarrera = "Licenciado_en_Fisica";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaLicenciado_en_Fisica($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p16, $p17, $p18) = explode(",", $data);
    echo $p17;
}

function pregunta18($nombreCarrera)
{
    $nombreCarrera = "Licenciado_en_Fisica";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaLicenciado_en_Fisica($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p16, $p17, $p18) = explode(",", $data);
    echo $p18;
}

function pregunta19($nombreCarrera)
{
    $nombreCarrera = "Licenciado_en_Matematicas";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaLicenciado_en_Matematicas($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p19, $p20, $p21) = explode(",", $data);
    echo $p19;
}

function pregunta20($nombreCarrera)
{
    $nombreCarrera = "Licenciado_en_Matematicas";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaLicenciado_en_Matematicas($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p19, $p20, $p21) = explode(",", $data);
    echo $p20;
}

function pregunta21($nombreCarrera)
{
    $nombreCarrera = "Licenciado_en_Matematicas";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaLicenciado_en_Matematicas($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p19, $p20, $p21) = explode(",", $data);
    echo $p21;
}


function pregunta22($nombreCarrera)
{
    $nombreCarrera = "Biologo";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaBiologo($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p22, $p23, $p24) = explode(",", $data);
    echo $p22;
}

function pregunta23($nombreCarrera)
{
    $nombreCarrera = "Biologo";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaBiologo($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p22, $p23, $p24) = explode(",", $data);
    echo $p23;
}

function pregunta24($nombreCarrera)
{
    $nombreCarrera = "Biologo";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaBiologo($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p22, $p23, $p24) = explode(",", $data);
    echo $p24;
}

function pregunta25($nombreCarrera)
{
    $nombreCarrera = "Biologo_Microbiologo";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaBiologo_Microbiologo($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p25, $p26, $p27) = explode(",", $data);
    echo $p25;
}

function pregunta26($nombreCarrera)
{
    $nombreCarrera = "Biologo_Microbiologo";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaBiologo_Microbiologo($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p25, $p26, $p27) = explode(",", $data);
    echo $p26;
}

function pregunta27($nombreCarrera)
{
    $nombreCarrera = "Biologo_Microbiologo";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaBiologo_Microbiologo($nombreCarrera). -t 'halt'"`;
    exec($command);    
    $data = $command;
    list($p25, $p26, $p27) = explode(",", $data);  
    echo $p27;
}

function pregunta28($nombreCarrera)
{
    $nombreCarrera = "Biologo_Pesquero";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaBiologo_Pesquero($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p28, $p29, $p30) = explode(",", $data);
     
    echo $p28;
}

function pregunta29($nombreCarrera)
{
    $nombreCarrera = "Biologo_Pesquero";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaBiologo_Pesquero($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p28, $p29, $p30) = explode(",", $data);
     
    echo $p29;
}

function pregunta30($nombreCarrera)
{
    $nombreCarrera = "Biologo_Pesquero";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaBiologo_Pesquero($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p28, $p29, $p30) = explode(",", $data);
     
    echo $p30;
}

function pregunta31($nombreCarrera)
{
    $nombreCarrera = "Licenciado_en_Administracion";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaLicenciado_en_Administracion($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p31, $p32, $p33) = explode(",", $data);
     
    echo $p31;
}

function pregunta32($nombreCarrera)
{
    $nombreCarrera = "Licenciado_en_Administracion";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaLicenciado_en_Administracion($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p31, $p32, $p33) = explode(",", $data);
     
    echo $p32;
}

function pregunta33($nombreCarrera)
{
    $nombreCarrera = "Licenciado_en_Administracion";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaLicenciado_en_Administracion($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p31, $p32, $p33) = explode(",", $data);
     
    echo $p33;
}


function pregunta34($nombreCarrera)
{
    $nombreCarrera = "Contador_Publico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaContador_Publico($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p34, $p35, $p36) = explode(",", $data);
     
    echo $p34;
}

function pregunta35($nombreCarrera)
{
    $nombreCarrera = "Contador_Publico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaContador_Publico($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p34, $p35, $p36) = explode(",", $data);
     
    echo $p35;
}

function pregunta36($nombreCarrera)
{
    $nombreCarrera = "Contador_Publico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaContador_Publico($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p34, $p35, $p36) = explode(",", $data);
     
    echo $p36;
}

function pregunta37($nombreCarrera)
{
    $nombreCarrera = "Economista";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaEconomista($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p37, $p38, $p39) = explode(",", $data);
     
    echo $p37;
}

function pregunta38($nombreCarrera)
{
    $nombreCarrera = "Economista";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaEconomista($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p37, $p38, $p39) = explode(",", $data);
     
    echo $p38;
}
function pregunta39($nombreCarrera)
{
    $nombreCarrera = "Economista";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaEconomista($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p37, $p38, $p39) = explode(",", $data);
     
    echo $p39;
}

function pregunta40($nombreCarrera)
{
    $nombreCarrera = "inicial";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntainicial($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p40, $p41, $p42) = explode(",", $data);
     
    echo $p40;
}

function pregunta41($nombreCarrera)
{
    $nombreCarrera = "inicial";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntainicial($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p40, $p41, $p42) = explode(",", $data);
     
    echo $p41;
}

function pregunta42($nombreCarrera)
{
    $nombreCarrera = "inicial";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntainicial($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p40, $p41, $p42) = explode(",", $data);
     
    echo $p42;
}

function pregunta43($nombreCarrera)
{
    $nombreCarrera = "primaria";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaprimaria($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p43, $p44, $p45) = explode(",", $data);
     
    echo $p43;
}

function pregunta44($nombreCarrera)
{
    $nombreCarrera = "primaria";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaprimaria($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p43, $p44, $p45) = explode(",", $data);
     
    echo $p44;
}

function pregunta45($nombreCarrera)
{
    $nombreCarrera = "primaria";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaprimaria($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p43, $p44, $p45) = explode(",", $data);
     
    echo $p45;
}

function pregunta46($nombreCarrera)
{
    $nombreCarrera = "secundaria";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntasecundaria($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p46, $p47, $p48) = explode(",", $data);
     
    echo $p46;
}

function pregunta47($nombreCarrera)
{
    $nombreCarrera = "secundaria";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntasecundaria($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p46, $p47, $p48) = explode(",", $data);
     
    echo $p47;
}
function pregunta48($nombreCarrera)
{
    $nombreCarrera = "secundaria";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntasecundaria($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p46, $p47, $p48) = explode(",", $data);
     
    echo $p48;
}

function pregunta49($nombreCarrera)
{
    $nombreCarrera = "ccomunicacion";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaccomunicacion($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p49, $p50, $p51) = explode(",", $data);
     
    echo $p49;
}

function pregunta50($nombreCarrera)
{
    $nombreCarrera = "ccomunicacion";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaccomunicacion($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p49, $p50, $p51) = explode(",", $data);
     
    echo $p50;
}

function pregunta51($nombreCarrera)
{
    $nombreCarrera = "ccomunicacion";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaccomunicacion($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p49, $p50, $p51) = explode(",", $data);
     
    echo $p51;
}

function pregunta52($nombreCarrera)
{
    $nombreCarrera = "Medico_Cirujano";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaMedico_Cirujano($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p52, $p53, $p54) = explode(",", $data);
     
    echo $p52;
}

function pregunta53($nombreCarrera)
{
    $nombreCarrera = "Medico_Cirujano";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaMedico_Cirujano($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p52, $p53, $p54) = explode(",", $data);
     
    echo $p53;
}

function pregunta54($nombreCarrera)
{
    $nombreCarrera = "Medico_Cirujano";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaMedico_Cirujano($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p52, $p53, $p54) = explode(",", $data);
     
    echo $p54;
}

function pregunta55($nombreCarrera)
{
    $nombreCarrera = "Cirujano_Dentista";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaCirujano_Dentista($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p55, $p56, $p57) = explode(",", $data);
     
    echo $p55;
}

function pregunta56($nombreCarrera)
{
    $nombreCarrera = "Cirujano_Dentista";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaCirujano_Dentista($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p55, $p56, $p57) = explode(",", $data);
     
    echo $p56;
}

function pregunta57($nombreCarrera)
{
    $nombreCarrera = "Cirujano_Dentista";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaCirujano_Dentista($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p55, $p56, $p57) = explode(",", $data);
     
    echo $p57;
}

function pregunta58($nombreCarrera)
{
    $nombreCarrera = "Antropologo_Social";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaAntropologo_Social($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p58, $p59, $p60) = explode(",", $data);
     
    echo $p58;
}

function pregunta59($nombreCarrera)
{
    $nombreCarrera = "Antropologo_Social";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaAntropologo_Social($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p58, $p59, $p60) = explode(",", $data);
     
    echo $p59;
}

function pregunta60($nombreCarrera)
{
    $nombreCarrera = "Antropologo_Social";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaAntropologo_Social($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p58, $p59, $p60) = explode(",", $data);
     
    echo $p60;
}

function pregunta61($nombreCarrera)
{
    $nombreCarrera = "Trabajador_Social";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaTrabajador_Social($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p61, $p62, $p63) = explode(",", $data);
     
    echo $p61;
}

function pregunta62($nombreCarrera)
{
    $nombreCarrera = "Trabajador_Social";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaTrabajador_Social($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p61, $p62, $p63) = explode(",", $data);
    echo $p62;
}

function pregunta63($nombreCarrera)
{
    $nombreCarrera = "Trabajador_Social";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaTrabajador_Social($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p61, $p62, $p63) = explode(",", $data);
    echo $p63;
}

function pregunta64($nombreCarrera)
{
    $nombreCarrera = "Licenciado_En_Turismo";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaLicenciado_En_Turismo($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p64, $p65, $p66) = explode(",", $data);
    echo $p64;
}

function pregunta65($nombreCarrera)
{
    $nombreCarrera = "Licenciado_En_Turismo";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaLicenciado_En_Turismo($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p64, $p65, $p66) = explode(",", $data);
    echo $p65;
}

function pregunta66($nombreCarrera)
{
    $nombreCarrera = "Licenciado_En_Turismo";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaLicenciado_En_Turismo($nombreCarrera). -t 'halt'"`;
    exec($command);     
    $data = $command;
    list($p64, $p65, $p66) = explode(",", $data);
    echo $p66;
}

function pregunta67($nombreCarrera)
{
    $nombreCarrera = "Licenciado_En_Historia";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaLicenciado_En_Historia($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p67, $p68, $p69) = explode(",", $data);
    echo $p67;
}

function pregunta68($nombreCarrera)
{
    $nombreCarrera = "Licenciado_En_Historia";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaLicenciado_En_Historia($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p67, $p68, $p69) = explode(",", $data);
    echo $p68;
}

function pregunta69($nombreCarrera)
{
    $nombreCarrera = "Licenciado_En_Historia";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaLicenciado_En_Historia($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p67, $p68, $p69) = explode(",", $data);
    echo $p69;
}

function pregunta70($nombreCarrera)
{
    $nombreCarrera = "Abogado";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaAbogado($nombreCarrera). -t 'halt'"`;
    exec($command);     
    $data = $command;
    list($p70, $p71, $p72) = explode(",", $data);  
    echo $p70;
}

function pregunta71($nombreCarrera)
{
    $nombreCarrera = "Abogado";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaAbogado($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p70, $p71, $p72) = explode(",", $data);
     
    echo $p71;
}

function pregunta72($nombreCarrera)
{
    $nombreCarrera = "Abogado";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaAbogado($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p70, $p71, $p72) = explode(",", $data);
     
    echo $p72;
}

function pregunta73($nombreCarrera)
{
    $nombreCarrera = "Enfermero";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaEnfermero($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p73, $p74, $p75) = explode(",", $data);
     
    echo $p73;
}

function pregunta74($nombreCarrera)
{
    $nombreCarrera = "Enfermero";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaEnfermero($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p73, $p74, $p75) = explode(",", $data);
     
    echo $p74;
}

function pregunta75($nombreCarrera)
{
    $nombreCarrera = "Enfermero";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaEnfermero($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p73, $p74, $p75) = explode(",", $data);
     
    echo $p75;
}

function pregunta76($nombreCarrera)
{
    $nombreCarrera = "Quimico_Farmaceutico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaQuimico_Farmaceutico($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p76, $p77, $p78) = explode(",", $data);
     
    echo $p76;
}

function pregunta77($nombreCarrera)
{
    $nombreCarrera = "Quimico_Farmaceutico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaQuimico_Farmaceutico($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p76, $p77, $p78) = explode(",", $data);
     
    echo $p77;
}

function pregunta78($nombreCarrera)
{
    $nombreCarrera = "Quimico_Farmaceutico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaQuimico_Farmaceutico($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p76, $p77, $p78) = explode(",", $data);
     
    echo $p78;
}

function pregunta79($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Industrial";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Industrial($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p79, $p80, $p81, $p82) = explode(",", $data);
     
    echo $p79;
}

function pregunta80($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Industrial";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Industrial($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p79, $p80, $p81, $p82) = explode(",", $data);
     
    echo $p80;
}

function pregunta81($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Industrial";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Industrial($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p79, $p80, $p81, $p82) = explode(",", $data);
     
    echo $p81;
}
function pregunta82($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Industrial";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Industrial($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p79, $p80, $p81, $p82) = explode(",", $data);
     
    echo $p82;
}

function pregunta83($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Mecanico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Mecanico($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p83, $p84, $p85) = explode(",", $data);
     
    echo $p83;
}

function pregunta84($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Mecanico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Mecanico($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p83, $p84, $p85) = explode(",", $data);
     
    echo $p84;
}

function pregunta85($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Mecanico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Mecanico($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p83, $p84, $p85) = explode(",", $data);
     
    echo $p85;
}

function pregunta86($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Metalurgico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Metalurgico($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p86, $p87, $p88) = explode(",", $data);
     
    echo $p86;
}

function pregunta87($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Metalurgico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Metalurgico($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p86, $p87, $p88) = explode(",", $data);
     
    echo $p87;
}

function pregunta88($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Metalurgico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Metalurgico($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p86, $p87, $p88) = explode(",", $data);
     
    echo $p88;
}

function pregunta89($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_de_Sistemas";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_de_Sistemas($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p89, $p90, $p91) = explode(",", $data);
     
    echo $p89;
}

function pregunta90($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_de_Sistemas";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_de_Sistemas($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p89, $p90, $p91) = explode(",", $data);
     
    echo $p90;
}

function pregunta91($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_de_Sistemas";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_de_Sistemas($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p89, $p90, $p91) = explode(",", $data);
     
    echo $p91;
}

function pregunta92($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_de_Materiales";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_de_Materiales($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p92, $p93, $p94) = explode(",", $data);
     
    echo $p92;
}

function pregunta93($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_de_Materiales";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_de_Materiales($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p92, $p93, $p94) = explode(",", $data);
     
    echo $p93;
}

function pregunta94($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_de_Materiales";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_de_Materiales($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p92, $p93, $p94) = explode(",", $data);
     
    echo $p94;
}

function pregunta95($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_de_Minas";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_de_Minas($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p95, $p96, $p97) = explode(",", $data);
     
    echo $p95;
}

function pregunta96($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_de_Minas";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_de_Minas($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p95, $p96, $p97) = explode(",", $data);
     
    echo $p96;
}

function pregunta97($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_de_Minas";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_de_Minas($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p95, $p96, $p97) = explode(",", $data);
     
    echo $p97;
}

function pregunta98($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Mecatronico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Mecatronico($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p98, $p99, $p100) = explode(",", $data);
     
    echo $p98;
}

function pregunta99($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Mecatronico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Mecatronico($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p98, $p99, $p100) = explode(",", $data);
     
    echo $p99;
}

function pregunta100($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Mecatronico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Mecatronico($nombreCarrera). -t 'halt'"`;
    exec($command);
      
    $data = $command;
    list($p98, $p99, $p100) = explode(",", $data);
     
    echo $p100;
}

function pregunta101($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Quimico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Quimico($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p101, $p102, $p103) = explode(",", $data);
    echo $p101;
}

function pregunta102($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Quimico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Quimico($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p101, $p102, $p103) = explode(",", $data);
    echo $p102;
}

function pregunta103($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Quimico";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Quimico($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p101, $p102, $p103) = explode(",", $data);
    echo $p103;
}

function pregunta104($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Ambiental";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Ambiental($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p104, $p105, $p106) = explode(",", $data);
    echo $p104;
}

function pregunta105($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Ambiental";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Ambiental($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p104, $p105, $p106) = explode(",", $data);
    echo $p105;
}

function pregunta106($nombreCarrera)
{
    $nombreCarrera = "Ingeniero_Ambiental";
    $command = `swipl -s C:\laragon\www\SistemaExperto/ejemplo.pl -g "preguntaIngeniero_Ambiental($nombreCarrera). -t 'halt'"`;
    exec($command);
    $data = $command;
    list($p104, $p105, $p106) = explode(",", $data);
    echo $p106;
}

?>