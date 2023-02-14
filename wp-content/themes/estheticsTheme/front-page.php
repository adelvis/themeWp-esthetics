<?php get_header('frontpage');  ?>


    <!--Seccion Intro About-->
    <?php
        $args = array(
            'pagename' => 'about'
        );

        // Custom query. 
        $query = new WP_Query( $args );
        
        // Check that we have query results. 
        if ( $query->have_posts() ) {
            // Start looping over the query results. 
            while ( $query->have_posts() ): $query->the_post();
                // Contents of the queried post results go here. 
                get_template_part('template-parts/intro-about');
            
            // Restore original post data. 
            endwhile; wp_reset_postdata();
        }
    ?>

    <!--Seccion Areas Principales de Servicios-->
    <?php get_template_part('template-parts/area=front'); ?>

    <!--Seccion Tratamientos-->
    <section class="ftco-section">
	  	<div class="container px-md-5">
	  		<div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-12 heading-section ftco-animate text-center">
                    <h3 class="subheading">Services</h3>
                    <h2 class="mb-1">Treatments</h2>
                </div>
            </div> 
            
            <div class="row align-items-center">

                 <div class="row no-gutters">

                            <?php estheticsTheme_list_Treatments()  ?>
               

                </div>


            </div>
        </div>
    
    </section>

    <!--Seccion de Contador-->

    <?php estheticsTheme_getSectioCounter() ?>


    <!--Seccion de Testimoniales-->

    <?php get_template_part('template-parts/loop-testimoniales'); ?>


    <!--Seccion del Blog  Posts Recientes-->
    <?php 
        $args = array(
            'posts_per_page' =>3
        );
        $entradas = new WP_Query($args);
        // Valida si existe posts
        if ( have_posts() ) :         
    ?>

            <section class="ftco-section bg-light">
                <div class="container">
                    <div class="row justify-content-center mb-5 pb-3">
                        <div class="col-md-7 heading-section ftco-animate text-center">
                            <h3 class="subheading">Blog</h3>
                            <h2 class="mb-1">Recent Posts</h2>
                        </div>
                    </div>
            

                    <div class="row d-flex">

                        <?php 
                            $args = array(
                                'posts_per_page' =>3
                            );
                            $entradas = new WP_Query($args);
                            while($entradas->have_posts()): $entradas->the_post();          
                        ?>
                                
                                <?php get_template_part('template-parts/loop-blog'); ?>

                        <?php endwhile; wp_reset_postdata() ?>

                    
                    </div>
                </div>
            </section>
    <?php endif; ?>
  
     <!--Seccion de Galeria-->

     <?php get_template_part('template-parts/gallery'); ?>

<?php get_footer();?> 