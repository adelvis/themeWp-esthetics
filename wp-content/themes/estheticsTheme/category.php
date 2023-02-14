<?php get_header( ) ?>

<section class="ftco-section bg-light">
        <div class="container">

            <?php
                $categories = get_queried_object();
                $categories = $Categories -> name;

            ?>


            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section ftco-animate text-center">
                    <h3 class="subheading">Categories</h3>
                    <h2 class="mb-1"><?php echo $categories; ?></h2>
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