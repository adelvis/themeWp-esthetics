<?php 


get_header(); ?>



    <!-- Muestra la seccion de Intro !-->
    <?php while(have_posts()): the_post(); ?>
        <?php  get_template_part('template-parts/intro-about'); ?>
    <?php endwhile; ?>

    <!--Seccion Areas Principales de Servicios-->
    <?php get_template_part('template-parts/area=front'); ?>


    <!--Seccion de Testimoniales-->

    <?php get_template_part('template-parts/loop-testimoniales'); ?>


    <!--Seccion de Contador-->

    <?php estheticsTheme_getSectioCounter() ?>
   
    <!--Seccion de Galeria-->

    <?php get_template_part('template-parts/gallery'); ?>

    

   

<?php get_footer(); ?>