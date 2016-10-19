<?php get_header(); ?>

<?php if (have_posts()): 
	while (have_posts()) : the_post(); ?>

		<h1><?php the_title(); ?></h1>
		
		<?php the_content(); // Dynamic Content ?>

	<?php endwhile; 
endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>