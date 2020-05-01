<?php 

function theme_scripts()
{

	//styles //wp_enqueue_styles('name' , 'get_template_directory_uri()./path' , 'dependenncy' , 'version')
	wp_enqueue_style("bootstrap.min.css" , get_template_directory_uri()."/css/bootstrap.min.css" , '' , "1.0");
	wp_enqueue_style("font-awesome" , get_template_directory_uri()."/font-awesome/css/font-awesome.min.css" , '' , "1.0");
	wp_enqueue_style("style.css" , get_template_directory_uri()."/css/style.css" , '' , "1.0");
	wp_enqueue_style("fonts" , get_template_directory_uri()."/fonts/antonio-exotic/stylesheet.css" , '' , "1.0");
	wp_enqueue_style("lightbox.min.css" , get_template_directory_uri()."/css/lightbox.min.css" , '' , "1.0");
	wp_enqueue_style("responsive.css" , get_template_directory_uri()."/css/responsive.css" , '' , "1.0");

	//scripts

	wp_enqueue_script("js/jquery.min.js" , get_template_directory_uri()."/js/jquery.min.js" , '' , "1.0");
	wp_enqueue_script("bootstrap.min.js" , get_template_directory_uri()."/js/bootstrap.min.js" , '' , "1.0");
	wp_enqueue_script("lightbox" , get_template_directory_uri()."/js/lightbox-plus-jquery.min.js" , '' , "1.0");
	wp_enqueue_script("instafeed" , get_template_directory_uri()."/js/instafeed.min.js" , '' , "1.0");
	wp_enqueue_script("custom" , get_template_directory_uri()."/js/custom.js" , '' , "1.0");

}

add_action("wp_enqueue_scripts" , "theme_scripts");

//add_theme_support("post-thumbnails"); //for featured image section in new post

function theme_support()
{
	add_theme_support("post-thumbnails");	//for featured image section in new post
	//image size
	add_image_size("small-thumbnail" , 120 , 90 , true); //add_image_size('name' , width , height , crop:true);
	add_image_size("banner-image" , 700 , 350 , true);

	//post formats

	add_theme_support("post-formats" , array("aside" , "gallery" , "link"));
}

add_action("after_setup_theme" , "theme_support");
 ?>