<?php get_header(); ?>
	<div class="wrap_1280">
		<div class="main-content">

			<?php get_sidebar(); ?>
				<!-- Llama al Sidebar -->

				<div class="left-page-content col-lg-10 col-md-10 col-sm-9 col-xs-12">
					<div class="container">
						<div class="row" id="ms-container">
							
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								
								<div class="ms-item row col-lg-6 col-md-6 col-sm-6 col-xs-12">
									
									<!-- Inicio de cada Blog -->
									<div class="blog-page-content">
										
										<!-- Imagen del post -->
										<?php if (has_post_thumbnail()) : ?>
											<figure class="article-preview-image">
												<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
											</figure>
										<?php else : ?>
										<?php endif; ?>
										<!-- Imagen del post -->

										<h2><a href="<?php the_permalink(); ?>" class="category-title-link"><?php the_title(); ?></a></h2>

										<!-- CATEGORY POST -->
										<div class="category-post">

											<h6 class="article-meta-extra">
												<?php if (has_category() && !has_category('Uncategorized')) : ?>
													<?php the_category('  |  '); ?> |  
												<?php else : ?>
												<?php endif; ?>

												Posteado el <?php the_date(get_option('date_format')); ?> a las <?php the_time(get_option('time_format')); ?> por <?php the_author_posts_link(); ?>
											</h6>

											<?php the_excerpt(); ?>

										</div>
										<!-- Fin CATEGORY POST -->

										<!-- TAGS -->
										<?php if (has_tag()) : ?>
											<p class="tags"><?php the_tags('', ' '); ?></p>
										<?php else : ?>
										<?php endif; ?>
										<!-- Fin TAGS -->
										
										<a href="<?php the_permalink(); ?>" class="btn btn-blue btn-block">Read More</a>

									</div>
									<!-- Fin de cada Blog -->
									
								</div>

							<?php endwhile; ?><?php else : ?>

								<article class="no-posts">
									<h1>No posts were found.</h1>
								</article>

							<?php endif; ?>

						</div>

					</div>

					<div class="clearfix"></div>

					<div class="article-nav clearfix">

						<p class="article-nav-next pull-right">
							<?php previous_posts_link(__('Newer Posts »')); ?>
						</p>

						<p class="article-nav-prev pull-left">
							<?php next_posts_link(__('« Older Posts')); ?>
						</p>

					</div>

					<div class="clearfix"></div>

				</div>

				<div class="clearfix"></div>

		</div>
		<!-- END MAIN-CONTENT -->

	</div>
	<!-- END wrap_1280 -->

	<?php get_footer(); ?>