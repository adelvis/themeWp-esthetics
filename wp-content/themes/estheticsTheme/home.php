<?php get_header('blog') ?>


<!-- Imagen hero -->

<?php 
        
        $pag_blog = get_option('page_for_posts');
        $destacada = wp_get_attachment_image_src(get_post_thumbnail_id($pag_blog), 'full');
        //$destacada = wp_get_attachment_image_src(get_field('imagen_hero'), 'full');  
        $destacada = $destacada[0];

        if(!isset($destacada)){
            $destacada = get_stylesheet_directory_uri().'/img/bg_2.jpg';
        }

        
        
        
        

    ?>


    <section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo esc_attr($destacada);  ?>');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 text-center">
            <h1 class="mb-3 bread"><?php  echo get_the_title($pag_blog );   ?></h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="#">Home</a></span> <span><?php  echo get_the_title($pag_blog );  ?></span></p>
          </div>
        </div>
      </div>
    </section>

<!--Seccion principal del blog -->
<section class="ftco-section bg-light">
        <div class="container">
            <div class="row d-flex">
                <?php if ( have_posts() ) : 
                    while ( have_posts() ) : the_post(); ?>
                            <!-- SE MUESTRA EL CONTENIDO DEL POST -->
                                                    
                            <?php get_template_part('template-parts/loop-blog'); ?>

                    
                    <?php endwhile; ?>

                    <div class="pager">
                   
                        <?php  echo  paginate_links()  ?>

                    </div>


                <?php endif; ?>
                <!-- SE DETIENE EL LOOP -->
            </div>
        </div>
                

</section>



<?php get_footer() ?>