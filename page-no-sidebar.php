<?php
/*
 * Template Name: No Sidebar Template
 */
?>
<?php get_header(); ?>
<div id="content units twelve">

	<?php while ( have_posts() ) : the_post(); ?>

		<h1 class="page-title" align="center"><?php the_title(); ?></h1>

		<?php if ( has_post_thumbnail() ) { 
			the_post_thumbnail('single', array('class' => 'single-image')); 
		} ?>

		<?php the_content(); ?>

		<?php if ( $multipage ) { ?>
			<div class="pagelink"><?php wp_link_pages(); ?></div>
		<?php } ?> 

		<?php comments_template(); ?>

	<?php endwhile; ?>

</div>		
<?php get_footer(); ?>

//<?php edit_post_link( __( 'Edit', 'myknowledgebase' ), '<div class="edit-link">', '</div>' ); ?>