<style type="text/css" media="all">
	
	/* Body Text Color */
	<?php if(of_get_option('body_color') != '') { ?>
	body {
  		color:<?php echo of_get_option('body_color')?>;
    }
	<?php } ?>

    /* Body Links Color */
    <?php if(of_get_option('body_link_color') != '') { ?>
    a{
    	color:<?php echo of_get_option('body_link_color')?>;
	}
	<?php } ?>
	<?php if(of_get_option('body_link_color_hover') != '') { ?>
	a:hover {
	    color:<?php echo of_get_option('body_link_color_hover')?>;
	}
	<?php } ?>

	/* Logo Text Color */
	<?php if(of_get_option('logo_text_color') != '') { ?>
	.logo h1 a {
		color:<?php echo of_get_option('logo_text_color')?>;
	}
	<?php } ?>

   	/* Headings Color */
   	<?php if(of_get_option('main_h_color') !='') { ?>
	h2,h3,h4,h5,h6  {
		color:<?php echo of_get_option('main_h_color')?>;
	}
	<?php } ?>

	/* Sidebar Headings Color */
   	<?php if(of_get_option('sidebar_h_color') !='') { ?>
	aside h3  {
		color:<?php echo of_get_option('sidebar_h_color')?>;
	}
	<?php } ?>

	/* Post Title Link Color */
	<?php if(of_get_option('post_title_link_color') !='') { ?>
	article h2 a {
    	color:<?php echo of_get_option('post_title_link_color')?>;
	}
	<?php } ?>
	<?php if(of_get_option('post_title_link_color_hover') !='') { ?>
	article h2 a:hover {
	    color:<?php echo of_get_option('post_title_link_color_hover')?>;
	}
	<?php } ?>

	/* Post Format Icon Back Color */
	<?php if(of_get_option('post_format_color') !='') { ?>
	article .postmeta .icon  {
		 background-color:<?php echo of_get_option('post_format_color')?>;
	}
	<?php } ?>

	/* Navigation Link Color */
	<?php if(of_get_option('nav_link_color') !='') { ?>
	nav.content ul li a, nav.top ul li a {
    	color:<?php echo of_get_option('nav_link_color')?>;
	}
	<?php } ?>
	<?php if(of_get_option('nav_link_color_hover') !='') { ?>
	nav.content ul li a:hover, 
	nav.content ul li.current-menu-item a,
	nav.content ul li.current-post-parent a,
	nav.top ul li a:hover, 
	nav.top ul li.current-menu-item a,
	nav.top ul li.current-post-parent a {
		color:<?php echo of_get_option('nav_link_color_hover')?>;
	}
	<?php } ?>

	
</style>