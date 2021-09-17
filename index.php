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
                    <div class="select-p">
                        <p><STRONG><?php pregunta1('$nombreCarrera'); ?></STRONG></p>
                        <select id="p1" name="p1" class="form-select text-center " aria-label="Default select example" id="p1">
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
                </div>

                <div id="Ingeniero_Zooctenista" style="display: none;">
                    <div class="select-p">
                        <p><STRONG><?php pregunta4('$nombreCarrera'); ?></STRONG></p>
                        <select name="p4" class="form-select text-center " aria-label="Default select example" id="p4">
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="select-p">
                        <p><STRONG><?php pregunta5('$nombreCarrera'); ?></STRONG></p>
                        <select name="p5" class="form-select text-center " aria-label="Default select example" id="p5">
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="select-p">
                        <p><STRONG><?php pregunta6('$nombreCarrera'); ?></STRONG></p>
                        <select name="p6" class="form-select text-center " aria-label="Default select example" id="p6">
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                </div>

                <div id="Ingeniero_Agronomo" style="display: none;">
                    <div class="select-p">
                        <p><STRONG><?php pregunta7('$nombreCarrera'); ?></STRONG></p>
                        <select name="p7" class="form-select text-center " aria-label="Default select example">
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="select-p">
                        <p><STRONG><?php pregunta8('$nombreCarrera'); ?></STRONG></p>
                        <select name="p8" class="form-select text-center " aria-label="Default select example">
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="select-p">
                        <p><STRONG><?php pregunta9('$nombreCarrera'); ?></STRONG></p>
                        <select name="p9" class="form-select text-center " aria-label="Default select example">
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                </div>

                <div id="Ingeniero_Informatico" style="display: none;">
                    <div class="select-p">
                        <p><STRONG><?php pregunta4('$nombreCarrera'); ?></STRONG></p>
                        <select name="p10" class="form-select text-center " aria-label="Default select example">
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="select-p">
                        <p><STRONG><?php pregunta5('$nombreCarrera'); ?></STRONG></p>
                        <select name="p11" class="form-select text-center " aria-label="Default select example">
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="select-p">
                        <p><STRONG><?php pregunta6('$nombreCarrera'); ?></STRONG></p>
                        <select name="p12" class="form-select text-center " aria-label="Default select example">
                            <option selected>Opcion</option>
                            <option value="si">Si</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                </div>
                <br>

                <br>
                <input type="submit" name="submit" value="Ver Resultado" class="btn btn-primary" id="enviar" style="display: none;">

                <br><br>
            </div>
    </form>

</body>

</html>