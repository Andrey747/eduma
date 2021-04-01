<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

get_header();
?>

<?php
if ( have_posts() ) :
	?>
    <div class="row blog-content blog-list">
		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post();
			get_template_part( 'content', 'search' );
		endwhile;
		?>
    </div>
	<?php thim_paging_nav(); ?>
<?php else : ?>
	<?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>

<?php
get_footer();