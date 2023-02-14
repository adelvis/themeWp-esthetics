<?php

/*
    Plugin Name: Esthetics Theme Widgets
    Plugin URI:
    Description: Añade Widget personalizados al tema Esthetics
    Version:1.0.0
    Author: Adelvis Uzcategui
    Author URI:https://twitter.com/adelvisu    
    Text Domain: estheticsThemeWp
*/

if(!defined('ABSPATH')) die();

/**
 * Adds Posts_widget widget.
 */
class Posts_widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'posts_widget', // Base ID
			esc_html__( 'Widget Custom Posts', 'text_domain' ), // Name
			array( 'description' => esc_html__( 'A Custom posts Widget', 'text_domain' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		if ( ! empty( $instance['cantidad'] ) ) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['cantidad'] ) . $args['after_title'];
		}  
        
    ?>
		<div class="sidebar-box fadeInUp " >
                
                <h3 class="heading-2">Recent Blog</h3>
                   
                <?php 
                    $cantidad = $instance['cantidad'];

                    if($cantidad==''){
                        $cantidad =3;   
                    }

                    $args = array(
                        'posts_per_page' =>$cantidad
                    );
                    $entradas = new WP_Query($args);
                    while($entradas->have_posts()): $entradas->the_post();          
                ?>
                <div class="block-21 mb-4 d-flex">

                        <?php  the_post_thumbnail( 'post',array('class'=>'blog-img mr-4') )?>
                            
                        <div class="text">
                            <h3 class="heading"><a href="<?php the_permalink(); ?>"><?php the_title();   ?></a></h3>
                            <div class="meta">
                                <div><a href="#"><span class="icon-calendar"></span> <?php $feha = the_time('F' ) ?>. <?php $feha = the_time('j' ) ?>, <?php $feha = the_time('Y' ) ?></a></div>
                                <div><a href="#"><span class="icon-person"></span><?php the_author() ?></a></div>
                            </div>
                        </div>
                </div>
                <?php endwhile; wp_reset_postdata() ?>
                    

                
                                    


        </div>
	<?php	
        echo $args['after_widget'];
	}


	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$cantidad = ! empty( $instance['cantidad'] ) ? $instance['cantidad'] : esc_html__( 'How many Posts do you want to show?', 'estheticsThemeWp' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'cantidad' ) ); ?>"><?php esc_attr_e( 'How many Posts do you want to show:', 'estheticsThemeWp' ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'cantidad' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'cantidad' ) ); ?>" type="number" value="<?php echo esc_attr( $cantidad ); ?>">
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['cantidad'] = ( ! empty( $new_instance['cantidad'] ) ) ? sanitize_text_field( $new_instance['cantidad'] ) : '';

		return $instance;
	}

} // class Posts_widget
// register Posts_widget widget
function register_posts_widget() {
    register_widget( 'Posts_widget' );
}
add_action( 'widgets_init', 'register_posts_widget' );

