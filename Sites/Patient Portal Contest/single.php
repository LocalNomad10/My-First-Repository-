<?php get_header(); ?>


<!-- begin #main -->
        <div id="main">
        	<!-- Main Menu -->
			<?php site5_main_nav('content clearfix');?>
			<section id="content">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<!-- begin article -->
				<article <?php post_class();?>>
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
							<?php the_content(); ?>
						</div>
						<?php if(has_tag()){?>
								<div class="posttags"><?php the_tags('', '', ''); ?></div> 
							<?php }?>
				</article>
			<!-- end article -->
			<hr>
			<?php endwhile; ?>

			<?php comments_template(); ?>

			<?php endif;?>
		</section>

        </div>
        <!-- end #main -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>