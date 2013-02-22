<?php get_header(); ?>


<!-- begin #main -->
        <div id="main">
        	<!-- Main Menu -->
			<?php site5_main_nav('content clearfix');?>

			<section id="content">
				<h2><?php _e('Ooops! 404 error!', 'site5framework'); ?></h2>
				<p class="404"><?php _e('Sorry! It seems that the page you are looking for is not here.', 'site5framework'); ?></p>
			</section>

        </div>
        <!-- end #main -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>