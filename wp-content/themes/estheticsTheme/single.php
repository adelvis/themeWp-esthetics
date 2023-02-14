<?php  get_header();  ?>


<section class="ftco-section">
    <div class="container">
        <div class="row">
            
            <div class="col-lg-8 ftco-animate">
                <!-- SE MUESTRA EL CONTENIDO DEL POST -->
                <?php while(have_posts()): the_post(); ?>


                    <h2 class="mb-3"><?php the_title(); ?></h2>
                    <?php the_content(); ?>

                    <!-- SE MUESTRA LAS ETIQUETAS DEL POST -->
                    <div class="tag-widget post-tag-container mb-5 mt-5">
                        <?php the_tags( '<ul class="tagcloud"><li>', '</li><li>', '</li></ul>' ); ?>
                    </div>

                    <!-- SE MUESTRA EL AUTOR DEL POST -->
                    <div class="about-author d-flex">
                        <div class="bio align-self-md-center mr-5">
                            <h3 class="subheading">Author</h3>
                        </div>
                        <div class="desc align-self-md-center">
                            <a href="<?php  echo get_author_posts_url( get_the_author_meta('ID') ) ?>">
                                <h3><?php the_author()?></h3>

                            </a>
                            
                            <p><?php the_author_description() ?></p>
                        </div>
                    </div>
                            
               
                <?php endwhile; ?> 

            </div>

            <div class="col-lg-4">

                <?php get_sidebar(); ?>

            </div>


        </div>
    </div>
    
</section>




<?php  get_footer(); ?>