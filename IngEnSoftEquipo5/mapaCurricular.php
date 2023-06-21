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
        <title>Mapa Curricular | Blog IngEnSoft - Equipo 5</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="img/blogLogo.png">
        <script src="http://code.jquery.com/jquery-1.5.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>

    <body>
        <!--Header-->
        <?php
            $header = array('Mapa Curricular de la Ingeniería en Software','img/headerSoftware.jpeg');
            include 'components/header.php'
        ?>
        <!--Main Content-->
        <main>
            <h1 class="mainTitle">Perfil y mapa curricular</h1>
            <hr><br>
            <div class="mapaContainer">
                <ul style="grid-row: span 2" class="mapaList">
                    <h2 class="mainTitle">Perfil de Ingreso:</h2>
                    <h2 class="mapaText">
                        El aspirante a ingresar al Programa Educativo de Ingeniero en Software deberá contar con:
                    </h2>
                    <li>Habilidades de aplicación de las matemáticas (razonamiento lógico-matemático), localización de información (interpretación de información gráfica), y lectura de información (comprensión lectora).</li>
                    <li>Competencia lingüística en inglés a un nivel de dominio A2 de acuerdo al Marco de Referencia Europeo (MCER).</li>
                    <li>Poseer capacidad de razonamiento verbal.</li>
                    <li>Capacidad para resolver problemas básicos en las áreas de aritmética, álgebra, geometría, trigonometría y cálculo.</li>
                    <li>Capacidad de identificar y resolver problemas mediante algoritmos computacionales.</li>
                    <li>Preferentemente deberá contar con: ​Interés por el desarrollo de programas computacionales que den solución a los problemas de las empresas.</li>
                </ul>
                <ul class="mapaList">
                    <h2 class="mainTitle">Perfil de egreso:</h2>
                    <p class="mapaText">
                        El Ingeniero en Software es un profesionista comprometido, innovador y emprendedor, que desarrolla software
                        a través de la especificación de requisitos, análisis, diseño, construcción, prueba y administración de
                        proyectos, aplicando procesos, modelos y estándares de calidad internacional, las cuales contribuyen al
                        crecimiento y progreso de su sociedad. Lo anterior a través de las siguientes competencias profesionales:
                    </p>
                </ul>
                
                
                <ul class="mapaList">
                    <h2 class="mainTitle">Competencias específicas:</h2>
                    <li>Diseñar software a través de la aplicación de metodologías, herramientas y estándares apropiados al problema.</li>
                    <li>Construir software a partir de especificaciones de diseño, haciendo uso de las mejores prácticas que aseguren la calidad del producto.</li>
                    <li>Administrar proyectos de desarrollo de software mediante la aplicación de procesos, modelos y estándares que contribuyan a la calidad total del producto.</li>
                </ul>
                
                <ul style="grid-column: span 2;" class="mapaList">
                    <h2  class="mainTitle">Competencias Ge​néricas:</h2>
                    <li>Afronta las situaciones tanto de la  vida cotidiana como las contingentes  con base en el reconocimiento y aplicación  de sus   capacidades en un conocimiento objetivo del entorno para incidir  en su bienestar personal y en el de su comunidad  de manera eficaz y ética.</li>
                    <li>Insertarse en el proceso de desarrollo de  su comunidad  por medio de acciones concretas orientadas a la transformación social con base en la práctica de actitudes solidarias y de una visión crítica y plural  del contexto en el cual está inmerso.</li>
                    <li>Desarrolla iniciativas de carácter económico, social y/o cultural, mediante el diseño y aplicación de acciones y proyectos innovadores orientados a crear oportunidades  y resolver problemas dentro de una empresa o en la comunidad.</li>
                    <li>Aplica conocimientos,  métodos, técnicas y recursos tecnológicos pertinentes y de  actualidad para lograr un desempeño idóneo  en contextos socio profesionales  complejos y favorecer su movilidad y adaptación profesional.</li>
                </ul>
            </div>
            <img class="mapaCurricular" src="img/mapaCurricular.png">
        </main>
        <!--Footer-->
        <?php include 'components/footer.html';?>
    </body>
</html>