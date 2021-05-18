<?php
class Get_category_post extends WP_Widget
{
	/**
	 * Holds widget settings defaults, populated in constructor.
	 *
	 * @var array
	 */
	protected $defaults;

	/**
	 * Constructor
	 *
	 * @return HRM_Widget_Recent_Posts
	 */
	function __construct()
	{
		$this->defaults = array(
			'title'         => '',
			'limit'         => 8,
			'thumb_default' => 'http://via.placeholder.com/500x330',
			'orderby'        => 'date',
			'order'          => 'DESC',
			);

		parent::__construct(
			'xtp-home_post_cat-widget',
			__( 'Chuyên mục bài viết', 'hrm' ),
			array(
				'classname'   => 'xtp-home_post_cat-widget',
				'description' => __( 'Hiển thị theo chuyên mục.', 'hrm' )
				)
			);
	}

	/**
	 * Display widget
	 *
	 * @param array $args     Sidebar configuration
	 * @param array $instance Widget settings
	 *
	 * @return void
	 */
	function widget( $args, $instance ) {
		$instance = wp_parse_args( $instance, $this->defaults );
		extract( $instance );
		extract( $args );
		echo $before_widget;
		 ?>
		<div class="entry-cat-post">
			<?php foreach ($cat as $id_cm) {
				$term = get_term( $id_cm, 'category' );
				$term_parent_link = get_term_link($term->term_id, 'category' ); ?>
				
				<a href="<?php echo $term_parent_link; ?>">
					<div class="item-cat" style="background-image: url('<?php echo z_taxonomy_image_url($term->term_id); ?>');">
						<h3 class="title-cat"><?php echo $term->name; ?></h3>
					</div>
				</a>
			<?php } ?>
		</div>
		
		<?php echo $after_widget;

	}

	/**
	 * Update widget
	 *
	 * @param array $new_instance New widget settings
	 * @param array $old_instance Old widget settings
	 *
	 * @return array
	 */
	function update( $new_instance, $old_instance )
	{
		// $instance                  = $old_instance;
		// $instance['title']         = strip_tags( $new_instance['title'] );
		// $instance['limit']         = (int) ( $new_instance['limit'] );
		// $instance['cat']           = array_filter( $new_instance['cat'] );
		// $instance['thumb']         = ! empty( $new_instance['thumb'] );
		// $instance['thumb_default'] = $new_instance['thumb_default'];

		// $instance['date']          = ! empty( $new_instance['date'] );
		// $instance['date_format']   = strip_tags( $new_instance['date_format'] );
		// $instance['excerpt']       = ! empty( $new_instance['excerpt'] );
		// $instance['length']        = (int) ( $new_instance['length'] );

		return $new_instance;
	}

	/**
	 * Display widget settings
	 *
	 * @param array $instance Widget settings
	 *
	 * @return void
	 */
	function form( $instance )
	{
		$instance = wp_parse_args( $instance, $this->defaults );
		?>

		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php _e( 'Title', 'hrm' ); ?></label>
			<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo $instance['title']; ?>">
		</p>

		<div style="width: 280px; float: left; margin-right: 10px;">
			
			<p>
				<label for="<?php echo esc_attr( $this->get_field_id( 'cat' ) ); ?>"><?php _e( 'Select Category: ', 'hrm' ); ?></label>
				<select style="height: 100px;" class="widefat" multiple="multiple" id="<?php echo esc_attr( $this->get_field_id( 'cat' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'cat' ) ); ?>[]">
					<option value=""<?php selected( empty( $instance['cat'] ) ); ?>><?php _e( 'All', 'hrm' ); ?></option>
					<?php
					$categories = get_terms( array( 'taxonomy' => 'category', 'hide_empty' => false) );
					foreach ( $categories as $category )
					{
						printf(
							'<option value="%s"%s>%s</option>',
							$category->term_id,
							selected( in_array( $category->term_id, (array) $instance['cat'] ) ),
							$category->name
							);
					}
					?>
				</select>
			</p>
			

		</div>

		<div style="clear: both;"></div>
		<?php
	}

}
