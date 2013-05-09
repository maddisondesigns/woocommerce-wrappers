/**
 * Unhook the WooCommerce Wrappers
 *
 */
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );


/**
 * Outputs the opening tag for the WooCommerce content
 *
 */
function mytheme_woocommerce_before_main_content() {
	echo '<div class="col grid_9_of_12 clearfix">';
}
add_action( 'woocommerce_before_main_content', 'mytheme_woocommerce_before_main_content', 10 );


/**
 * Outputs the closing tag for the WooCommerce content
 *
 */
function mytheme_woocommerce_after_main_content() {
	echo '</div> <!-- /.col.grid_9_of_12 -->';
}
add_action( 'woocommerce_after_main_content', 'mytheme_woocommerce_after_main_content', 10 );

