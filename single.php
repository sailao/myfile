<?php get_header(); ?>
<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();
				?>	
				<h1> <a href="<?php the_permalink(); ?>" >
					<?php echo the_title(); ?> 
				</a>
				</h1>
				<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail('w500-h500');
				}  ?>
				<?php echo the_content(); ?>
				
				<?php
				endwhile;
			endif;
?>

<?php get_footer(); ?>