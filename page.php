<?php
/**
 * Page.
 *
 * Esta es la plantilla de pagina default, se puede modificar si es necesario.
 * 
 * This is the default page template, it can be modified if necessary.
 *
 */

?>


<div class="header-page">
    <?php get_header();?>
</div>

<main>
    <h1 class="page-title">  <?php the_title();?> </h1>
    <div class="container">

        <?php if ( have_posts() ) : while ( have_posts () ) : the_post(); ?>

                <div class="question-container">
                    <input type="checkbox" checked>
                    <i></i>
                    <h2><?php the_title(); ?></h2>
                    <p> <?php the_content(); ?> </p>
                </div >
                
        <?php endwhile; endif; ?>
    </div>

</main>

<div class="page-footer"><?php get_footer();?></div>
