<?php include 'resultado.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilosJhan.css">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon-96x96.png">
    <title>Carrera</title>
</head>

<body class="cuerpo">

    <div class="card1">
        <div class="card-header">
            Resultado de la Evaluación
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo $var=str_replace("_"," ",$var) ?></h5>
            <p class="card-text"><?php echo $vardescripcion ?></p>
            <br>
            <a href="testvocacional.php" class="btn btn-primary">Volver a Intentar</a>
        </div>
    </div>
    
</body>

</html>