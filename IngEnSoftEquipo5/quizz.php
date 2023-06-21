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
        <title>Quizz | Blog IngEnSoft - Equipo 5</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="img/blogLogo.png">
        <script src="http://code.jquery.com/jquery-1.5.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>

    <body class="index">
        <!--header-->
        <?php
            $header = array('Quizz','');
            include 'components/header.php'
        ?>
        <!--Main Content-->
        <main class="quizzMain">
        <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSfZp4MlWqn5x2PbmZB-ZFg2HZY0qGZ-vS2VDlhJlgAdjvOboQ/viewform?embedded=true" width="100%" height="3071" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
        </main>
        <!--Footer-->
        <?php include 'components/footer.html';?>
    </body>
</html>