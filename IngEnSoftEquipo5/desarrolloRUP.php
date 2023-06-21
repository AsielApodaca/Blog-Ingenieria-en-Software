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
        <title>Desarrolo RUP | Blog IngEnSoft - Equipo 5</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="img/blogLogo.png">
        <script src="http://code.jquery.com/jquery-1.5.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>

    <body>
        <!--Header-->
        <?php
            $header = array('Desarrollo RUP','img/headerSoftware.jpeg');
            include 'components/header.php';
        ?>
        <!--Main Content-->
        <main>
            <h1 class="mainTitle">Metodología de desarrollo RUP (disciplinas, artefactos, similitud y/o equivalencia en otros modelos de desarrollo de software)</h1>
            <hr><br>
            <div class="rup">
                <img style="order: 2" class="rupImg" src="img/rupImg.pbm">
                <div style="order: 1">
                    <h2>¿Qué es RUP?</h2>
                    <p>Proceso Unificado de Rational, RUP por sus siglas en inglés, es una metodología de desarrollo de software orientada a objetos que establece las bases, plantillas, y ejemplos para todos los aspectos y fases de desarrollo del software. Fue creada por Rational Software, una división de IBM.<br><br>La metodología de desarrollo RUP proporciona una forma estructurada para que las empresas visualicen la creación de programas de software. Dado que proporciona un plan específico para cada paso del proceso de desarrollo, ayuda a evitar el desperdicio de recursos y reduce los costos de desarrollo inesperados.</p>
                </div>
                <div style="order: 3">
                    <h2>¿Cuál es la meta principal de RUP?</h2>
                    <p>En la gestión de un proyecto, el sistema RUP promueve una solución disciplinada, que consiste en organizar las tareas y responsabilidades de todos dentro de una organización.</p>
                </div>
                <div style="order: 4; grid-column: span 2">
                    <h2>Diferencias y similitudes entre RUP y otros modelos</h2>
                    <p>
                        El ejemplo más claro que se nos viene a la mente es el de los casos de uso. En algunas metodologías como XP (Extreme Programming), encontramos conceptos similares, como vendrían siendo las Stories o historias de usuario, las cuales, de igual manera que los casos de uso, nos permiten especificar las características con las que se desea que cuente el software que se está desarrollando.<br>
                        Una diferencia que destaca demasiado a RUP de otras metodologías es la árdua cantidad de documentación que se suele generar. Muchas metodologías, sobre todo las ágiles, dejan de lado la documentación en pos de la obtención de resultados que generen valor para el cliente.
                    </p>
                </div>
            </div>
            <div class="rupFases">
                <h1 style="grid-column: span 2; text-align: center" class="mainTitle">Fases del RUP</h1>
                <div>
                    <h2 class="mainTitle">I. Fase de inicio</h2>
                    <p>Durante esta fase, se determinarán las ideas básicas y la estructura del proyecto para preparar una suite de negocios, es decir, el equipo decidirá el propósito del proyecto, los criterios de éxito, el costo estimado, la evaluación de riesgos, el tiempo programado y los recursos necesarios para completarlo, etc. Es como una evaluación del proyecto.</p>
                </div>
                <div>
                    <h2 class="mainTitle">II. Fase de elaboración</h2>
                    <p>Durante esta fase, analizar los requisitos del proyecto y la arquitectura necesaria, es decir, revisar los problemas, desarrollar el plan del proyecto y el arquitecto, y eliminar los elementos de alto riesgo del proyecto. Es la fase más crítica entre las cuatro fases.</p>
                </div>
                <div>
                    <h2 class="mainTitle">III. Fase de construcción</h2>
                    <p>Durante esta fase, el proyecto se desarrolla y se completa. Aquí todas las características se desarrollan e integran en el producto, es decir, el software se diseña, escribe y prueba con éxito.</p>
                </div>
                <div>
                    <h2 class="mainTitle">IV. Fase de transición</h2>
                    <p>Esta es la última fase del proceso de desarrollo. Durante esta fase, el software se lanza y se entrega al público o a los clientes. En función de los comentarios de los usuarios finales, el producto se actualizará o cambiará. Es el proceso de despliegue.</p>
                </div>
            </div>
            <div class="rupText">
                <h2>¿Cuándo usar RUP?</h2>
                <br>
                <p>Se puede utilizar RUP desde el comienzo de un nuevo proyecto de software, ya sea complejo y con equipos extensos, hasta los proyectos más simples, y puede seguir utilizándose en los ciclos de desarrollo tiempo después de que el proyecto inicial haya terminado. No obstante, la forma de utilizar RUP varía para ajustarse según las necesidades.</p>
            </div>
            
            <div class="rupDisciplinas">
                <h1 style="grid-column: span 2" class="mainTitle">Disciplinas de RUP</h1>
                <div>
                    <h2>Modelado de negocios</h2>
                    <p>Tiene como objetivos comprender la estructura y la dinámica de la organización, comprender problemas actuales e identificar posibles mejoras, comprender los procesos del negocio.</p>
                </div>
                <div>
                    <h2>Requerimientos</h2>
                    <p>Sus objetivos son: establecer lo que el sistema debe hacer, se definen los límites del sistema, y una interfaz de usuario. También realiza una estimación del costo y tiempo de desarrollo.</p>
                </div>
                <div>
                    <h2>Análisis y Diseño</h2>
                    <p>Define la arquitectura del sistema y tiene como objetivos trasladar requisitos en especificaciones de implementación, al decir análisis se refiere a transformar CU (casos de uso) en clases, y al decir diseño se refiere a refinar el análisis para poder implementar los diagramas de clases de análisis de cada CU, los diagramas de colaboración de cada CU, el de clases de diseño de cada CU, el de secuencia de diseño de CU, el de estados de las clases, etc.</p>
                </div>
                <div>
                    <h2>Implementación</h2>
                    <p>Tiene como objetivos implementar las clases de diseño como componentes, asignar los componentes a los nodos, probar los componentes individualmente (pruebas unitarias) e integrar los componentes en un sistema ejecutable.</p>
                </div>
                <div>
                    <h2>Pruebas</h2>
                    <p>Verificar la integración de los componentes (prueba de integración), verificar que todos los requisitos han sido implementados (pruebas del sistema), asegurar que los defectos detectados han sido resueltos antes de la distribución.</p>
                </div>
                <div>
                    <h2>Despliegue</h2>
                    <p>Sus objetivos son asegurar que el producto está preparado para el cliente, para proceder a su entrega y recepción por el cliente. En esta disciplina se realizan las actividades de probar el software en su entorno final (Prueba Beta), empaquetarlo, distribuirlo e instalarlo, así como la tarea de enseñar al usuario.</p>
                </div>
                <div>
                    <h2>Gestión y configuración de cambios</h2>
                    <p>Éste es esencial para controlar el número de artefactos producidos por la cantidad de personal que trabaja en un proyecto conjuntamente. Los controles sobre los cambios son de mucha ayuda ya que evitan confusiones costosas, como la compostura de algo que ya se había arreglado.</p>
                </div>
                <div>
                    <h2>Entorno</h2>
                    <p>Esta disciplina se enfoca sobre las actividades necesarias para configurar el proceso que engloba el desarrollo de un proyecto y describe las actividades requeridas para el desarrollo de las pautas que apoyan un proyecto. Su propósito es proveer a la organización que desarrollará el software, un ambiente en el cual basarse, el cual provee procesos y herramientas para poder desarrollar el software.</p>
                </div>
            </div>
            <div class="rupRoles">
                <h1 class="mainTitle">¿Cuáles son los roles dentro de RUP?</h1>
                <div>Un rol define el comportamiento y las responsabilidades de un individuo. Una persona puede tener varios roles. Dependiendo del rol, una persona debe desempeñar diferentes actividades. Dentro de RUP encontramos varios roles, los cuales se pueden agrupar en categorías generales.</div>
                <p><b>Analistas:</b> Analista del proceso de negocios, diseñador de negocios, revisor del modelo de negocios, analista de sistema, especificador de requisitos, revisor de requisitos y diseñador de la interfaz usuario.</p>
                <p><b>Desarrolladores:</b> Arquitecto de software, revisor de la arquitectura, diseñador, diseñador de cápsula, diseñador de base de datos, revisor del diseño, programador, revisor del código, integrador.</p>
                <p><b>Directivo:</b> Director de control de cambio, director de configuración, director de implantación, ingeniero de proceso, director del proyecto, revisor del proyecto.</p>
                <p><b>Otros:</b> Stakeholder, cualquier rol, desarrollador de cursos, artista gráfico, administrador de sistema, documentador técnico, especialista en herramientas.</p>

            </div>
        </main>
        <!--Footer-->
        <?php include 'components/footer.html';?>
    </body>
</html>