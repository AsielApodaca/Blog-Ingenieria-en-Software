<script>
    function slideMenu(){
        var slideMenu = document.getElementById('slideMenu');
        if (slideMenu.getBoundingClientRect().left < 0) {
            slideMenu.style.left='0';
        }else{
            slideMenu.style.left='-400px';
        }
    }
</script>
<header>
    <div class="headerFondo" style='background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)),url("<?php echo $header[1];?>")'>
        <p class="headerTitle"><?php echo $header[0];?></p>
        
    </div>
    <ul class="menuBar">
        <li id="p1"><a href="cicloDeVida.php">Ciclo de vida del Software</a><div></div></li>
        <li id="p2"><a href="desarrolloRUP.php">Desarrollo RUP</a><div></div></li>
        <li id="p3"><a href="mapaCurricular.php">Mapa curricular Ingeniería en Software</a><div></div></li>
        <li id="p4"><a href="eticaDelIngeniero.php">Ética del Ingeniero en Software</a><div></div></li>        
    </ul>
</header>

<div class="menuIconButton" onclick="slideMenu();">
    <img class="menuIcon" src="img/menuIcon.png">
</div>

<?php include 'components/slideMenu.html'?>
