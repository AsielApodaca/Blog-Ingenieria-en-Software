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
        <title>Ciclo de vida | Blog IngEnSoft - Equipo 5</title>
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="img/blogLogo.png">
        <script src="http://code.jquery.com/jquery-1.5.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </head>

    <body>
        <!--Header-->
        <?php
            $header = array('Ciclo de Vida del Software','img/headerSoftware.jpeg');
            include 'components/header.php'
        ?>
        <!--Main Content-->
        <main>
            <h1 class="mainTitle">Ciclo de vida del software</h1>
            <hr><br>
            <p>
                El ciclo de vida del software es una manera de representar las etapas generales que se deben llevar a cabo a la hora de desarrollar software. Usualmente, se suelen citar 6 como las etapas que conforman este proceso, aunque dependiendo de a quién se le pregunte, puede que dos etapas se combinan para formar una sola.
                Este objeto se usa para medir y mejorar el proceso de desarrollo, pues mediante el análisis detallado de cada paso se maximiza la eficiencia de cada etapa.
            </p>
            <br>
            <h2 class="mainTitle">Etapas:</h2>
            <ul class="cicloEtapas">
                <hr>
                <li>
                    <p>1</p>
                    <div>
                        <h2 class="mainTitle">Planeación</h2>
                        <p>Los encargados de esta etapa se enfocan en evaluar el proyecto a realizar. Calculan costos, tiempos, designan los roles de trabajo y ponen metas. Asimismo, tienen reuniones con los interesados del proyecto, también llamados stakeholders para poder llegar a acuerdos. Otra gran parte de la planeación está en la definición de los requerimientos, ya que éstos nos ayudan a determinar las funciones del software y todo lo que se ocupa para lograrlo.</p>
                    </div>
                </li>
                <hr>
                <li>
                    <p>2</p>
                    <div>
                        <h2 class="mainTitle">Diseño</h2>
                        <p>Como su nombre lo indica, es la etapa en la que se estipula el diseño o arquitectura de la aplicación; se define el aspecto visual y cómo es que funcionará. Algunos de los aspectos que se toman en cuenta son la estructura del software, el lenguaje de programación que se usará, si se hará desde cero o se emplearán plantillas, la manera en que los usuarios interactúan con el programa y cómo éste responderá, las plataformas en las que se correrá, la seguridad con la que debe contar, etc. De igual manera, el prototipado es otra parte del diseño, sólo que en esta ya se estaría materializando de manera primitiva el software como tal.</p>
                    </div>
                </li>
                <hr>
                <li>
                    <p>3</p>
                    <div>
                        <h2 class="mainTitle">Desarrollo</h2>
                        <p>Esta fase también denominada ‘fase de programación’ o ‘fase de codificación’ es en la que se desarrollan programas ejecutables y sin errores de manera eficiente. Nuestro enfoque es construir trozos de funcionalidad. Por lo tanto, entregar unidades de funcionalidad concisa. Al final de esta fase se puede obtener un PMV (Producto mínimo viable) o el software completamente desarrollado y listo para implementarse. Tiende a ser la etapa que más consume tiempo y dinero.</p>
                    </div>
                </li>
                <hr>
                <li>
                    <p>4</p>
                    <div>
                        <h2 class="mainTitle">Pruebas</h2>
                        <p>Es la etapa que se asegura de que exista la menor cantidad de errores en el software. De este modo, se minimizan los inconvenientes que podría encontrar el usuario, lo que le brinda un mayor grado de satisfacción.</p>
                    </div>
                </li>
                <hr>
                <li>
                    <p>5</p>
                    <div>
                        <h2 class="mainTitle">Implementación</h2>
                        <p>Consta en la instalación del software en las plataformas que lo usarán. Se puede hacer de muchas maneras. Por ejemplo, si el proyecto es sobre una aplicación web, es muy simple; sólo se compra un dominio y se suben los archivos a una página de hosting, por otro lado, si el proyecto es de una aplicación de escritorio que usará una oficina, puede que sea necesario ir personalmente al lugar de trabajo e instalar el software manualmente en cada computadora.</p>
                    </div>
                </li>
                <hr>
                <li>
                    <p>6</p>
                    <div>
                        <h2 class="mainTitle">Mantenimiento</h2>
                        <p>Posterior a la implementación y las pruebas, lo más probable es que siga habiendo errores en el software. Estos errores deben ser resueltos mediante actualizaciones o parches.</p>
                    </div>
                </li>
            </ul>
        </main>
        <!--Footer-->
        <?php include 'components/footer.html';?>
    </body>
</html>