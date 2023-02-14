
<div class="col-md-4 col-sm-12   d-flex ftco-animate">
    <div class="blog-entry justify-content-end">
        <a href="<?php the_permalink(); ?>">
                <?php  the_post_thumbnail( 'post',array('class'=>'block-20') )?>
        </a>
                                
        <div class="text p-4 float-right d-block">
            <div class="d-flex align-items-center pt-2 mb-4">
                
                <div class="one">
                    <span class="day"><?php $feha = the_time('j' ) ?></span>
                </div>
                <div class="two">
                    <span class="yr"><?php $feha = the_time('Y' ) ?></span>
                    <span class="mos"><?php $feha = the_time('F' ) ?></span>
                </div>
            </div>

            <h3 class="heading mt-2"><a href="<?php the_permalink(); ?>"><?php the_title();   ?></a></h3>
            <p><?php the_excerpt();   ?></p>
        </div>
    </div>
</div>
