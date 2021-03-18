<?php /* Template Name: Template post single */ ?>

<?php get_header();?>
<section>
	<div class="container">
			<?php while(have_posts()):?>
				<?php the_post();?>

					<article>

						<h2><?php the_title();?></h2>

							
							<p>
								<?php the_content(); ?>
							</p>
							
							<hr/>

							<?php
							if( comments_open() ){
								comments_template();

							}
								?>
							
					</article>
								
			<?php endwhile; ?>

		
	</div>
	<?php get_sidebar(); ?>
	<dir style="clear: both;"></dir>

</section>
<?php get_footer();?>