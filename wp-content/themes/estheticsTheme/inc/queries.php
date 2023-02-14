<?php

/*services*/

function estheticsTheme_list_Services(){ ?>
    <?php 
        $args = array(
            'post_type' => 'services',
            'posts_per_page' => 8
        );
        $service = new WP_Query($args);
          
        if($service->have_posts()){       
    ?>

            <section class="ftco-section ftco-section-services bg-light">
                <div class="container-fluid px-md-5">
                    <div class="row">
            
                        <?php while($service->have_posts()): $service->the_post(); ?>

                            <div class="col-md-6 col-lg-3">
                                <div class="services text-center">
                                    <div class="icon d-flex justify-content-center align-items-center">
                                        <span class="<?php the_field('icono') ?>"></span>
                                    </div>
                                    <div class="text mt-3">
                                        <h3><?php  the_title() ;  ?></h3>
                                        <p><?php  the_content() ;  ?></p>
                                    </div>
                                </div>
                            </div>

                        <?php endwhile; wp_reset_postdata() ?>

                    </div>
                </div>
            </section>

    <?php 
        }
} 

/*Treatments */
function estheticsTheme_list_Treatments(){ ?>
    <?php 
        $args = array(
            'post_type' => 'treatment'
        );
        $service = new WP_Query($args);

          
        if($service->have_posts()){       
    ?>

           
            
                        <?php while($service->have_posts()): $service->the_post(); ?>

                        <div class="col-md-4 d-flex align-items-stretch align-items-center">
                            <div class="treatment w-100 text-center ftco-animate border  p-3 py-4">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="<?php the_field('icono') ?>"></span>
                                </div>
                                <div class="text mt-2">
                                    <h3><?php  the_title() ;  ?></h3>
                                    <p><?php  the_content() ;  ?></p>
                                    <p><?php  the_field('price') ;  ?> - <?php  the_field('duration') ;  ?></p>
                                </div>
                            </div>
                        </div>

                        <?php endwhile; wp_reset_postdata() ?>



           
         

    <?php 
        }
} 

/*Specialist*/
function estheticsTheme_list_Specialists(){ ?>
    <?php 
        $args = array(
            'post_type' => 'specialist'
        );
        $service = new WP_Query($args);

          
        if($service->have_posts()){       
    ?>

           

            <?php while($service->have_posts()): $service->the_post(); ?>

            <?php
                $img = wp_get_attachment_image_src(get_post_thumbnail_id(), 'specialist'); 
                $img = $img[0];
               
            ?>
            <div class="col-lg-3 d-flex">
                <div class="coach align-items-stretch">
                    <div class="img" style="background-image: url(<?php echo $img; ?>);"></div>
                    <div class="text bg-white p-4 ftco-animate">
                        <span class="subheading"><?php the_field('specialty') ?></span>
                        <h3><a href="#"><?php  the_title() ;  ?></a></h3>
                        <p><?php  the_content() ;  ?></p>
                        <ul class="ftco-social-media d-flex mt-4">
                            <li class="ftco-animate"><a target="_blank" href="<?php the_field('url_twiter') ?>" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a target="_blank" href="<?php the_field('url_facebook') ?>" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a target="_blank" href="<?php the_field('url_instagram') ?>" class="mr-2 d-flex justify-content-center align-items-center"><span class="icon-instagram"></span></a></li>
                        </ul>
                        <p></p>
                    </div>
                </div>
            </div>

            <?php endwhile; wp_reset_postdata() ?>

              
         

    <?php 
        }
} 



/*Area Services*/

function estheticsTheme_list_Areas(){

    // Obtener id de la pagina principal
    $front_page_id = get_option('page_on_front');

    
    // obtener el nombre de la area 
    $area1_name = get_field('area_4', $front_page_id);
    
?>
    <div class="col-md">
        <div class="ftco-footer-widget mb-4 ml-md-4">
        <h2 class="ftco-heading-2">Popular Links</h2>
        <ul class="list-unstyled">
        <?php
         // obtener el nombre de la area 
         $area1 = get_field('area_1', $front_page_id);
         $areaName1 = $area1['titulo_area'];

         $area2 = get_field('area_2', $front_page_id);
         $areaName2 = $area2['titulo_area'];

         $area3 = get_field('area_3', $front_page_id);
         $areaName3 = $area3['titulo_area'];

         $area4 = get_field('area_4', $front_page_id);
         $areaName4 = $area4['titulo_area'];

        ?>
            <li><a href="#"><?php echo  $areaName1; ?></a></li>
            <li><a href="#"><?php echo  $areaName2; ?></a></li>
            <li><a href="#"><?php echo  $areaName3; ?></a></li>
            <li><a href="#"><?php echo  $areaName4; ?></a></li>
        </ul>
        </div>
    </div>  

<?php 
}


/*Contador  */

function estheticsTheme_getSectioCounter(){ ?>

    <?php 
        // Obtener id de la pagina principal
        $front_page_id = get_option('page_on_front');
     
        $destacada = get_stylesheet_directory_uri().'/img/bg_3.jpg';

    ?>

    <section class="ftco-counter img" id="section-counter" style="background-image: url(<?php echo esc_attr($destacada);  ?>);" data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
            <div class="container">
                 <div class="row justify-content-center">
                    <div class="col-md-10">
                        <div class="row">
                            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <strong class="number" data-number="<?php the_field('happy_customers', $front_page_id)  ?>">0</strong>
                                        <span>Happy Customers</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                    <div class="text">
                                        <strong class="number" data-number="<?php the_field('treatments', $front_page_id)  ?>">0</strong>
                                        <span>Treatments</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="<?php the_field('years_of_experience', $front_page_id)  ?>">0</strong>
                                    <span>Years of Experience</span>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate">
                                <div class="block-18 text-center">
                                <div class="text">
                                    <strong class="number" data-number="<?php the_field('lesson_conducted', $front_page_id)  ?>">0</strong>
                                    <span>Lesson Conducted</span>
                                </div>
                                </div>
                            </div>
                            
                        </div>
                </div>
            </div>
        </div>
    </section>


<?php }

/* Get Id of page*/
function estheticsTheme_getIDPage($lug){

    $args = array(
        'pagename' => $lug
    );

    // Custom query. 
    $query = new WP_Query( $args );
    
    // Check that we have query results. 
    if ( $query->have_posts() ) {
        // Start looping over the query results. 
        while ( $query->have_posts() ): $query->the_post();
            // Contents of the queried post results go here. 
            $ID = get_the_ID();
          
        
        // Restore original post data. 
        endwhile; wp_reset_postdata();
    }

    return $ID;

}







?>