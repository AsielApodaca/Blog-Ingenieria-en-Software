<!DOCTYPE html>
<html lang="es">
    <!--
        Proyecto BLOG Curso Ingenieria en software
        INSTITUTO TECNOLÓGICO DE SONORA
    -->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="HandheldFriendly" content="true">
        <title>Inicio | Blog IngEnSoft - Equipo 5</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="img/blogLogo.png">
        <script src="http://code.jquery.com/jquery-1.5.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>

    <body class="index">
        <!--Header-->
        <?php
            $header = array('Ingeniería en Software','');
            include 'components/header.php'
        ?>
        <!--Main Content-->
        <main class="indexMain">
            <h1 class="indexMainTitle">Ingeniería en software</h1>
            <p class="indexMainText">
                La ingeniería del software es una disciplina que implica el uso de estructuras, herramientas y técnicas para construir programas informáticos.
                Asimismo, incluye el análisis previo de la situación, la redacción del proyecto, la creación del software y las pruebas necesarias para garantizar el correcto funcionamiento del software antes de poner el sistema en marcha.
                Esta ingeniería aborda todas las fases del ciclo de vida de desarrollo de cualquier tipo de sistema de información, y es aplicable a una amplia gama de ámbitos de la informática y la ciencia de los ordenadores, como el diseño de compiladores, sistemas operativos y tecnologías de Intranet/Internet.
            </p>
        </main>
        <!--Footer-->
        <?php include 'components/footer.html';?>
    </body>
</html>