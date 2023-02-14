<?php get_header( ) ?>

<section class="ftco-section bg-light">
        <div class="container">

            <?php
                $author = get_queried_object();
                $author = $author -> data->display_name;

            ?>


            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section  ftco-animate text-center">
                    <h3 class="subheading">Author</h3>
                    <h2 class="mb-1"><?php echo $author; ?></h2>
                    <p><?php echo get_the_author_meta('description', $author->data->ID)  ?></p>
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