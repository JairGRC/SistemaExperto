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
    <title>Test Vocacional</title>
</head>

<body>
    
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

                <br>

                <br>
                <input type="submit" name="submit" value="Ver Resultado" class="btn btn-primary" id="enviar" style="display: none;">

                <br><br>
            </div>
    </form>
</body>

</html>