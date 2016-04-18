<?php get_header(); ?>

<!-- Inicio de main -->
<section id="main">
	
	<!-- Loop de Posts -->
    <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<small>Publicado el <?php the_time('j/m/Y') ?> por <?php the_author_posts_link() ?>  </small>
		<div class="thumbnail">
			<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
		</div>
	<?php the_excerpt(); ?>

	<?php endwhile; else: ?>
    
    		<p><?php _e('No hay entradas .'); ?></p>
	
	<?php endif; ?>

</section>
<!-- Fin de main -->

<?php  get_sidebar()?>

<?php get_footer(); ?>