<?php


 // Obtener id de la pagina principal
 $front_page_id = get_option('page_on_front');


?>


<section class="ftco-section ftco-section-services bg-light">
    	<div class="container-fluid px-md-5">
    		<div class="row justify-content-center">

                    <?php
                        // obtener el nombre de la area 1
                        $area1 = get_field('area_1', $front_page_id);
                        // Valida que tenga un valor
                        if(!empty($area1['titulo_area'])) {
                           
                        
                    ?>
                        <div class="col-md-6 col-lg-3">
                            

                            <div class="services ftco-animate text-center">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="<?php echo esc_html($area1['icono']);  ?>"></span>
                                </div>
                                <div class="text mt-3">
                                    <h3><?php echo esc_html($area1['titulo_area']);  ?></h3>
                                    <p><?php echo esc_html($area1['descripcion_corta']);  ?></p>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                    <?php
                        // obtener el nombre de la area 2
                        $area2 = get_field('area_2', $front_page_id);
                        // Valida que tenga un valor
                        if(!empty($area2['titulo_area'])) {
                           
                        
                    ?>
                        <div class="col-md-6 col-lg-3">
                            

                            <div class="services ftco-animate text-center">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="<?php echo esc_html($area2['icono']);  ?>"></span>
                                </div>
                                <div class="text mt-3">
                                    <h3><?php echo esc_html($area2['titulo_area']);  ?></h3>
                                    <p><?php echo esc_html($area2['descripcion_corta']);  ?></p>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                    <?php
                        // obtener el nombre de la area 
                        $area3 = get_field('area_3', $front_page_id);
                        // Valida que tenga un valor
                        if(!empty($area3['titulo_area'])) {
                           
                        
                    ?>
                        <div class="col-md-6 col-lg-3">
                            

                            <div class="services ftco-animate text-center">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="<?php echo esc_html($area3['icono']);  ?>"></span>
                                </div>
                                <div class="text mt-3">
                                    <h3><?php echo esc_html($area3['titulo_area']);  ?></h3>
                                    <p><?php echo esc_html($area3['descripcion_corta']);  ?></p>
                                </div>
                            </div>
                        </div>

                    <?php } ?>
                    
                    <?php
                        // obtener el nombre de la area 
                        $area4 = get_field('area_4', $front_page_id);
                        // Valida que tenga un valor
                        if(!empty($area4['titulo_area'])) {
                           
                        
                    ?>
                        <div class="col-md-6 col-lg-3">
                            

                            <div class="services ftco-animate text-center">
                                <div class="icon d-flex justify-content-center align-items-center">
                                    <span class="<?php echo esc_html($area4['icono']);  ?>"></span>
                                </div>
                                <div class="text mt-3">
                                    <h3><?php echo esc_html($area4['titulo_area']);  ?></h3>
                                    <p><?php echo esc_html($area4['descripcion_corta']);  ?></p>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

					
				</div>
    	</div>
    </section>

