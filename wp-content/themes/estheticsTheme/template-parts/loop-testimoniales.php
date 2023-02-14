<?php 
        $args = array(
            'post_type' => 'Testimonials',
            'posts_per_page' =>10
        );
        $service = new WP_Query($args);

        // valida si existen testimoniales imprime la seccion 
        if($service->have_posts()):   
    ?>


        <section class="ftco-section testimony-section">
            <div class="container">
                <div class="row justify-content-center mb-5 pb-3">
                    <div class="col-md-10 heading-section ftco-animate text-center">
                        <h3 class="subheading">Testimony</h3>
                        <h2 class="mb-1">Successful Stories</h2>
                    </div>
                </div>

                <div class="row ftco-animate">
                    <div class="col-md-12">
                        <div class="carousel-testimony owl-carousel">
                        <?php while($service->have_posts()): $service->the_post(); ?>
                            <div class="item">
                                <div class="testimony-wrap p-4 pb-5">
                                <div class="text">
                                    <div class="line pl-5">
                                        <p class="mb-4 pb-1"><?php  the_content();     ?></p>
                                        <span class="quote d-flex align-items-center justify-content-center">
                                        <i class="icon-quote-left"></i>
                                        </span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <?php
                                                $destacada = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
                                                
                                                $destacada = $destacada[0];

                                        ?>
                                        <div class="user-img" style="background-image: url(<?php echo esc_attr($destacada);  ?>)">
                                        </div>
                                        <div class="ml-4">
                                            <p class="name"><?php the_title();?></p>
                                            <span class="position">Customer</span>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>



                        <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </div>

            </div>
        </section>

   <?php   endif; ?>
