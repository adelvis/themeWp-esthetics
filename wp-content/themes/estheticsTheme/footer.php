        <footer class="ftco-footer ftco-section">
            <div class="container">
              <div class="row d-flex">

                <div class="col-md">
                  <div class="ftco-footer-widget mb-4">
                    <?php  dynamic_sidebar( 'footer_widget' ); ?>

                    <?php
                          wp_nav_menu( array( 
                            'theme_location' => 'social_menu',
                            "container"=>"div",
                            "container-class"=>"menu",
                            "container-id"=>"menu-social",
                            "menu_id"=>"social",
                            "menu_class"=>"ftco-footer-social list-unstyled float-lft mt-3",
                            "link_before"=>"<span class='sr-only'>",
                            "link_after"=>"</span>",
                            "fallback_cb"=>"",
                            "depth"=>1
                            
                            ) );
                    ?>


                  </div>
                 
                </div>

                <?php estheticsTheme_list_Areas() ?>


                <div class="col-md">
                  <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Quick Links</h2>               
                    <?php
                        wp_nav_menu( array(
                            'theme_Location' => 'primary_menu',
                            'menu_class' => 'list-unstyled'
                        ) ) ;           

                    ?>     
                  </div>

                
                </div>
                <div class="col-md">
                  <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    
                    <?php  dynamic_sidebar( 'question_widget' ); ?>
                    
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 text-center">

                  <p class="mb-0">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                      document.write(new Date().getFullYear());

                    </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> | Adaptado a WordPress por Adelvis DEV
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  </p>
                </div>
              </div>
            </div>
        </footer>
          
        

        <!-- loader -->
        <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
        

        <?php wp_footer();?>
    
  </body>
</html>