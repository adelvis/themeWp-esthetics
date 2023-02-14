<?php get_header( ) ?>

<section class="ftco-section bg-light">
        <div class="container">

            <?php
                $tag = get_queried_object();
                $tag = $tag->name;          
                

            ?>


            <div class="row justify-content-center mb-5 pb-3 ftco-animate">
                <div class="col-md-7 heading-section  text-center">
                    <h3 class="subheading">Tag</h3>
                    <h2 class="mb-1"><?php echo $tag; ?></h2>
                </div>
            </div>



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