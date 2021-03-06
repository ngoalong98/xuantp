<?php

class Meow_WPMC_Support {        
        
  static function get_issues() {
    $unsupported = array();

    if ( class_exists( 'ACF' ) || function_exists( 'acfw_globals' ) )
      array_push( $unsupported, 'ACF' );

    if ( function_exists( '_et_core_find_latest' ) )
      array_push( $unsupported, 'Divi' );

    if ( class_exists( 'Vc_Manager' ) )
      array_push( $unsupported, 'Visual Composer' );

    if ( function_exists( 'fusion_builder_map' ) )
      array_push( $unsupported, 'Fusion Builder' );

    if ( function_exists( 'elementor_load_plugin_textdomain' ) )
      array_push( $unsupported, 'Elementor' );

    if ( class_exists( 'FLBuilderModel' ) )
      array_push( $unsupported, 'Beaver Builder' );

    if ( class_exists( 'Oxygen_VSB_Dynamic_Shortcodes' ) )
      array_push( $unsupported, 'Oxygen Builder' );

    if ( class_exists( 'Brizy_Editor_Post' ) )
      array_push( $unsupported, 'Brizy Editor' );

    if ( function_exists( 'amd_zlrecipe_convert_to_recipe' ) )
      array_push( $unsupported, 'ZipList Recipe' );

    if ( class_exists( 'UberMenu' ) )
      array_push( $unsupported, 'UberMenu' );

    if ( class_exists( 'X_Bootstrap' ) )
      array_push( $unsupported, 'Theme X' );

    if ( class_exists( 'SiteOrigin_Panels' ) )
      array_push( $unsupported, 'SiteOrigin PageBuilder' );

    if ( defined( 'TASTY_PINS_PLUGIN_FILE' ) )
      array_push( $unsupported, 'Tasty Pins' );

    if ( class_exists( 'WCFMmp' ) )
      array_push( $unsupported, 'WCFM Marketplace' );

    if ( class_exists( 'RevSliderFront' ) )
      array_push( $unsupported, 'Revolution Slider' );

    if ( defined( 'WPESTATE_PLUGIN_URL' ) )
      array_push( $unsupported, 'WP Residence' );

    if ( defined( 'AV_FRAMEWORK_VERSION' ) )
      array_push( $unsupported, 'Avia Framework' );

    if ( class_exists( 'FAT_Portfolio' ) )
      array_push( $unsupported, 'FAT Portfolio' );

    if ( class_exists( 'YIKES_Custom_Product_Tabs' ) )
      array_push( $unsupported, 'Yikes Custom Product Tabs' );

    if ( function_exists( 'drts' ) )
      array_push( $unsupported, 'Directories' );

    if ( class_exists( 'ImageMapPro' ) )
      array_push( $unsupported, 'Image Map Pro' );

    if ( class_exists( 'YOOtheme\Builder\Wordpress\BuilderListener' ) ) {
      array_push( $unsupported, 'YooTheme Builder' );
    }

    if ( class_exists( 'geodirectory' ) ) {
      array_push( $unsupported, 'GeoDirectory' );
    }

		if ( class_exists( 'JustifiedImageGrid' ) ) {
			array_push( $unsupported, 'Justified Image Grid' );
    }

    if ( class_exists( 'Advanced_Ads' ) ) {
			array_push( $unsupported, 'Advanced Ads' );
    }

    if ( function_exists( 'smart_slider_3_plugins_loaded' ) ) {
			array_push( $unsupported, 'Smart Slider' );
    }

    if ( class_exists( 'w2dc_plugin' ) ) {
			array_push( $unsupported, 'WebDirectory' );
    }

    return $unsupported;
  }
}
?>