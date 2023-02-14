<?php get_header( ) ?>

<section class="ftco-section bg-light">
        <div class="container">
            <div class="row d-flex">
                <?php if ( have_posts() ) : 
                    while ( have_posts() ) : the_post(); ?>
                            <!-- SE MUESTRA EL CONTENIDO DEL POST -->
                                                    
                            <?php get_template_part('template-parts/loop-blog'); ?>

                    
                    <?php endwhile; ?>

                <?php endif; ?>
                <!-- SE DETIENE EL LOOP -->
            </div>
        </div>
                

</section>



<?php get_footer() ?>