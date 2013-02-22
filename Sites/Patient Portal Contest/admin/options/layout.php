<?php
$options[] = array("name" => "Layout",
			 "sicon" => "layout.png",
                   "type" => "heading");


$options[] = array("name" => "Choose layout",
                  "desc" => "Choose where you want the sidebar.",
                  "id" => SN."layout",
                  "std" => "left",
                  "type" => "select",
                  "options" => array(
                                    "left" => "Sidebar on Left",
                                    "right" => "Sidebar on Right"
                                    )
                  );

$options[] = array( "name" => "Custom Background",
                              "desc" => "You can set custom background image or/and color from left side menu, Apppearance > Background",
                              "id" => SN."custombackgroundinfo",
                              "std" => "",
                              "type" => "info");

?>