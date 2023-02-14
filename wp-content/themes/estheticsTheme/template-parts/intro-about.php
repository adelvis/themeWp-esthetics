

<?php 


//$id_page = estheticsTheme_getIDPage('about');
    
$img_fondo = wp_get_attachment_image_src(get_field('imagen_de_seccion'), 'full'); 
//$img_fondo = wp_get_attachment_image_src(get_post_thumbnail_id($id_page), 'full');
$img_fondo = $img_fondo[0];

?>


    <section class="ftco-section ftco-intro" style="background-image: url(<?php echo esc_attr($img_fondo); ?>);">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-md-6 ftco-animate">
                    
                        <?php the_content(); ?>
                    
                </div>
            </div>
        </div>
    </section>

