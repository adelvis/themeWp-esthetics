<section class="ftco-gallery ftco-section">

<div class="container">
    <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
            <h3 class="subheading">Gallery</h3>
            <h2 class="mb-1">See the latest photos</h2>
        </div>
    </div>

    <?php 
        // obtener los id de la imagenes de la galeria
        $ID=estheticsTheme_getIDPage('galery');
        $galery = get_post_gallery($ID, $false);
        $galery_img_id = explode(',', $galery["ids"]);
    ?>

    <div class="row">
            <?php
                $size ='gallery';
                $size2 ='long';
                                   
                foreach($galery_img_id as $id):
                    $imgThumb = wp_get_attachment_image_src($id, $size)[0];
                    $imgLong =  wp_get_attachment_image_src($id, $size2)[0];
                    $count ++;
                
                

                    
            ?>
            
                        <div class="col-md-3 ftco-animate">
                            <a href="<?php echo $imgLong;  ?>" class="gallery image-popup img d-flex align-items-center" style="background-image: url(<?php echo $imgThumb;  ?>);">
                                <div class="icon mb-4 d-flex align-items-center justify-content-center">
                                <span class="icon-instagram"></span>
                            </div>
                            </a>
                        </div>
            
            <?php endforeach; ?>
    </div>

</div>

</section>