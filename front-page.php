<?php
/**
 * front-page.
 *
 * Esta es la plantilla que se mostrara como home o pagina principal del tema, se recomienda modificar los 
 * elementos de la clase entry, asi como el texto del boton.
 * 
 * This is the home template, it is recommended to modify the entry class items and the main button text 
 * 
 *
 */
?>


<?php get_header();?>

<div class="img-background">
    <h1 class="main-title"> <?php the_title();?> </h1>
    <div class="main-text"> <?php the_content();?> </div>

    <!-- Esta es una de las partes por adaptar -->
    <a href="#info-home"><button class="main-button">Mas información</button></a>
</div>


<div class="card-container" id="info-home">
    <div class="faders">
        <div class="left"></div>
        <div class="right"></div>
    </div>
    
    <!-- Cambiar esta información, se pueden agregar o eliminar elementos de clase entry -->
    <!-- Modify this text, entry class items can be added or deleted -->
    <div class="items">

        <!-- Esta es una de las partes por adaptar -->

        <div class="entry">    
            <div class="card-img" id="c1"></div>
            <p class="name">Sistema Antilavado PLD/FT</p>
            <p class="quote"></p>
        </div>
        <div class="entry">
            <div class="card-img" id="c2"></div>
            <p class="name">Contabilidad Electrónica Automática Integrada</p>
            <p class="quote"></p>
        </div>
        <div class="entry">
            <div class="card-img" id="c3"></div>
            <p class="name">Diseñado para SOFOMes ENR del mercado mexicano</p>
            <p class="quote"></p>
        </div>
    </div>
</div>

<?php get_footer();?>
