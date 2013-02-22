<?php get_header(); ?>


<!-- begin #main -->
        <div id="main">
        	<!-- Main Menu -->
			<?php site5_main_nav('content clearfix');?>
			<section id="content">
				<article>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h2><?php the_title(); ?></h2>
					<div class="entry-content clearfix">
						<?php the_content(); ?>
					</div>
					<?php endwhile; endif;?>
				</article>
			</section>

        </div>
        <!-- end #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>