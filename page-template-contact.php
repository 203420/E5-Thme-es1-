<?php /*Template Name: Contact */ ?> 


<?php
/**
 * page-template-contact.
 *
 * Esta es la plantilla de pagina contactanos, se recomienda seleccionarla al crear una pagina de este estilo.
 * 
 * This is the contact us page template, it is recommended to choose it as template when creating a page of this kind.
 *
 */

?>

<div class="header-page">
    <?php get_header();?>
</div>

<main>
    <h1 class="page-title">  <?php the_title();?> </h1>
    <div class="container2">
            <div class="forms-card">

                <!-- Se recomienda cambiar el texto de el formulario si es necesario -->
                <!-- It is recommended to change the text of the form if necessary -->


                <!-- Esta es una de las partes por adaptar -->

                <h1 class="title-form">¿Cómo podemos ayudarte?</h1>
                <div class="input">
                    <input type="text" class="input-fieldMain" required />
                    <label class="input-label">Nombre</label>
                </div>
                <div class="input">
                    <input type="text" class="input-fieldMain" required />
                    <label class="input-label">Correo electronico</label>
                </div>
                <div class="input">
                    <input type="text" class="input-fieldMain" required />
                    <label class="input-label">Telefono</label>
                </div>
                <div class="input">
                    <input type="text" class="input-fieldMain" required />
                    <label class="input-label">Mensaje</label>
                </div>
                <div class="action">
                    <button class="action-button">Enviar</button>
                </div>
            </div>
    
            <div class="contact-info">
                <div class="contact-img"></div>
                <div class="contact-data">
                    <h6><?php the_title(); ?></h6>
                    <p><?php the_content(); ?></p>
                </div>
            </div>
    
    </div>

</main>

<div class="page-footer"><?php get_footer();?></div>
