<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package thim
 */
get_header();
?>
    <section class="error-404 not-found">
        <div class="page-404-content">
            <div class="row">
                <div class="col-xs-6">
					<?php
					if ( get_theme_mod( 'thim_single_404_left' ) ) {
						echo '<img src="' . get_theme_mod( 'thim_single_404_left' ) . '" alt="404-page" />';
					} else {
						echo '<img src="' . esc_url( get_template_directory_uri() . '/images/image-404.jpg' ) . '" alt="404-page" />';
					}
					?>
                </div>
                <div class="col-xs-6 text-left">
                    <h2><?php echo esc_attr__( '404 ', 'eduma' ); ?><span
                                class="thim-color"><?php echo esc_attr__( 'Error!', 'eduma' ); ?></span></h2>
                    <p><?php echo esc_attr__( 'Sorry, we can\'t find the page you are looking for. Please go to ', 'eduma' ); ?>
                        <a href="<?php echo esc_url( get_home_url() ); ?>"
                           class="thim-color"><?php echo esc_attr__( 'Home.', 'eduma' ); ?></a></p>
                </div>
            </div>
        </div>
        <!-- .page-content -->
    </section>
<?php get_footer(); ?>