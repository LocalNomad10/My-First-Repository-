<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<!-- head -->
<head>
	<meta charset="utf-8">
	<!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/><![endif]-->
	<title><?php wp_title(' | ', true, 'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width">
    <?php if (of_get_option('meta') == '1'){?>
    	<meta name="keywords" content="<?php echo of_get_option('metakeywords'); ?>" />
    	<meta name="description" content="<?php echo of_get_option('metadescription'); ?>" />
    <?php }else {?>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
    <?php }?>
	<!-- stylesheet -->
	<link rel="stylesheet" media="all" href="<?php bloginfo('stylesheet_url'); ?>"/>
	<!-- stylesheet -->

	
    <!-- custom typography-->
    <?php if(of_get_option('customtypography') == '1') { ?>     
  		<?php if(of_get_option('headingfontlink') != '') { ?>
  			<?php echo stripslashes(html_entity_decode(of_get_option('headingfontlink')));?>
  		<?php } ?>
        <?php if(of_get_option('bodyfontlink') != '') { ?>
            <?php echo stripslashes(html_entity_decode(of_get_option('bodyfontlink')));?>
        <?php } ?>
        <?php if(of_get_option('logofontlink') != '') { ?>
            <?php echo stripslashes(html_entity_decode(of_get_option('logofontlink')));?>
        <?php } ?>
      <?php load_template( get_template_directory() . '/custom.typography.css.php' );?>
    <?php } ?>
    <!-- //custom typography -->
    <!-- custom colors -->
    <?php load_template( get_template_directory() . '/custom.colors.css.php' );?>
    <!-- //custom colors -->
<!-- wp_head -->
<?php wp_head(); ?>
<!-- //wp_head -->

</head>
<!-- head -->

	<body <?php body_class(); ?>
        <?php if(of_get_option('layout') != 'left' && of_get_option('layout') != ''):?>id="right-sidebar"<?php endif;?>
        >
        
		<!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->
        <?php if ( has_nav_menu( 'main_nav' ) ) {?>
            <div id="small-screens-menu" class="block">
                <a href="#" id="topmenu-button"><strong><?php _e(":::: MENU ::::", "site5framework"); ?></strong></a>
                <?php  site5_main_nav(''); ?>
            </div>
            <?php }?>
        <!-- begin header -->
        <header id="pageheader" class="default clearfix">
            <div class="logo">
               <h1> 
                    <a href="<?php bloginfo('url');?>">
                    <?php if(of_get_option('image_logo') != 1){?>
                        <?php if(of_get_option('logo')) : echo '<img src="'.of_get_option('logo').'" alt="'.get_bloginfo('name').'" class="styled"/>'; endif;?>
                        <div class="text">
                            <?php if(of_get_option('logo_text')) : echo of_get_option('logo_text'); endif;?>
                            <span><?php  echo get_bloginfo('description');?></span>
                        </div>
                    <?php }else{?>
                        <?php if(of_get_option('logo')) : echo '<img src="'.of_get_option('logo').'" alt="'.get_bloginfo('name').'" />'; endif;?>
                    <?php }?>
                    </a>
                </h1>
            </div>
            <!-- Main Menu -->
            <?php site5_main_nav('top clearfix');?>
            
        </header>
        <div class="header-placeholder"></div>
        <!-- end header -->	
        <!-- begin #main-wrapper -->
        <div id="main-wrapper" class="clearfix">	