<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       
        <?php wp_head();?>
    </head>
    <body <?php body_class(); ?>>

    
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
               
          <div class="container">

              <!--Logo o identificador del sitio-->
              <?php

                    //Verificar que exista compatibilidad con logos personaliazados
                if( function_exists( 'the_custom_logo' ) ) {
                    //Verificar que esté configurado el logo en el personalizador de WordPress
                    if(has_custom_logo()) {
                        //Si está configurado, mostrarki
                        the_custom_logo();
                    }
                    // Sino, mostrar el logo predeterminado.
                    else {
                        //echo get_template_directory_uri().'/img/raiola.png';
                        echo '<a class="navbar-brand" href="index.html"><span class="flaticon-lotus"></span>Energen</a>';
                    }
                }
                    
              ?>
              

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>Menu
            </button>
            

            
            
            <?php
                wp_nav_menu( array(
                    'theme_Location' => 'primary_menu',
                    'container_class'=> 'collapse navbar-collapse',
                    'container_id' => 'ftco-nav',
                    'menu_class' => 'navbar-nav ml-auto'
                ) ) ;           

            ?>      
            
            
          

              
          </div>
        </nav>
        <!-- END nav -->

   

        <?php 
        
            $destacada = wp_get_attachment_image_src(get_field('imagen_hero'), 'full'); 
            $destacada = $destacada[0];


        ?>

    
        <section class="hero-wrap js-fullheight" style="background-image: url('<?php echo esc_attr($destacada);  ?>');" data-stellar-background-ratio="0.5">
          <div class="overlay"></div>
          <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
              <div class="col-md-10 ftco-animate text-center">
                <div class="icon">
                  <span class="flaticon-lotus"></span>
                </div>
                
                <h1><?php the_field('encabezado_hero') ?></h1>
                <div class="row justify-content-center">
                  <div class="col-md-7 mb-3">                      
                    <p><?php the_field('contenido_hero') ?></p>
                  </div>
                </div>
                <p>
                  <a href="<?php echo get_site_url(); ?>/contact/" class="btn btn-primary p-3 px-5 py-4 mr-md-2">Get in Touch</a>
                  <a href="<?php echo get_site_url(); ?>/contact/" class="btn btn-outline-primary p-3 px-5 py-4 ml-md-2">Contact</a>
                </p>
              </div>
            </div>
          </div>
        </section>

    