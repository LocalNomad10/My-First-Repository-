
<!-- begin aside -->
<aside id="sidebar">

    <!--<div class="widget">
        <h3>ABOUT</h3>
        <p>Often times we mistaken a slew of features for a more powerful effective app/experience. </p>
        <p>Yet sometimes it’s those same long lists of features that end up making the app hard to grasp, or in some cases ultimately useless. </p>
    </div> -->
    <!-- Sidebar Widgets Area -->
    <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
        <?php dynamic_sidebar( 'sidebar' ); ?>
    <?php else : ?>
    <!-- This content shows up if there are no widgets defined in the backend. -->
        <p>
            Here you can add widgets.
            <?php if(current_user_can('edit_theme_options')) : ?><br>
            <a href="<?php echo admin_url('widgets.php')?>" class="add-widget">Add Widget</a>
            <?php endif ?>
        </p>
    <?php endif; ?>
    <!-- END Sidebar Widgets Area -->
    <!-- social stuff -->
    <div id="social" class="widget">
        <ul>
            <?php if(of_get_option('contact_email')!="#" && of_get_option('contact_email')!=""){ ?>
            <li class="email"><a href="mailto:<?php echo antispambot(of_get_option('contact_email'),1);?>"><div class="icon"></div>E-mail</a></li>
            <?php } ?>   
            <?php if(of_get_option('twitter')!="#" && of_get_option('twitter')!=""){ ?>
            <li class="twitter"><a href="http://twitter.com/<?php echo of_get_option('twitter');?>" ><div class="icon"></div>@<?php echo of_get_option('twitter');?></a></li>
            <?php } ?>
            <?php if(of_get_option('dribbble')!="#" && of_get_option('dribbble')!=""){ ?>
            <li class="dribbble"><a href="<?php echo of_get_option('dribbble');?>"><div class="icon"></div>Dribbble</a></li>
            <?php } ?>
            <?php if(of_get_option('facebook')!="#" && of_get_option('facebook')!=""){ ?>
            <li class="facebook"><a href="<?php echo of_get_option('facebook');?>"><div class="icon"></div>Facebook</a></li>
            <?php } ?>
            <?php if(of_get_option('vimeo')!="#" && of_get_option('vimeo')!=""){ ?>
            <li class="vimeo"><a href="<?php echo of_get_option('vimeo');?>"><div class="icon"></div>Vimeo</a></li>
            <?php } ?>
             <?php if(of_get_option('linkedin')!="#" && of_get_option('linkedin')!=""){ ?>
            <li class="linkedin"><a href="<?php echo of_get_option('linkedin');?>"><div class="icon"></div>LinkedIn</a></li>
            <?php } ?>
            <?php if(of_get_option('google')!="#" && of_get_option('google')!=""){ ?>
            <li class="google"><a href="<?php echo of_get_option('google');?>"><div class="icon"></div>Google +</a></li>
            <?php } ?> 
            <?php if(of_get_option('github')!="#" && of_get_option('github')!=""){ ?>
            <li class="github"><a href="<?php echo of_get_option('github');?>"><div class="icon"></div>GitHub</a></li>
            <?php } ?>
                               
            <?php if(of_get_option('extrss')!="#" && of_get_option('extrss')!=""){ ?>
            <li class="rss"><a href="<?php echo of_get_option('extrss'); ?>"><div class="icon"></div>RSS</a></li>
            <?php } elseif(of_get_option('rss')== 1)  { ?>
            <li class="rss"><a href="<?php bloginfo('rss2_url'); ?>"><div class="icon"></div>RSS</a></li>
            <?php } ?>
        </ul>
    </div>
    <!-- end social stuff -->
</aside>
<!-- end aside -->