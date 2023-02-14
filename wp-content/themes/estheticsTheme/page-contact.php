<?php  get_header(); ?>

<section class="ftco-section contact-section">
    <div class="container">
        <div class="row block-9">
			<div class="col-md-4 contact-info ftco-animate bg-light p-4">

                <?php if ( have_posts() ) : 
                    while ( have_posts() ) : the_post(); ?>
                       <div class="row">
                            <div class="col-md-12 mb-4">
                                <h2 class="h4">Contact Information</h2>
                            </div>
                            <div class="col-md-12 mb-3">
                                <p><span>Address:</span> <?php the_field('address');   ?></p>
                            </div>
                            <div class="col-md-12 mb-3">
                                <p><span>Phone:</span> <a href="tel://<?php the_field('phone'); ?>"><?php the_field('phone'); ?></a></p>
                            </div>
                            <div class="col-md-12 mb-3">
                                <p><span>Email:</span> <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
                            </div>
                            <div class="col-md-12 mb-3">
                                <p><span>Website:</span> <a href="#"><?php the_field('website'); ?></a></p>
                            </div>
                        </div>
             	
            </div>
		    <div class="col-md-1"></div>
                 
            <div class="col-md-7 ftco-animate">
                    <?php the_content(); ?>
            </div>
            
           

            <?php endwhile; ?>
                    
            <?php endif; ?>
            <!-- SE DETIENE EL LOOP -->
        </div>


    </div>
</section>



<?php get_footer(); ?>