<?php
	class cwpConfig{
		public static $admin_page_menu_name ;
		public static $admin_page_title;
		public static $admin_page_header;
		public static $admin_template_directory ;
		public static $admin_template_directory_uri ;
		public static $admin_uri;
		public static $admin_path;
		public static $menu_slug;
		public static $structure;
		public static $review_categories_array;
		public static $categories_array;
		public static $shortname;
		public static $all_review_categories_array;
		public static $all_categories_array;
		public static $categories_ids;

		public static function init(){
			self::$admin_page_menu_name 	 = "Theme Options";
			self::$admin_page_title 		 = "Theme Options";
			self::$admin_page_header	 	 = "Theme Options";
			self::$shortname 			     = "cwp";
			self::$admin_template_directory_uri  = get_template_directory_uri() . '/admin/layout';
			self::$admin_template_directory  = get_template_directory() . '/admin/layout';
			self::$admin_uri  		= 	get_template_directory_uri() . '/admin/'; 
			self::$admin_path 	 	= 	get_template_directory() . '/admin/';
			self::$menu_slug  		= 	"theme_options";
			 

			self::$structure	= array(
						array(
							 "type"=>"tab",
							 "name"=>"Logo",
							 "options"=>array(
 

								array(
									
									"type"=>"image",
									"name"=>"Logo",
									"description"=>"Upload your logo file.  ",
									"id"=>"logo",
									"default"=> get_template_directory_uri()."/images/footer_logo.png"
								),
								array(
									
									"type"=>"input_text",
									"name"=>"Text logo",
									"description"=>"",
									"id"=>"logo_text",
									"default"=>"" 
								), 
								array(
									
									"type"=>"image",
									"name"=>"Image for the header of pages",
									"description"=>"",
									"id"=>"header_image",
									"default"=>"" 
								) 
						) 
						),
						array(
							"type"=>"tab",
							"name"=>"Slider options",
							"options"=>array(
								
								array(
									
									"type"=>"image",
									"name"=>"Slide image 1",
									"description"=>"",
									"id"=>"slide_image1",
									"default"=>"" 
								), 

								array(
									 "type"=>"input_text",
									 "name"=>"Slider title 1",							 
									 "description"=>"",
									 "id"=>"slider_title1",
									 "default"=>""
								   ),
								array(
									 "type"=>"input_text",
									 "name"=>"Slider text 1",							 
									 "description"=>"",
									 "id"=>"slider_text1",
									 "default"=>""
								   ),
								array(
									 "type"=>"input_text",
									 "name"=>"Slider button 1",							 
									 "description"=>"",
									 "id"=>"slider_button1",
									 "default"=>""
								   ),
								array(
									 "type"=>"input_text",
									 "name"=>"Slider button 1",							 
									 "description"=>"",
									 "id"=>"slider_button_link_1",
									 "default"=>""
								   ),
								array(
									
									"type"=>"image",
									"name"=>"Slide image 2",
									"description"=>"",
									"id"=>"slide_image2",
									"default"=>"" 
								), 

								array(
									 "type"=>"input_text",
									 "name"=>"Slider title 2",							 
									 "description"=>"",
									 "id"=>"slider_title2",
									 "default"=>""
								   ),
								array(
									 "type"=>"input_text",
									 "name"=>"Slider text 2",							 
									 "description"=>"",
									 "id"=>"slider_text2",
									 "default"=>""
								   ),
								array(
									 "type"=>"input_text",
									 "name"=>"Slider button 2",							 
									 "description"=>"",
									 "id"=>"slider_button2",
									 "default"=>""
								   ),
								array(
									 "type"=>"input_text",
									 "name"=>"Slider button 2",							 
									 "description"=>"",
									 "id"=>"slider_button_link_2",
									 "default"=>""
								   ),
								array(
									
									"type"=>"image",
									"name"=>"Slide image 3",
									"description"=>"",
									"id"=>"slide_image3",
									"default"=>"" 
								), 

								array(
									 "type"=>"input_text",
									 "name"=>"Slider title 3",							 
									 "description"=>"",
									 "id"=>"slider_title3",
									 "default"=>""
								   ),
								array(
									 "type"=>"input_text",
									 "name"=>"Slider text 3",							 
									 "description"=>"",
									 "id"=>"slider_text3",
									 "default"=>""
								   ),
								array(
									 "type"=>"input_text",
									 "name"=>"Slider button 3",							 
									 "description"=>"",
									 "id"=>"slider_button3",
									 "default"=>""
								   ),
								array(
									 "type"=>"input_text",
									 "name"=>"Slider button 3",							 
									 "description"=>"",
									 "id"=>"slider_button_link_3",
									 "default"=>""
								   ),
 

							)
						),
						array(
							"type"=>"tab",
							"name"=>"Socials options",
							"options"=>array( 

								array(
									 "type"=>"input_text",
									 "name"=>"Facebook",							 
									 "description"=>"Enter you facebook link",
									 "id"=>"facebook",
									 "default"=>""
								   ),
								array(
									 "type"=>"input_text",
									 "name"=>"Twitter",							 
									 "description"=>"Enter your twitter account link",
									 "id"=>"twitter",
									 "default"=>""
								   ),
								array(
									 "type"=>"input_text",
									 "name"=>"RSS link",							 
									 "description"=>"Enter your RSS link",
									 "id"=>"rss",
									 "default"=>""
								   ),
								array(
									 "type"=>"input_text",
									 "name"=>"LinkedIN ",							 
									 "description"=>"Enter your linked in link",
									 "id"=>"linkedin",
									 "default"=>""
								   ),
								array(
									 "type"=>"input_text",
									 "name"=>"Pinterest",							 
									 "description"=>"Enter your pinterest link",
									 "id"=>"pinterest",
									 "default"=>""
								   ) 
								) 
							 			 
						),
						array(
							"type"=>"tab",
							"name"=>"Footer",
							"options"=>array( 

								array(
									
									"type"=>"image",
									"name"=>"Logo footer",
									"description"=>"",
									"id"=>"logo_footer",
									"default"=> get_template_directory_uri()."/images/footer_logo.png"
								),

								array(
								 "type"=>"input_text",
								 "name"=>"Copyright.",							 
								 "description"=>"Enter your copyright.",
								 "id"=>"copyright",
								 "default"=>""
							   ),

								array(
								 "type"=>"input_text",
								 "name"=>"Logo footer text",							 
								 "description"=>"",
								 "id"=>"logo_footer_text",
								 "default"=>""
							   )
							)
						) 
 

		
					) ;


			 
		}	 
	
	} 
