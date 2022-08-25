<?php
/**
 * index.
 *
 * Este documento permite mostrar determinadas entradas en la pagina sobre nosotros.
 * 
 * This document allows to show determinated posts on the about us page
 *
 */

?>

<div class="header-page">
    <?php get_header();?>
</div>

<main>
    <h1 class="page-title">  <?php the_title();?> </h1>
    <div class="container">

        <?php 
            if ( have_posts() ) {
                while ( have_posts () ) {
                    the_post();

                    // La categoria se puede modificar o mantener
                    // The category name can be modified 
                    if ( in_category('3') ){    
                        get_template_part('template-parts/content', 'archive');
                    }
        
                }
            }    
        ?>

    </div>

</main>

<div class="page-footer"><?php get_footer();?></div>
