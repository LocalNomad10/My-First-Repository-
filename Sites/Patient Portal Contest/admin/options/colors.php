<?php
    $options[] = array( "name" => "Color Settings",
    					"sicon" => "colors.png",
						"type" => "heading");

	$options[] = array( "name" => "CUSTOMIZE MAIN COLORS",
						"desc" => "You can set main colors below. Leave the fields blank to restore the defaults",
						"type" => "info");

	$options[] = array( "name" => "Logo Text Color",
						"id" => SN."logo_text_color",
						"desc" => "Default is #222222",
						"std" => "",
						"type" => "color");

	$options[] = array( "name" => "Body Text Color ",
						"desc" => "Default is #222222",
						"id" => SN."body_color",
						"std" => "",
						"type" => "color");

	$options[] = array( "name" => "Body Regular Links Color ",
						"desc" => "Default is #23C2F8",
						"id" => SN."body_link_color",
						"std" => "",
						"type" => "color");

	$options[] = array( "name" => "Body Regular Links Color Hover ",
						"desc" => "Default is #23C2F8",
						"id" => SN."body_link_color_hover",
						"std" => "",
						"type" => "color");

	$options[] = array( "name" => "Main Headings Color (H2,H3...)",
						"id" => SN."main_h_color",
						"desc" => "Default is #222222",
						"std" => "",
						"type" => "color");

	$options[] = array( "name" => "Sidebar Headings Color",
						"id" => SN."sidebar_h_color",
						"desc" => "Here you can set a different color for sidebar headings than the above main headings color",
						"std" => "",
						"type" => "color");

	$options[] = array( "name" => "Post Title Link Color",
						"id" => SN."post_title_link_color",
						"desc" => "Default is <span style='color:#222222'>#222222</span>",
						"std" => "",
						"type" => "color");

	$options[] = array( "name" => "Post Title Link Color Hover",
						"id" => SN."post_title_link_color_hover",
						"desc" => "Default is links main color",
						"std" => "",
						"type" => "color");

	$options[] = array( "name" => "Post Format Icon Back Color",
						"id" => SN."post_format_color",
						"desc" => "Default is #23C2F8",
						"std" => "",
						"type" => "color");

	$options[] = array( "name" => "Navigation Link Color",
						"id" => SN."nav_link_color",
						"desc" => "Default is #222222",
						"std" => "",
						"type" => "color");

	$options[] = array( "name" => "Navigation Link Color Hover",
						"id" => SN."nav_link_color_hover",
						"desc" => "Default is #E93071",
						"std" => "",
						"type" => "color");
	

?>