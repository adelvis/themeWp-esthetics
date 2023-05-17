<!DOCTYPE html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       
        <?php wp_head();?>
    </head>
    <body <?php body_class(); ?>>

        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light ftco-navbar-light-2" id="ftco-navbar">
	        <div class="container">

                <!--Logo o identificador del sitio-->
                <?php

                        //Verificar que exista compatibilidad con logos personaliazados
                    if( function_exists( 'the_custom_logo' ) ) {
                        //Verificar que esté configurado el logo en el personalizador de WordPress
                        if(has_custom_logo()) {
                            //Si está configurado, mostrarki
                            echo '<a href="'.site_url('/').'">';
                                 the_custom_logo();
                            echo '</a>';
                            
                        }
                        // Sino, mostrar el logo predeterminado.
                        else {
                            //echo get_template_directory_uri().'/img/raiola.png';
                            echo '<a class="navbar-brand" href="'.site_url('/').'"><span class="flaticon-lotus"></span>Energen</a>';
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
        



