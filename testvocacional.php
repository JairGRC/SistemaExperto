<?php include 'Preguntas.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/script.js"></script>
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <title>Test Vocacional</title>
</head>


<body class="cuerpo">
    <form name="prs" method="post" action="mostrar_Resultado.php" id="consulta" class=" row justify-content-center align-items-center" style="margin-top: 80px;">
        <div class="card " style="width: 70vw;">
            <div class="card-header text-center">
                <h2>Test Vocacional</h2>
            </div>
            <div class="card-body ms-4">
                <div id="Ingeniero_Agricola">
                    <?php 
                    for($i=1;$i<4;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                    <div class="select-p">
                        <p><STRONG><?php pregunta1('$nombreCarrera'); ?></STRONG></p>
                        <select name="p1" class="form-select text-center " aria-label="Default select example" id="p1">
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="select-p">
                        <p><STRONG><?php pregunta2('$nombreCarrera'); ?></STRONG></p>
                        <select name="p2" class="form-select text-center " aria-label="Default select example" id="p2">
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    
                    <div class="select-p">
                        <p><STRONG><?php pregunta3('$nombreCarrera'); ?></STRONG></p>
                        <select name="p3" class="form-select text-center " aria-label="Default select example" id="p3">

                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

        
                <div id="Ingeniero_Zooctenista" style="display: none;">
                <?php 
                    for($i=4;$i<7;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Ingeniero_Agronomo" style="display: none;">
                <?php 
                    for($i=7;$i<10;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>

                </div>

                <div id="Ingeniero_Informatico" style="display: none;">
                <?php 
                    for($i=10;$i<13;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>

                </div>
                
                <div id="Ingeniero_Estadistico" style="display: none;">
                <?php 
                    for($i=13;$i<16;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Licenciado_en_Fisica" style="display: none;">
                <?php 
                    for($i=16;$i<19;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Licenciado_en_Matematicas" style="display: none;">
                <?php 
                    for($i=19;$i<22;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Biologo" style="display: none;">
                <?php 
                    for($i=22;$i<25;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Biologo_Microbiologo" style="display: none;">
                <?php 
                    for($i=25;$i<28;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Biologo_Pesquero" style="display: none;">
                <?php 
                    for($i=28;$i<31;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Licenciado_en_Administracion" style="display: none;">
                <?php 
                    for($i=31;$i<34;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Contador_Publico" style="display: none;">
                <?php 
                    for($i=34;$i<37;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Economista" style="display: none;">
                <?php 
                    for($i=37;$i<40;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="inicial" style="display: none;">
                <?php 
                    for($i=40;$i<43;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="primaria" style="display: none;">
                <?php 
                    for($i=43;$i<46;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="secundaria" style="display: none;">
                <?php 
                    for($i=46;$i<49;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="ccomunicacion" style="display: none;">
                <?php 
                    for($i=49;$i<52;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Medico_Cirujano" style="display: none;">
                <?php 
                    for($i=52;$i<55;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Cirujano_Dentista" style="display: none;">
                <?php 
                    for($i=55;$i<58;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Antropologo_Social" style="display: none;">
                <?php 
                    for($i=58;$i<61;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Trabajador_Social" style="display: none;">
                <?php 
                    for($i=61;$i<64;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Licenciado_En_Turismo" style="display: none;">
                <?php 
                    for($i=64;$i<67;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Licenciado_En_Historia" style="display: none;">
                <?php 
                    for($i=67;$i<70;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Abogado" style="display: none;">
                <?php 
                    for($i=70;$i<73;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Enfermero" style="display: none;">
                <?php 
                    for($i=73;$i<76;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Quimico_Farmaceutico" style="display: none;">
                <?php 
                    for($i=76;$i<79;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Ingeniero_Industrial" style="display: none;">
                <?php 
                    for($i=79;$i<83;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Ingeniero_Mecanico" style="display: none;">
                <?php 
                    for($i=83;$i<86;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Ingeniero_Metalurgico" style="display: none;">
                <?php 
                    for($i=86;$i<89;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Ingeniero_de_Sistemas" style="display: none;">
                <?php 
                    for($i=89;$i<92;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Ingeniero_de_Materiales" style="display: none;">
                <?php 
                    for($i=92;$i<95;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Ingeniero_de_Minas" style="display: none;">
                <?php 
                    for($i=95;$i<98;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Ingeniero_Mecatronico" style="display: none;">
                <?php 
                    for($i=98;$i<101;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Ingeniero_Quimico" style="display: none;">
                <?php 
                    for($i=101;$i<104;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>

                <div id="Ingeniero_Ambiental" style="display: none;">
                <?php 
                    for($i=104;$i<107;$i++){
                        $temp='pregunta'.$i;
                        ?>
                        <div class="select-p">
                        <p><STRONG><?php call_user_func($GLOBALS["temp"],'$nombreCarrera');
                        ?></STRONG></p>
                        <select id="<?php echo "p$i"?>"   name="<?php echo "p$i"?>" class="form-select text-center " aria-label="Default select example" >
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                        </div>
                        <?php
                    }
                    ?>
                </div>
                <br>

                <br>
                <input type="submit" name="submit" value="Ver Resultado" class="btn btn-primary" id="enviar" style="display: none;">

                <br><br>
            </div>
    </form>
</body>

</html>