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
									"name"=>"Image for the header of pages",
									"description"=>"",
									"id"=>"header_image",
									"default"=>"" 
								) 
						) 
						)

		
					) ;


			 
		}	 
	
	} 
