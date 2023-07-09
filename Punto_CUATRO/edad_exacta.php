<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CND BOOTSTARP-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/edad_exacta.css">
    <link rel="shortcut icon" href="img/calendario.png">
    <title>Edad exacta</title><!--se asignó un title-->
</head>
<body>
    <a href="../index.html#section-respuestas">
        <img class="home" src="img/home.png" alt="home">
    </a>
    
    <div class="main-frame-cal">
    <form action="" method="POST"><!--se agregó "action" y "method"-->
        <div class="form-group">
            <label for="exampleFormControlInput1">Seleecione su fecha de nacimiento:</label>
            <input type="date" name="fecha" class="form-control" id="exampleFormControlInput1">
        </div>
        
        <button type="submit" name="verificar" class="btn btn-outline-info">Envíar</button><!--se agregó "type", y se arregló ortografía-->
    </form>

    <?php

    const constante_0 = 0; //se agregaron los "const"
    const constante_18 = 18;
    if (isset($_POST['verificar'])) {
        $fecha = new DateTime($_POST['fecha']);
       
        $date2 = new DateTime(date("y-m-d"));

        $diferencia = $fecha->diff($date2);

        $edad_actual = $diferencia->y;
        $edad_meses = $diferencia->m;
        $edad_dias = $diferencia->d;

        echo "Su edad exacta es de: ".$edad_actual." años ".$edad_meses." meses y ".$edad_dias." días";

        if ($edad_actual >= constante_18) {
            echo "<h5>y usted es mayor de edad</h5>";
        }
        else {
            echo "<h5>y usted es menor de edad</h5>";
        }

    }

    ?>

    </div>
</body>
</html>