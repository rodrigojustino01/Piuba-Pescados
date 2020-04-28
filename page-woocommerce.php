<?php
/**
 *    The template for dispalying the index.
 *
 * @package    WordPress
 * @subpackage Rodrigo Justino

 */
?>
<?php /* Template Name: Woocommerce */ ?>
 <?php get_header(); ?> 
<div id="mainBlock">
	<div class="banner-page">
		 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner-carrinho.jpg">
	</div>
	<div class="ofertas">
	    <div class="full-max">
	        <h2><?php the_title();?></h2>

	        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
				the_content();
			endwhile; else: ?>
			<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>