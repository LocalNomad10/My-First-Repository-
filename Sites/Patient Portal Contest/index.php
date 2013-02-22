<?php get_header(); ?>


<!-- begin #main -->
        <div id="main">
        	<!-- Main Menu -->
			<?php site5_main_nav('content clearfix');?>

			<section id="content">
				<div id="archive-title">
					<?php if (is_category()) { ?>
							<?php _e("Browsing posts in: ", "site5framework"); ?> <span><?php single_cat_title(); ?></span> 
					<?php } elseif (is_tag()) { ?> 
							<?php _e("Posts tagged with: ", "site5framework"); ?><span><?php single_cat_title(); ?></span>
					<?php } elseif (is_day()) { ?>
							<?php _e("Daily Archives: ", "site5framework"); ?><span><?php the_time('l, F j, Y'); ?></span>
					<?php } elseif (is_month()) { ?>
					    	<?php _e("Monthly Archives: ", "site5framework"); ?><span><?php the_time('F Y'); ?></span>
					<?php } elseif (is_year()) { ?>
					    	<?php _e("Yearly Archives: ", "site5framework"); ?><span><?php the_time('Y'); ?></span> 
					<?php } elseif (is_Search()) { ?>
					    	<?php _e("Search Results: ", "site5framework"); ?><span><?php echo esc_attr(get_search_query()); ?></span> 
					<?php } ?>
				</div>

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<!-- begin article -->
				
				<article <?php post_class(); ?>>
					<div class="postmeta">
						<div class="icon"></div>
							<div class="meta-text">
								<?php the_time('M j, Y') ?>
								&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;
								<img src="<?php echo get_template_directory_uri(); ?>/img/ico_comments.png"> &nbsp;&nbsp;<?php comments_popup_link('0 comments', '1 comment', ' % comments'); ?>
							</div>
						</div>
						<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
						<div class="entry-content clearfix">
							<?php if(has_post_format('audio')){
								wp_enqueue_script('jplayer-js');
								$postid = $post->ID;
								player_audio($postid);
							}?>
							<?php if(is_search()){
								the_excerpt();
							}else{
							 the_content(__('Continue Reading', 'site5framework')); 
							}?>
						</div>
						<?php if(has_tag()){?>
								<div class="posttags"><?php the_tags('', '', ''); ?></div> 
							<?php }?>
					</article>
			<!-- end article -->
				<hr>
			<?php endwhile; ?>

			<!-- begin #pagination -->
				<?php if (function_exists("emm_paginate")) { 
						emm_paginate();  
					 } else { ?>
				<div class="navigation">
			        <div class="alignleft"><?php next_posts_link(__('Older','site5framework')) ?></div>
			        <div class="alignright"><?php previous_posts_link(__('Newer','site5framework')) ?></div>
			    </div>
		    <?php } ?>
		    <!-- end #pagination -->

			<?php endif;?>

			<?php wp_reset_query(); ?>
			</section>

        </div>
        <!-- end #main -->
<?php get_sidebar(); ?>

<?php get_footer(); ?>