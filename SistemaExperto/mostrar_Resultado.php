<?php include 'resultado.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Carrera</title>
</head>

<body>
    
    <div class="card">
        <div class="card-header">
           Resultado de La evaluacion
        </div>
        <div class="card-body">
            <h5 class="card-title"><?php echo $var=str_replace("_"," ",$var) ?></h5>
            <p class="card-text"><?php echo $vardescripcion ?></p>
            <a href="#" class="btn btn-primary">Ir atras</a>
        </div>
    </div>
</body>

</html>