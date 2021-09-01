<?php  

$options = array(

/*============================================================================*/

array("type" => "section","icon" => "dashicons-admin-settings","title" => __( "Configuration", "psythemes" ),"id" => "general","expanded" => "true"),

array("type" => "section","icon" => "dashicons-admin-home","title" => __( "Home page", "psythemes" ),"id" => "homepage","expanded" => "false"),

array("type" => "section","icon" => "dashicons-analytics","title" => __( "Advertising", "psythemes" ),"id" => "adsconfig","expanded" => "false"),

array("type" => "section","icon" => "dashicons-chart-area","title" => __( "SEO", "psythemes" ),"id" => "seo-config","expanded" => "false"),

array("type" => "section","icon" => "dashicons-admin-tools","title" => __( "Tools", "psythemes" ),"id" => "general2","expanded" => "false"),

array("section" => "general", "type" => "heading","title" => __( "General Settings", "psythemes" ),"id" => "general-config"),	

array("section" => "general", "type" => "heading","title" => __( "Advance Settings", "psythemes" ),"id" => "adv-config"),

array("section" => "general", "type" => "heading","title" => __( "TMDb API", "psythemes" ),"id" => "api-config"),

// array("section" => "general", "type" => "heading","title" => __( "Anti Adblocker", "psythemes" ),"id" => "adblock-config"),

array("section" => "general", "type" => "heading","title" => __( "Style Settings", "psythemes" ),"id" => "style-config"),	

array("section" => "general", "type" => "heading","title" => __( "Site Notice", "psythemes" ),"id" => "notice-config"),

 array("section" => "general", "type" => "heading","title" => __( "Watch Page Settings", "psythemes" ),"id" => "watch-config"), 

array("section" => "general", "type" => "heading","title" => __( "Next Episode Notice", "psythemes" ),"id" => "tv-config"),

array("section" => "general", "type" => "heading","title" => __( "Articles Settings", "psythemes" ),"id" => "article-config"),

array("section" => "general", "type" => "heading","title" => __( "Comments", "psythemes" ),"id" => "comentarios-config"),

array("section" => "general", "type" => "heading","title" => __( "Footer Settings", "psythemes" ),"id" => "footer-config"),

array("section" => "adsconfig", "type" => "heading","title" => __( "Ads - Fake Player", "psythemes" ),"id" => "ads-player-config"),

array("section" => "adsconfig", "type" => "heading","title" => __( "Ads - Fake Buttons", "psythemes" ),"id" => "ads-buttons-config"),

array("section" => "adsconfig", "type" => "heading","title" => __( "Ad blocks - Home Page", "psythemes" ),"id" => "ads-homepage-config"),

array("section" => "adsconfig", "type" => "heading","title" => __( "Ad blocks - Archive Pages" ),"id" => "ads-mains-config"),

array("section" => "adsconfig", "type" => "heading","title" => __( "Ad blocks - Watch Pages", "psythemes" ),"id" => "ads-vid-config"),

array("section" => "adsconfig", "type" => "heading","title" => __( "Ad blocks - Single Pages", "psythemes" ),"id" => "ads-page-config"),

array("section" => "homepage", "type" => "heading","title" => __( "Home Modules", "psythemes" ),"id" => "home-module"),

array("section" => "homepage", "type" => "heading","title" => __( "Main Slider", "psythemes" ),"id" => "sli-module"),

array("section" => "homepage", "type" => "heading","title" => __( "Suggestion Module", "psythemes" ),"id" => "sugg-module"),

array("section" => "homepage", "type" => "heading","title" => __( "Latest Movies Modules", "psythemes" ),"id" => "latest-mov"),

array("section" => "homepage", "type" => "heading","title" => __( "Latest TV Series Modules", "psythemes" ),"id" => "latest-tv"),

array("section" => "homepage", "type" => "heading","title" => __( "Latest Episodes Modules", "psythemes" ),"id" => "latest-ep"),

array("section" => "homepage", "type" => "heading","title" => __( "Additional Modules", "psythemes" ),"id" => "additional-modules"),

array("section" => "general2", "type" => "heading","title" => __( "Minify HTML", "psythemes" ),"id" => "minify-config"),

/* array("section" => "general2", "type" => "heading","title" => __( "External Link Page", "psythemes" ),"id" => "link-config"), */

array("section" => "general2", "type" => "heading","title" => __( "Code Integrations", "psythemes" ),"id" => "dev-config"),

array("section" => "seo-config", "type" => "heading","title" => __( "Basic Settings", "psythemes" ),"id" => "seo-config"),

array("section" => "seo-config", "type" => "heading","title" => __( "Site Verification", "psythemes" ),"id" => "verify-config"),


// Advance Settings

array(
    "under_section" => "adv-config", //Required
    "type" => "radio", //Required
    "name" => "Homepage Search", //Required
    "id" => "homepage-search", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("true" => __('Enable','psythemes'), "false" => __('Disable','psythemes')), //Required
    "desc" => "Display big search as homepage.",
    "default" => "true"
),

array(
	// Field pages
	"under_section" => "adv-config", 
    "type" => "pages", 
    "name" => __( "Homepage", "psythemes" ), 
    "display_checkbox_id" => "toggle_checkbox_id",
    "id" => "psy_home", 
    "desc" => __( "Select relevant page.", "psythemes" )
),

array(
    "under_section" => "adv-config", //Required
    "type" => "text", //Required
    "name" => "Homepage Button", //Required
    "id" => "homepage-search-custom-button", //Required
    "desc" => "Change or use custom text on the homepage's button.",
    "placeholder" => "Use Old PsyPlay? Click Here"
),

array(

    "under_section" => "adv-config",
    "type" => "small_heading",
    "title" => __("Search", "psythemes"),
),

array(
    "under_section" => "adv-config", //Required
    "type" => "radio", //Required
    "name" => "Live Search", //Required
    "id" => "live-search", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("true" => __('Enable','psythemes'), "false" => __('Disable','psythemes')), //Required
    "desc" => "Display big search as homepage.",
    "default" => "false"
),

array(
    "under_section" => "adv-config",
    "type" => "checkbox",
    "name" => __("Search Results: Post Type", "psythemes"),
    "id" => array("search-mv","search-tv","search-ep",),
    "options" => array( __("Movies","psythemes"), __("TV-Series","psythemes"), __("Episodes","psythemes") ), 
    "desc" => __("Activate to enable this function", "psythemes"),
    "default" => array("checked","checked","not"),

),


array(
	"under_section" => "adv-config",
	"type" => "small_heading",
	"title" => __( "Content Lock", "psythemes" )
),


array(
    "under_section" => "adv-config", //Required
    "type" => "radio", //Required
    "name" => __( "Display Videos:", "psythemes" ), //Required
    "id" => "psy-hide-vid", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
	"desc" => "Select who can see your videos. ",	
    "options" => array("enable" => __('Registered Users Only','psythemes'), "disable" => __('Everyone','psythemes')), //Required
    "default" => "disable"
),

array(
    "under_section" => "adv-config", //Required
    "type" => "radio", //Required
    "name" => __( "Display Links:", "psythemes" ), //Required
    "id" => "psy-hide-lnk", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
	"desc" => "Select who can see your download links. ",	
    "options" => array("enable" => __('Registered Users Only','psythemes'), "disable" => __('Everyone','psythemes')), //Required
    "default" => "disable"
),


array(
	"under_section" => "adv-config",
	"type" => "small_heading",
	"title" => __( "Trailer Option", "psythemes" )
),

array(
    "under_section" => "adv-config", //Required
    "type" => "radio", //Required
    "name" => __( "Display Trailer:", "psythemes" ), //Required
    "id" => "psy-trailer-player", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
	"desc" => "Select how you want to appear the trailer. ",	
    "options" => array("enable" => __('Main Player','psythemes'), "disable" => __('Default','psythemes')), //Required
    "default" => "disable"
),


// General Settings 

array(
    "under_section" => "general-config", //Required
    "type" => "radio", //Required
    "name" => "Night Mode Switch", //Required
    "id" => "night-mode", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("true" => __('Enable','psythemes'), "false" => __('Disable','psythemes')), //Required
    "desc" => "Let user switch from light to dark scheme.",
    "default" => "true"
),

array(

    "under_section" => "general-config", //Required

    "type" => "text", //Required

    "name" => __( "Google Analytics", "psythemes" ), //Required

    "id" => "analitica", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Insert tracking code to use this function.", "psythemes" ),

    "placeholder" => __( "UA-30189257-31", "psythemes" ),

),

array(

    "under_section" => "general-config", //Required
    "type" => "text", //Required
    "name" => __( "Report Email", "psythemes" ), //Required
    "id" => "reportemail", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "desc" => __( "Insert the email where you want the reports to be sent to.", "psythemes" ),

), 

array(

    "under_section" => "general-config",
    "type" => "small_heading",
    "title" => __("Customize Logos & Images", "psythemes"),
),	

array(
    "under_section" => "general-config",
    "type" => "image", //Required
    "placeholder" => __("Upload favicon","psythemes"),
    "name" => __("Site Favicon","psythemes"), //Required
    "id" => "general-favicon", //Required
    "desc" => __("Add favicon, Recommended in .ico format","psythemes"),
    "default" => ""),
array(
    "under_section" => "general-config",
    "type" => "image", //Required
    "placeholder" => __("Site Logo - Dark Colored Text","psythemes"),
    "name" => __("Logo (Light)","psythemes"), //Required
    "id" => "psy-light-logo", //Required
    "desc" => __("Replace site's dark logo for light bg. Required dimension's 374px * 98px ","psythemes"),
    "default" => ""),
array(
    "under_section" => "general-config",
    "type" => "image", //Required
    "placeholder" => __("Site Logo - Light Colored Text","psythemes"),
    "name" => __("Logo (Dark)","psythemes"), //Required
    "id" => "psy-dark-logo", //Required
    "desc" => __("Replace site's light logo for dark bg. Required dimension's 374px * 98px ","psythemes"),
    "default" => ""),
	array(
    "under_section" => "general-config",
    "type" => "image", //Required
    "placeholder" => __("Footer Logo","psythemes"),
    "name" => __("Footer Logo","psythemes"), //Required
    "id" => "psy-footer-logo", //Required
    "desc" => __("Replace footer's logo. Required dimension's 300px * 80px ","psythemes"),
    "default" => ""),	
array(
    "under_section" => "general-config",
    "type" => "image", //Required
    "placeholder" => __("wp-admin Logo","psythemes"),
    "name" => __("Admin Logo","psythemes"), //Required
    "id" => "wpadmin-logo", //Required
    "desc" => __("Replace wp-admin logo. Required dimension's 300px * 80px ","psythemes"),
    "default" => ""),
array(
    "under_section" => "general-config",
    "type" => "image", //Required
    "placeholder" => __("wp-admin Logo","psythemes"),
    "name" => __("Facebook Capture Image","psythemes"), //Required
    "id" => "fbcapture-image", //Required
    "desc" => __("Replace the image that facebook will capture. Required dimension's 800px * 420px ","psythemes"),
    "default" => ""),

/*
array(
    "under_section" => "general-config", //Required
    "type" => "radio", //Required
    "name" => __( "User Registration", "psythemes" ), //Required
    "id" => "user-reg-check", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("enable" => __('Enable','psythemes'), "disable" => __('Disable','psythemes')), //Required
    "default" => "enable",
), 
*/




array (
	"under_section" => "general-config",
	"type" => "small_heading",
	"title" => __( "reCaptcha Settings", "psythemes" ),
),


array(

    "under_section" => "general-config", //Required

    "type" => "text", //Required

    "name" => __( "Public Key", "psythemes" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "public_key_rcth", //Required

    "placeholder" => "9Be3-7FGUUUUUUKC5Vx_IFxfkUaDHLZifBI0-kij",

    "desc" => 
	
	__("Get your key here - <a href=\"https://www.google.com/recaptcha/admin\" target=\"_blank\">Google reCAPTCHA</a>.",
"psythemes"),
    "default" => ""

),

array(

    "under_section" => "general-config", //Required

    "type" => "text", //Required

    "name" => __( "Private Key", "psythemes" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "private_key_rcth", //Required

    "placeholder" => "9Be3-7FGUUUUUFSKhhqv3kozQDlqJo90sfOnvQNs",

    "desc" => __("Get your key here - <a href=\"https://www.google.com/recaptcha/admin\" target=\"_blank\">Google reCAPTCHA</a>.", "psythemes"),


),




	array(
    "under_section" => "general-config", 
    "type" => "small_heading", 
    "title" => __( "Favorites Settings", "psythemes" ),
),

array(

    "under_section" => "general-config",

    "type" => "checkbox",

    "name" => __("Favorite System", "psythemes"),

    "id" => array("favorite-settings"),

    "options" => array( __("Activate","psythemes") ), 

    "desc" => __("Activate to enable this function", "psythemes"),

    "default" => array("checked"),

),


array(
    "under_section" => "general-config", //Required
    "type" => "radio", //Required
    "name" => "Allowed to rate", //Required
    "id" => "fav-allow-settings", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("1" => __('Logged-in Users Only','psythemes'), "2" => __('Guests & Logged-in Users','psythemes')), //Required
    "default" => "1"
),



array (
	"under_section" => "general-config",
	"type" => "small_heading",
	"title" => __( "Social Buttons", "psythemes" ),
),



array(
    "under_section" => "general-config", //Required
    "type" => "checkbox", //Required
    "name" => __( "Enable or Disable", "psythemes" ), //Required
	"id" => array("sli-social", "mov-social","tv-social","ep-social", "article-social", "page-social"), //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array ("Featured Slider", "Movie Page", "TV Series Page", "Episode Page", "Article Page", "Single Page"), //Required
    "default" => array("checked", "checked", "checked", "checked", "checked", "checked")
	
),

array(
    "under_section" => "general-config", //Required
    "type" => "text", //Required
    "name" => "AddThis ID", //Required
	"display_checkbox_id" => "toggle_checkbox_id",
    "id" => "sli-social-id", //Required
    "placeholder" => "ra-58afa5de7221535f",
	"desc" => __("<a href='https://psythemes.ml/docs/psyplay-documentation/#social-buttons' target='_blank'>Click here</a> to watch on how to setup an addthis.com codes and get your id.","psythemes"),
),

array(
    "under_section" => "general-config", //Required
    "type" => "text", //Required
    "name" => __( "Featured Slider - Social Message", "psythemes" ), //Required
    "id" => "sli-social-message", //Required
    "default" => __( "Like and Share our website to support us.", "psythemes" )
),



array (
	"under_section" => "general-config",
	"type" => "small_heading",
	"title" => __( "Related Module", "psythemes" ),
),

array(
    "under_section" => "general-config",
    "type" => "checkbox",
    "name" => __("Related Movies", "psythemes"),
    "id" => array("widget_related_mov"),
    "options" => array( __("Enable widget related movies?","psythemes"), ), 
    "desc" => __("Check to activate the function.", "psythemes"),
    "default" => array("checked")),
	
array(

    "under_section" => "general-config", //Required

    "type" => "text", //Required

    "name" => __("Related Movies - Title", "psythemes"), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "related-movie-title", //Required

    "desc" => __("Leave blank to use default.", "psythemes"),
	
	"placeholder" => __( "You May Also Like", "psythemes" )
),
array(

    "under_section" => "general-config", //Required

    "type" => "select", //Required

    "name" => __("Related Movies Amount", "psythemes"), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "related-movie", //Required

    "options" => array("6", "12", "18", "24"), //Required

    "desc" => __("select the number of items to display on the slider boxes", "psythemes"),

    "default" => "12"
),
array(
    "under_section" => "general-config",
    "type" => "checkbox",
    "name" => __("Related TV Series", "psythemes"),
    "id" => array("widget_related_tv"),
    "options" => array( __("Enable widget related tv series?","psythemes"), ), 
    "desc" => __("Check to activate the function.", "psythemes"),
    "default" => array("checked")
),
array(

    "under_section" => "general-config", //Required

    "type" => "select", //Required

    "name" => __("Related TV Series", "psythemes"), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "related-tv", //Required

    "options" => array("6", "12", "18", "24"), //Required

    "desc" => __("select the number of items to display on the slider boxes", "psythemes"),

    "default" => "12"
),

array(

    "under_section" => "general-config", //Required

    "type" => "text", //Required

    "name" => __("Related Movies - Title", "psythemes"), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "related-tv-title", //Required

    "desc" => __("Leave blank to use default.", "psythemes"),
	
	"placeholder" => __( "You May Also Like", "psythemes" )
),

array(

    "under_section" => "general-config", //Required

    "type" => "small_heading", //Required

    "title" => __( "Configure Pages", "psythemes" ), //Required
),


	array(
	// Field pages
	"under_section" => "general-config", 
    "type" => "pages", 
    "name" => __( "Keywords Page", "psythemes" ), 
    "display_checkbox_id" => "toggle_checkbox_id",
    "id" => "keywords_archive", 
    "desc" => __( "Select relevant page.", "psythemes" )
),

	array(
	// Field pages
	"under_section" => "general-config", 
    "type" => "pages", 
    "name" => __( "Account Page", "psythemes" ), 
    "display_checkbox_id" => "toggle_checkbox_id",
    "id" => "account_page", 
    "desc" => __( "Add link to the page (Account Area)", "psythemes" ),
),


array(
    "under_section" => "general-config", //Required
    "type" => "number", //Required
    "name" => __("Archives: Post per page","psythemes"), //Required
    "id" => "archive_posts", //Required
    "desc" => __("Amount of post per page. Recommended: 40 ","psythemes"),
	"default" => "40"
),


array(
	// Field pages
	"under_section" => "general-config", 
    "type" => "pages", 
    "name" => __( "Movies Archive", "psythemes" ), 
    "display_checkbox_id" => "toggle_checkbox_id",
    "id" => "mov_archive", 
    "desc" => __( "Select relevant page.", "psythemes" ),
),

array(
	// Field pages
	"under_section" => "general-config", 
    "type" => "pages", 
    "name" => __( "Most Viewed Archive", "psythemes" ), 
    "display_checkbox_id" => "toggle_checkbox_id",
    "id" => "mviewed_archive", 
    "desc" => __( "Select relevant page.", "psythemes" ),
),


array(
	// Field pages
	"under_section" => "general-config", 
    "type" => "pages", 
    "name" => __( "Most Favorite Archive", "psythemes" ), 
    "display_checkbox_id" => "toggle_checkbox_id",
    "id" => "mfav_archive", 
    "desc" => __( "Select relevant page.", "psythemes" ),
),


array(
	// Field pages
	"under_section" => "general-config", 
    "type" => "pages", 
    "name" => __( "Most Rating Archive", "psythemes" ), 
    "display_checkbox_id" => "toggle_checkbox_id",
    "id" => "mrat_archive", 
    "desc" => __( "Select relevant page.", "psythemes" ),
),


array(
	// Field pages
	"under_section" => "general-config", 
    "type" => "pages", 
    "name" => __( "Top IMDb Archive", "psythemes" ), 
    "display_checkbox_id" => "toggle_checkbox_id",
    "id" => "topimdb_archive", 
    "desc" => __( "Select relevant page.", "psythemes" ),
),



// TMDb Settings
array(
    "under_section" => "api-config",
    "type" => "checkbox",
    "name" => __("TMDb API","psythemes"),
    "id" => array("tmdbapi"),
    "options" => array( __("Activate","psythemes"), ), 
    "desc" => __("Configure your API on<a href=\"https://www.themoviedb.org/account/\" target=\"_blank\">Themoviedb.org</a>", "psythemes"),
    "default" => array("not")),
array(
    "under_section" => "api-config", //Required
    "type" => "text", //Required
    "name" => __( "API Key", "psythemes" ),  //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "id" => "tmdbkey", //Required
    "desc" => __( "Add the API Details from themoviedb.org", "psythemes" ),
),
array(
    "under_section" => "api-config", 
    "type" => "text", 
    "name" => __('Language API','psythemes'), 
    "display_checkbox_id" => "toggle_checkbox_id",
    "id" => "tmdbidioma", 
    "desc" => __('Select language of the generated data','psythemes'),
    "default" =>"en-US",
),
array(
    "under_section" => "api-config",
    "type" => "checkbox",
    "name" => __("Generate Categories","psythemes"),
    "id" => array("apigenero"),
    "options" => array( __("Activate","psythemes"), ), 
    "desc" => __("This function automatically generates categories", "psythemes"),
    "default" => array("checked")),
	
	// ANTI Adblocker
	
	array(
    "under_section" => "adblock-config",
    "type" => "checkbox",
    "name" => __("Anti Ad-Blocker","psythemes"),
    "id" => "psy-anti-adblock", //Required
    "options" => array( __("Activate","psythemes"), ), 
    "default" => array("not")),
	
	array(
    "under_section" => "adblock-config", //Required
    "type" => "radio", //Required
    "name" => "Alert Type", //Required
    "id" => "psy-anti-adblock-type", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("full" => __('Fullscreen','psythemes'), "box" => __('Floating','psythemes')), //Required
    "desc" => "Display message if user has enabled ad blocker on browser.",
    "default" => "full"
),

array(

    "under_section" => "adblock-config", //Required
    "type" => "textarea", //Required
    "name" => __( "Message", "psythemes" ), //Required
    "id" => "psy-anti-adblock-message", //Required
	"placeholder" => __( "Please don't block ads. They are the only way to maintain this site. Your patience is highly appreciated and we hope our service can be worth it.", "psythemes" ),	
	"desc" => __( "Leave blank to use default", "psythemes" ),
    "display_checkbox_id" => "toggle_checkbox_id",	

),

array(

    "under_section" => "adblock-config", //Required
    "type" => "text", //Required
    "name" => __( "Button", "psythemes" ), //Required
    "id" => "psy-anti-adblock-button", //Required
	"placeholder" => __( "I have disabled my ad blocker.", "psythemes" ),	
	"desc" => __( "Leave blank to use default", "psythemes" ),
    "display_checkbox_id" => "toggle_checkbox_id",	

),

	// Style Settings
	
	array(
    "under_section" => "style-config", //Required
    "type" => "radio", //Required
    "name" => __( "Default Style", "psythemes" ), //Required
    "id" => "psy-default-style", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("light" => __('Light','psythemes'), "dark" => __('Dark','psythemes')), //Required
    "default" => "light"
),

array(
    "under_section" => "style-config", //Required
    "type" => "checkbox", //Required
    "name" => __( "More Options", "psythemes" ), //Required
	"id" => array("rounded-corners", "border-effect", "content-preview"), //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array (__( "Rounded Corners (Posters)", "psythemes" ),__( "Border Effect (Posters)", "psythemes" ),__( "Movie Preview", "psythemes" )), //Required
	"default" => array("not", "not", "checked")
),	
	
array(

    "under_section" => "style-config",
    "type" => "small_heading",
    "title" => __("Color Scheme", "psythemes"),

),	

array(
    "under_section" => "style-config", //Required
    "type" => "radio_image", //Required
    "name" => "Select a Color", //Required
    "show_labels" => "false",
    "image_src" => array(get_bloginfo('template_directory') . "/images/img_desc/colors/green.png", get_bloginfo('template_directory') . "/images/img_desc/colors/blue.png", get_bloginfo('template_directory') . "/images/img_desc/colors/purple.png", get_bloginfo('template_directory') . "/images/img_desc/colors/pink.png", get_bloginfo('template_directory') . "/images/img_desc/colors/orange.png", get_bloginfo('template_directory') . "/images/img_desc/colors/red.png"), //Required
    "image_size" => array("50"),
    "display_checkbox_id" => "toggle_checkbox_id",
    "id" => "psy-color-scheme", //Required
    "options" => array("green", "blue", "purple", "pink", "orange", "red"), //Required
    "desc" => "Choose your desired color scheme.",
    "default" => "green"
	),
	
array(
    "under_section" => "style-config",
    "type" => "small_heading",
    "title" => __("Pre-made Style", "psythemes"),
),	

array(
    "under_section" => "style-config",
    "type" => "tips",
    "text" => __("Activating a pre-made style will override your selected color scheme.", "psythemes"),
),	

array(

    "under_section" => "style-config",
    "type" => "checkbox",
    "name" => __("GoMovies Style", "psythemes"),
    "id" => array("premade_style1"),
    "options" => array( __("Activate","psythemes"), ), 
	"img_desc" => get_bloginfo('template_directory')."/images/img_desc/gm.png",
    "default" => array("not")

),
		
	// Site Notice

array(

    "under_section" => "notice-config",

    "type" => "checkbox",

    "name" => __("Noticebar Module", "psythemes"),

    "id" => array("activar_notice"),

    "options" => array( __("Activate","psythemes"), ), 

    "desc" => __("Active to display the module.", "psythemes"),

    "default" => array("not")

),

array(
    "under_section" => "notice-config", //Required
    "type" => "radio", //Required
    "name" => __( "Appearance", "psythemes" ), //Required
    "id" => "notice_location", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("home" => __('Home page','psythemes'), "global" => __('Entire site','psythemes')), //Required
    "default" => "home"
),

array(

    "under_section" => "notice-config", //Required

    "type" => "textarea", 

    "name" => __( "Message", "psythemes" ), //Required

    "id" => "notice", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add notice, this field accepts HTML", "psythemes" ),

),



array(

    "under_section" => "notice-config", //Required

    "type" => "color", //Required

    "name" => __("Background Color","psythemes"), //Required

    "id" => "color_notice", //Required

    "desc" => __("Choose a color","psythemes"),

    "default" => "0F87FE"

),

array(

    "under_section" => "notice-config", //Required

    "type" => "color", //Required

    "name" => __("Links Color","psythemes"), //Required

    "id" => "color_lnknotice", //Required

    "desc" => __("Choose a color","psythemes"),

    "default" => "c8e2fd"

),
	
// First Visit Notice

array(

    "under_section" => "notice-config",

    "type" => "small_heading",

    "title" => __("First Visit Notice", "psythemes"),

),	

array(

    "under_section" => "notice-config",

    "type" => "tips",

    "text" => __("Unlike the notice above, This notice only appear once. It's a cookie based notice that only appear on first visit. ", "psythemes"),

),	


array(
    "under_section" => "notice-config", //Required
    "type" => "radio", //Required
    "name" => __( "Display Notice", "psythemes" ), //Required
    "id" => "first-visit-notice", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("enable" => __('Enable','psythemes'), "disable" => __('Disable','psythemes')), //Required
    "default" => "disable"
),

array(

    "under_section" => "notice-config", //Required

    "type" => "color", //Required

    "name" => __("Background","psythemes"), //Required

    "id" => "first_visit_notice_bg", //Required

    "desc" => __("Choose a color","psythemes"),

    "default" => "7a0087"

),

array(
    "under_section" => "notice-config",
    "type" => "textarea",
    "name" => __("Message", "psythemes"),
    "id" => "first-visit-notice-message",
	"code" => "{site}",
	"default" => "Please Follow us on Twitter/Facebook to receive latest news about {site}",
	"desc" => __("Use {site} to display your site name. HTML tags allowed.", "psythemes"),
	"rows" =>"4"
),

array(
    "under_section" => "notice-config",
    "type" => "checkbox",
    "name" => __("Like & Follow Buttons", "psythemes"),
    "id" => array("first-visit-notice-buttons"),
    "options" => array( __("Activate","psythemes"), ), 
    "default" => array("not")
),	


array(
    "under_section" => "notice-config",
    "type" => "text",
    "name" => __("Title", "psythemes"),
    "id" => "first-visit-notice-title",
	"default" => __("Follow Us", "psythemes")
),	

array(
    "under_section" => "notice-config",
    "type" => "text",
    "name" => __("Facebook Page URL", "psythemes"),
    "id" => "notice-facebook-url",
	"placeholder" => __("https://facebook.com/psythemes/", "psythemes"),
),	

array(
    "under_section" => "notice-config",
    "type" => "text",
    "name" => __("Twitter Account URL", "psythemes"),
    "id" => "notice-twitter-url",
	"placeholder" => __("https://twitter.com/psythemes/", "psythemes"),
),
	
// Watch Settings



array(
    "under_section" => "watch-config", //Required
    "type" => "checkbox", //Required
    "name" => __( "Controls", "psythemes" ), //Required
	"id" => array("watch-light", "watch-favorite","watch-comment","watch-report", "watch-ratings", "watch-next-previous-ep", "watch-views"), //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array (__( "Turn Off Lights", "psythemes" ), __( "Favorite", "psythemes" ), __( "Comments", "psythemes" ), __( "Report", "psythemes" ), __( "Ratings", "psythemes" ), __( "Next & Previous", "psythemes" ),__( "Views", "psythemes" )), //Required
    "default" => array("checked", "checked", "checked", "checked", "checked", "checked", "checked", "checked")	
),	


array(
	"under_section" => "watch-config",
	"type" => "small_heading",
	"title" => __( "Splash Screen", "psythemes" )
),

array(
    "under_section" => "watch-config", //Required
    "type" => "radio", //Required
    "name" => __( "Splash Image & Button", "psythemes" ), //Required
    "id" => "psy-splash-screen", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
	"desc" => "Display a splash image that user have to click to view the video. ",	
    "options" => array("enable" => __('Enable','psythemes'), "disable" => __('Disable','psythemes')), //Required
    "default" => "disable"
),

array(
	"under_section" => "watch-config",
	"type" => "small_heading",
	"title" => __( "Images Slideshow", "psythemes" )
),


array(
    "under_section" => "watch-config", //Required
    "type" => "radio", //Required
    "name" => __( "Images Slideshow", "psythemes" ), //Required
    "id" => "images-slideshow-mv", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
	"desc" => "Slideshow automatically slides. ",	
    "options" => array("enable" => __('Enable','psythemes'), "disable" => __('Disable','psythemes')), //Required
    "default" => "disable"
),



/*
array(
	"under_section" => "watch-config",
	"type" => "small_heading",
	"title" => __( "Ad in Player", "psythemes" )
),

array(
    "under_section" => "watch-config", //Required
    "type" => "checkbox", //Required
    "name" => __( "Ads in Player", "psythemes" ), //Required
	"id" => array("ads-inplayer", "hide-ads-after-click"), //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array (__( "Ads in player", "psythemes" ), __( "Hide ads after clicking", "psythemes" )), //Required
    "default" => array("checked", "checked")
),

array(
    "under_section" => "watch-config", //Required
    "type" => "number", //Required
    "name" => __( "Ads Duration", "psythemes" ), //Required
	"id" => "ads-inplayer-duration",
	"desc" => "Time in seconds before the ads disappear automatically.",
	"default" => "20"
),


array(
    "under_section" => "watch-config", //Required
    "type" => "textarea", //Required
    "name" => __( "Codes", "psythemes" ), //Required
	"desc" => __("Use HTML codes. Recommended: 300x250 px","psythemes"),
	"id" => "ads-inplayer-code",
),


*/







// Articles Settings

array(
    "under_section" => "article-config", //Required
    "type" => "number", //Required
    "name" => "Articles: Post per page", //Required
	"id" => "article-archive-posts",
	"default" => "20"
),

array(
    "under_section" => "article-config",
    "type" => "checkbox",
    "name" => __("Article: Post Header", "psythemes"),
    "id" => array("article-header"),
    "options" => array( __("Activate","psythemes"), ), 
    "default" => array("checked")
),

array(
	"under_section" => "article-config",
	"type" => "small_heading",
	"title" => __( "Facebook Likebox", "psythemes" )
),

array(
    "under_section" => "article-config", //Required
    "type" => "radio", //Required
    "name" => __( "Enable or Disable", "psythemes" ), //Required
    "id" => "article-likebox", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("enable" => __('Enable','psythemes'), "disable" => __('Disable','psythemes')), //Required
    "default" => "disable"
),

array(
    "under_section" => "article-config", //Required
    "type" => "text", //Required
    "name" => __( "Facebook Page Url", "psythemes" ), //Required
	"id" => "article-likebox-fbid",
    "placeholder" => "http://facebook.com/google",
),

array(
    "under_section" => "article-config", //Required
    "type" => "checkbox", //Required
    "name" => __( "Likebox Settings", "psythemes" ), //Required
	"id" => array("likebox-header", "likebox-cover","likebox-timeline","likebox-facepile"), //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array (__( "Small Header", "psythemes" ), __( "Hide Cover Photo", "psythemes" ), __( "Show Timeline", "psythemes" ), __( "Show Friend's Faces", "psythemes" )), //Required
    "default" => array("not", "not", "checked", "checked")
	
),


array(
	"under_section" => "article-config",
	"type" => "small_heading",
	"title" => __( "Related Articles", "psythemes" )
),

array(
    "under_section" => "article-config", //Required
    "type" => "checkbox", //Required
    "name" => __( "Enable", "psythemes" ), //Required
	"id" => array("article-related"), //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array (__( "Activate", "psythemes" )), //Required
    "default" => array("checked")
	
),

array(
    "under_section" => "article-config", //Required
    "type" => "text", //Required
    "name" => __( "Related Articles - Title", "psythemes" ), //Required
	"id" => "article-related-title",
    "placeholder" => __( "Related Articles", "psythemes" ),
	"desc" => __( "Leave blank to use default", "psythemes" )
	
),

array(
    "under_section" => "article-config", //Required
    "type" => "number", //Required
    "name" => __( "Amount", "psythemes" ), //Required
	"id" => "article-related-amount",
	"default" => "5"
),

array(
	"under_section" => "article-config",
	"type" => "small_heading",
	"title" => __( "Hot Articles", "psythemes" )
),

array(
    "under_section" => "article-config", //Required
    "type" => "checkbox", //Required
    "name" => __( "Enable", "psythemes" ), //Required
	"id" => array("article-hot"), //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array (__( "Activate", "psythemes" )), //Required
    "default" => array("checked")
	
),

array(
    "under_section" => "article-config", //Required
    "type" => "text", //Required
    "name" => __( "Hot Articles Title", "psythemes" ), //Required
	"id" => "article-hot-title",
    "placeholder" => __( "Hot Articles", "psythemes" ),
	"desc" => __( "Leave blank to use default", "psythemes" )
	
),

array(
    "under_section" => "article-config", //Required
    "type" => "number", //Required
    "name" => __( "Amount", "psythemes" ), //Required
	"id" => "article-hot-amount",
	"default" => "5"
),


// Next Episode Notice

array(
    "under_section" => "tv-config",
    "type" => "checkbox",
    "name" => __("Next Episode - Schedule", "psythemes"),
    "id" => array("ep_sched"),
    "options" => array( __("Activate","psythemes"), ), 
    "default" => array("checked")
),
	
array(

    "under_section" => "tv-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Schedule Message", "psythemes" ), //Required

    "id" => "sched_note", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "placeholder" => __( "Estimated the next episode will come at {date} {time} {countdown}", "psythemes" ),
	
	"default" => "Estimated the next episode will come at {date} {time} {countdown}",
		
	"rows" =>"5",
		
	"code" => "{date}<br>{time}<br>{countdown}",

    "default" => ""


),

array(

    "under_section" => "tv-config", //Required

    "type" => "color", //Required

    "name" => __("Text Color","psythemes"), //Required

    "id" => "ep-sched-text", //Required

    "desc" => __("Click the box to select a color","psythemes"),

    "default" => "ffffff"

),

array(

    "under_section" => "tv-config", //Required

    "type" => "color", //Required

    "name" => __("Background Color","psythemes"), //Required

    "id" => "ep-sched-bg", //Required

    "desc" => __("Click the box to select a color","psythemes"),

    "default" => "79c143"

),

array(

    "under_section" => "tv-config", //Required

    "type" => "color", //Required

    "name" => __("Border Color","psythemes"), //Required

    "id" => "ep-sched-border", //Required

    "desc" => __("Click the box to select a color","psythemes"),

    "default" => "79c143"

),


// Comments Settings

array(
    "under_section" => "comentarios-config", //Required
    "type" => "radio", //Required
    "name" => __( "Comments System", "psythemes" ), //Required
    "id" => "comment-sys", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("wp_comment" => __('Wordpress','psythemes'), "fb_comment" => __('Facebook Comments','psythemes'),"dq_comment" => __('Disqus Comments','psythemes')), //Required
    "desc" => __( "Choose an option", "psythemes" ),
    "default" => "fb_comment"
),

array(
    "under_section" => "comentarios-config", //Required
    "type" => "checkbox", //Required
    "name" => __( "Enable or Disable", "psythemes" ), //Required
    "id" => array("comm_mov", "comm_tv","comm_ep","comm_news", "comm_not", "comm_page"), //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array (__( "Movies", "psythemes" ), __( "TV Series", "psythemes" ), __( "Episodes", "psythemes" ), __( "Article", "psythemes" ), __( "Notices", "psythemes" ), __( "Single Pages", "psythemes" )), //Required
    "desc" => __( "Choose which pages you want the comments section to be enabled.", "psythemes" ),
    "default" => array("checked", "checked", "checked", "checked", "checked", "not")
),

array (

	"under_section" => "comentarios-config",
	"type" => "small_heading",
	"title" => __( "Facebook Commnets", "psythemes" ),
),
array (

	"under_section" => "comentarios-config",
	"type" => "tips",
	"text" => __( "We recommend setting these fields to moderate the facebook comments, <a href='https://developers.facebook.com/docs/plugins/comments' target='_blank'>more info</a>", "psythemes" ),
),

array(

    "under_section" => "comentarios-config", //Required

    "type" => "text", //Required

    "name" => __( "Facebook App ID", "psythemes" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fb_id", //Required

    "placeholder" => "209955335852854",

    "desc" => __( "Insert you Facebook app id here. If you don't have one for your webpage you can create it <a href='https://developers.facebook.com/apps/' target='_blank'>here</a>", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "comentarios-config", //Required

    "type" => "text", //Required

    "name" => __( "Admin User", "psythemes" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fb_id_admin", //Required

    "desc" => __( "Enter username or user ID to manage comments", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "comentarios-config", //Required

    "type" => "text", //Required

    "name" => __( "App language", "psythemes" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fb_idioma", //Required

    "placeholder" => "en_EN",

    "desc" => __( "Add the language code you want, (es_LA, ro_RO, pt_BR)", "psythemes" ),

    "default" => ""

),


array(
    "under_section" => "comentarios-config", //Required
    "type" => "radio", //Required
    "name" => __( "Color Scheme", "psythemes" ), //Required
    "id" => "fb_color", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("light" => __('Light Color','psythemes'), "dark" => __('Dark Color','psythemes')), //Required
    "desc" => __( "Choose an option", "psythemes" ),
    "default" => "light"
),

array(

    "under_section" => "comentarios-config", //Required

    "type" => "number", //Required

    "name" => __("Facebook Number of Posts", "psythemes"), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fb_numero", //Required

    "desc" => __("Select number of comments to display per publication", "psythemes"),

    "default" => "10"),
array(
	"under_section" => "comentarios-config",
	"type" => "small_heading",
	"title" => __( "Disqus Comments", "psythemes" ),
),


array(

    "under_section" => "comentarios-config", //Required

    "type" => "text", //Required

    "name" => __( "Shorname Disqus", "psythemes" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "disqus_id", //Required

    "placeholder" => "grifus",

    "desc" => __( "Add your community shortname Disqus", "psythemes" ),

    "default" => ""

),

// Footer Settings

array(
    "under_section" => "footer-config",
    "type" => "image", //Required
    "placeholder" => __("Upload Logo","psythemes"),
    "name" => __("Footer Logo","psythemes"), //Required
    "id" => "footer-logo", //Required
    "desc" => __("Add footer logo. Recommended size: 300px x 80px","psythemes"),
    "default" => ""),
	
array(

    "under_section" => "footer-config", //Required

    "type" => "small_heading", //Required

    "title" => __( "Social Media Accounts", "psythemes" ), //Required
),


array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "psythemes" ), //Required

    "id" => "social_title_footer", //Required

	"placeholder" => "Stay Connected",
	
	"desc" => __( "Leave blank to use default.", "psythemes" ),

    "display_checkbox_id" => "toggle_checkbox_id",

),

array(

    "under_section" => "footer-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Message", "psythemes" ), //Required

    "id" => "social_message_footer", //Required

	"placeholder" => __( "Like & follow us on social networking sites to get the latest updates on movies, tv-series and news", "psythemes" ),
	
	"desc" => __( "Leave blank to use default", "psythemes" ),

    "display_checkbox_id" => "toggle_checkbox_id",
	
			"rows" =>"4",

),

array(
    "under_section" => "footer-config",
    "type" => "checkbox",
    "name" => __("Enable/Disable Icons","psythemes"),
    "id" => array("fb_icon_footer","tw_icon_footer","gp_icon_footer","yt_icon_footer"),
    "options" => array( __("Facebook","psythemes"), __("Twitter","psythemes"), __("Google+","psythemes"), __("Youtube","psythemes"), ), 
    "default" => array("checked","checked","checked","checked")
),


array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Facebook", "psythemes" ), //Required

    "id" => "social_fb_footer", //Required

	"placeholder" => "https://www.facebook.com/google",

    "display_checkbox_id" => "toggle_checkbox_id",

),

array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Twitter", "psythemes" ), //Required

    "id" => "social_tw_footer", //Required

	"placeholder" => "https://twitter.com/google",

    "display_checkbox_id" => "toggle_checkbox_id",

),

array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Google+", "psythemes" ), //Required

    "id" => "social_gp_footer", //Required

	"placeholder" => "https://plus.google.com/+google",

    "display_checkbox_id" => "toggle_checkbox_id",

),

array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Youtube", "psythemes" ), //Required

    "id" => "social_yt_footer", //Required

	"placeholder" => "https://www.youtube.com/user/google",

    "display_checkbox_id" => "toggle_checkbox_id",

),

array(

    "under_section" => "footer-config", //Required

    "type" => "small_heading", //Required

    "title" => __( "Copyrights & Disclaimer", "psythemes" ), //Required
),


array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Copyright Footer Text", "psythemes" ), //Required

    "id" => "copyright_footer", //Required

	"placeholder" => " ".__( 'Powered by', 'psythemes' )." WordPress & Moundothemes",

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Your license allows you to modify the copyright", "psythemes" ),

    "default" => ""

),
array(

    "under_section" => "footer-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Disclaimer Footer Text", "psythemes" ), //Required

    "id" => "disclaimer_footer", //Required

	"placeholder" => __( "Disclaimer: This site does not store any files on its server. All contents are provided by non-affiliated third parties.", "psythemes" ),

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Your license allows you to modify the disclaimer", "psythemes" ),
	
			"rows" =>"4",

    "default" => ""
	


),


array(
    "under_section" => "footer-config", 
    "type" => "small_heading", 
    "title" => __( "Footer Keywords", "psythemes" ),
),


array(
    "under_section" => "footer-config", //Required
    "type" => "radio", //Required
    "name" => __( "Display Keywords", "psythemes" ), //Required
    "id" => "display-footkey", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("enable" => __('Enable','psythemes'), "disable" => __('Disable','psythemes')), //Required
    "default" => "enable"
),


array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Keyword 1", "psythemes" ), //Required

    "id" => "footkeyword_1", //Required

	"placeholder" => "Watch full movies online",

    "display_checkbox_id" => "toggle_checkbox_id",

    "placeholder" => __( "Leave blank to use default.", "psythemes" )

),

array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Keyword 2", "psythemes" ), //Required

    "id" => "footkeyword_2", //Required

	"placeholder" => "Free movies online",

    "display_checkbox_id" => "toggle_checkbox_id",

	
    "placeholder" => __( "Leave blank to use default.", "psythemes" )

),

array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Keyword 3", "psythemes" ), //Required

    "id" => "footkeyword_3", //Required

	"placeholder" => "Movietube",

    "display_checkbox_id" => "toggle_checkbox_id",

    "placeholder" => __( "Leave blank to use default.", "psythemes" )

),

array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Keyword 4", "psythemes" ), //Required

    "id" => "footkeyword_4", //Required

	"placeholder" => "Free online movies full",

    "display_checkbox_id" => "toggle_checkbox_id",

    "placeholder" => __( "Leave blank to use default.", "psythemes" )

),

array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Keyword 5", "psythemes" ), //Required

    "id" => "footkeyword_5", //Required

	"placeholder" => "Movie2k",

    "display_checkbox_id" => "toggle_checkbox_id",

    "placeholder" => __( "Leave blank to use default.", "psythemes" )

),
array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Keyword 6", "psythemes" ), //Required

    "id" => "footkeyword_6", //Required

	"placeholder" => "Watch movies 2k",

    "display_checkbox_id" => "toggle_checkbox_id",

    "placeholder" => __( "Leave blank to use default.", "psythemes" )

),

### HOMEPAGE ####


// homepage modules

array(

    "under_section" => "home-module", //Required

    "type" => "textarea", 

    "name" => __( "Module Shortcodes", "psythemes" ), //Required

    "id" => "module-shortcodes", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add modular Shortcodes to arrange your home page.", "psythemes" ),
	
	"code" => "[module-movies]<br>[module-tvshows]<br>[module-episodes]<br>[module-extra1]<br>[module-extra2]<br>[module-extra3]<br>[module-extra4]<br>[module-extra5]"

),



// Featured Slider Module


array(
    "under_section" => "sli-module",
    "type" => "checkbox",
    "name" => __("Featured Slider Module","psythemes"),
    "id" => array("featslidmodule"),
    "options" => array( __("Activate","psythemes"), ), 
    "default" => array("checked")
),

array (
	"under_section" => "sli-module",
	"type" => "small_heading",
	"title" => __( "Featured Movies", "psythemes" ),
),

array(
    "under_section" => "sli-module",
    "type" => "checkbox",
    "name" => __("Contents Types", "psythemes"),
    "id" => array("slider-mv","slider-tv","slider-ep",),
    "options" => array( __("Movies","psythemes"), __("TV-Series","psythemes") ), 
    "default" => array("checked","not",),

),
	
array(
    "under_section" => "sli-module", //Required
    "type" => "radio", //Required
    "name" => __( "Filter by:", "psythemes" ), //Required
    "id" => "filterby-cat", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("disable" => __('Release Year','psythemes'), "enable" => __('Category','psythemes')), //Required
    "default" => "disable"
),

	
array(
    "under_section" => "sli-module", //Required
    "type" => "number", //Required
    "name" => __("Category ID or Year ID","psythemes"), //Required
    "id" => "estrenos_cat", //Required
	"display_checkbox_id" => "toggle_checkbox_id",
    "desc" => __("Enter the correct term id.","psythemes")
),
array(
    "under_section" => "sli-module", //Required
    "type" => "number", //Required
    "name" => __("Item Amount","psythemes"), //Required
    "id" => "slider_num", //Required
    "desc" => __("Enter amount of featured movies to display in slider","psythemes"),
	"default" => ("5")),
	
array (
	"under_section" => "sli-module",
	"type" => "small_heading",
	"title" => "News & Site Notice",
),

array(
    "under_section" => "sli-module", //Required
    "type" => "radio", //Required
    "name" => __( "Featured News", "psythemes" ), //Required
    "id" => "news-module", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("enable" => __('Enable','psythemes'), "disable" => __('Disable','psythemes')), //Required
    "default" => "enable"
),

array(
    "under_section" => "sli-module", //Required
    "type" => "radio", //Required
    "name" => __( "Featured Notice", "psythemes" ), //Required
    "id" => "notice-module", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("enable" => __('Enable','psythemes'), "disable" => __('Disable','psythemes')), //Required
	"desc" => __("Feature coming soon.","psythemes"),
    "default" => "disable"
),




array (
	"under_section" => "sli-module",
	"type" => "small_heading",
	"title" => __( "Mobile Applications", "psythemes" ),
),

array(
    "under_section" => "sli-module",
    "type" => "checkbox",
    "name" => __("Android App","psythemes"),
    "id" => array("mobile_android"),
    "options" => array( __("Activate","psythemes"), ), 
),

array(
    "under_section" => "sli-module",
    "type" => "text",
    "name" => __("Android App Link","psythemes"),
    "id" => "android-link",
    "placeholder" => __("https://play.google.com/store/apps/details?id=com.android.chrome","psythemes"),
),

array(
    "under_section" => "sli-module",
    "type" => "checkbox",
    "name" => __("iOS App","psythemes"),
    "id" => array("mobile_ios"),
    "options" => array( __("Activate","psythemes"), ), 
),

array(
    "under_section" => "sli-module",
    "type" => "text",
    "name" => __("iOS App Link","psythemes"),
    "id" => "ios-link",
    "placeholder" => __("https://itunes.apple.com/us/app/id535886823","psythemes"),
),


// Suggestions Module

	array(
    "under_section" => "sugg-module",
    "type" => "checkbox",
    "name" => __("Suggestions Module","psythemes"),
    "id" => array("suggmodule"),
    "options" => array( __("Activate","psythemes"), ), 
    "default" => array("checked")),
	array(
    "under_section" => "sugg-module", //Required
    "type" => "text", //Required
    "name" => __("Module Title","psythemes"), //Required
    "id" => "sugg_title", //Required
    "placeholder" => __("Suggestion","psythemes"),
    "desc" => __("Leave blank to use the default title.","psythemes"),
	"default" => ("Suggestion")),
array(
    "under_section" => "sugg-module", //Required
    "type" => "number", //Required
    "name" => __("Items Amount","psythemes"), //Required
    "id" => "sugg_num", //Required
	"default" => ("16")),
	array(
    "under_section" => "sugg-module", //Required
    "type" => "checkbox", //Required
    "name" => __( "Sub Modules", "psythemes" ), //Required
    "id" => array("sugg_mviews", "sugg_mfav","sugg_trating","sugg_timdb"), //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array (__( "Most Viewed", "psythemes" ), __( "Most Favorite", "psythemes" ), __( "Top Rating", "psythemes" ), __( "Top IMDb", "psythemes" )), //Required
    "default" => array("checked", "checked", "checked", "checked")
),

array (
	"under_section" => "sugg-module",
	"type" => "small_heading",
	"title" => __( "Featured Movies", "psythemes" )
),

array(
    "under_section" => "sugg-module", //Required
    "type" => "radio", //Required
    "name" => __( "Featured Movies", "psythemes" ), //Required
    "id" => "sugg-featured-mov", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("enable" => __('Enable','psythemes'), "disable" => __('Disable','psythemes')), //Required
    "default" => "enable"
),


array(
    "under_section" => "sugg-module",
    "type" => "checkbox",
    "name" => __("Contents Types", "psythemes"),
    "id" => array("sugg-mv","sugg-tv","slider-ep",),
    "options" => array( __("Movies","psythemes"), __("TV-Series","psythemes") ), 
    "default" => array("checked","not",),

),


array(
    "under_section" => "sugg-module", //Required
    "type" => "radio", //Required
    "name" => __( "Filter by:", "psythemes" ), //Required
    "id" => "sugg-filterby-cat", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("false" => __('Release Year','psythemes'), "true" => __('Category','psythemes')), //Required
    "default" => "false"
),

array(
    "under_section" => "sugg-module", //Required
    "type" => "number", //Required
    "name" => __("Category ID or Year ID","psythemes"), //Required
    "id" => "sugg_featured_mov_id", //Required
    "desc" => __("Enter the correct term id.","psythemes"),
),
// Latest Movies Module 


	array(
    "under_section" => "latest-mov",
    "type" => "checkbox",
    "name" => __("Latest Movies Module","psythemes"),
    "id" => array("movsmodule"),
    "options" => array( __("Activate","psythemes"), ), 
    "default" => array("checked"),
		"code" =>("[module-movies]")),
		array(
    "under_section" => "latest-mov", //Required
    "type" => "text", //Required
    "name" => __("Module Title","psythemes"), //Required
    "id" => "latestmov_title", //Required
    "placeholder" => __("Latest Movies","psythemes"),
    "desc" => __("Leave blank to use default title.","psythemes"),
	"default" => ("Latest Movies")),
array(
    "under_section" => "latest-mov", //Required
    "type" => "number", //Required
    "name" => __("Items Amount","psythemes"), //Required
    "id" => "latestmov_num", //Required
    "desc" => __("Enter amount of movies you want to display in homepage","psythemes"),
	"default" => ("16")),
	
// Latest TV-Series Module 
	
array(
    "under_section" => "latest-tv",
    "type" => "checkbox",
    "name" => __("Latest TV Shows Module","psythemes"),
    "id" => array("tvmodule"),
    "options" => array( __("Activate","psythemes"), ), 
    "default" => array("checked"),
		"code" =>("[module-tvshows]")),
			array(
    "under_section" => "latest-tv", //Required
    "type" => "text", //Required
    "name" => __("Module Title","psythemes"), //Required
    "id" => "latesttv_title", //Required
    "placeholder" => __("Latest TV Series","psythemes"),
    "desc" => __("Leave blank to use default title.","psythemes"),
	"default" => ("Latest TV Series")),
array(
    "under_section" => "latest-tv", //Required
    "type" => "number", //Required
    "name" => __("Items","psythemes"), //Required
    "id" => "latesttv_num", //Required
    "desc" => __("Enter amount of tv series you want to display in homepage","psythemes"),
	"default" => ("16")),
	
	
// Latest Episodes Module 

	array(
    "under_section" => "latest-ep",
    "type" => "checkbox",
    "name" => __("Latest Episodes Module","psythemes"),
    "id" => array("epmodule"),
    "options" => array( __("Activate","psythemes"), ), 
    "default" => array("checked"),
		"code" =>("[module-episodes]")),
			array(
    "under_section" => "latest-ep", //Required
    "type" => "text", //Required
    "name" => __("Module Title","psythemes"), //Required
    "id" => "latestep_title", //Required
    "placeholder" => __("Latest Episodes","psythemes"),
    "desc" => __("Leave blank to use default title.","psythemes"),
	"default" => ("Latest Episodes")),
	array(
    "under_section" => "latest-ep", //Required
    "type" => "number", //Required
    "name" => __("Items Amount","psythemes"), //Required
    "id" => "latestep_num", //Required
    "desc" => __("Enter amount of episodes you want to display in homepage","psythemes"),
	"default" => ("16")),
	
### ADDITIONAL MODULES ###

// EXTRA MODULE 1
array (

	"under_section" => "additional-modules", //Required
	"type" => "small_heading",
	"title" => __( "Extra Module 1", "psythemes" )
),
	array(
    "under_section" => "additional-modules", //Required
    "type" => "checkbox",
    "name" => __("Extra Module 1","psythemes"),
    "id" => array("1extramodule1"),
    "options" => array( __("Activate","psythemes"), ), 
		"code" =>("[module-extra1]")),
			array(
    "under_section" => "additional-modules", //Required
    "type" => "text", //Required
    "name" => __("Module Title","psythemes"), //Required
    "id" => "1extramodule1_title", //Required
    "placeholder" => __("Module Title","psythemes"),
    "desc" => __("Leave blank to use default title.","psythemes"),
	),
			array(
    "under_section" => "additional-modules", //Required
    "type" => "number", //Required
    "name" => __("Filter by: Category","psythemes"), //Required
    "id" => "1extramodule1_cat", //Required
    "desc" => __("Category ID (Numeric) where all the posts you want to display belongs to.","psythemes"),
	),
	array(
    "under_section" => "additional-modules", //Required
    "type" => "number", //Required
    "name" => __("Items Amount","psythemes"), //Required
    "id" => "1extramodule1_num", //Required
    "desc" => __("Enter amount of contents you want to display in this module","psythemes"),
	"default" => ("16")
	),
	
	
// EXTRA MODULE 2
array (

	"under_section" => "additional-modules", //Required
	"type" => "small_heading",
	"title" => __( "Extra Module 2", "psythemes" )
),
	array(
    "under_section" => "additional-modules", //Required
    "type" => "checkbox",
    "name" => __("Extra Module 2","psythemes"),
    "id" => array("2extramodule2"),
    "options" => array( __("Activate","psythemes"), ), 
		"code" =>("[module-extra2]")),
			array(
    "under_section" => "additional-modules", //Required
    "type" => "text", //Required
    "name" => __("Module Title","psythemes"), //Required
    "id" => "2extramodule2_title", //Required
    "placeholder" => __("Module Title","psythemes"),
    "desc" => __("Leave blank to use default title.","psythemes"),
	),
			array(
    "under_section" => "additional-modules", //Required
    "type" => "number", //Required
    "name" => __("Filter by: Category","psythemes"), //Required
    "id" => "2extramodule2_cat", //Required
    "desc" => __("Category ID (Numeric) where all the posts you want to display belongs to.","psythemes"),
	),
	array(
    "under_section" => "additional-modules", //Required
    "type" => "number", //Required
    "name" => __("Items Amount","psythemes"), //Required
    "id" => "2extramodule2_num", //Required
    "desc" => __("Enter amount of contents you want to display in this module","psythemes"),
	"default" => ("16")
	),	

// EXTRA MODULE 3
array (

	"under_section" => "additional-modules", //Required
	"type" => "small_heading",
	"title" => __( "Extra Module 3", "psythemes" )
),
	array(
    "under_section" => "additional-modules", //Required
    "type" => "checkbox",
    "name" => __("Extra Module 3","psythemes"),
    "id" => array("3extramodule3"),
    "options" => array( __("Activate","psythemes"), ), 
		"code" =>("[module-extra3]")),
			array(
    "under_section" => "additional-modules", //Required
    "type" => "text", //Required
    "name" => __("Module Title","psythemes"), //Required
    "id" => "3extramodule3_title", //Required
    "placeholder" => __("Module Title","psythemes"),
    "desc" => __("Leave blank to use default title.","psythemes"),
	),
			array(
    "under_section" => "additional-modules", //Required
    "type" => "number", //Required
    "name" => __("Filter by: Category","psythemes"), //Required
    "id" => "3extramodule3_cat", //Required
    "desc" => __("Category ID (Numeric) where all the posts you want to display belongs to.","psythemes"),
	),
	array(
    "under_section" => "additional-modules", //Required
    "type" => "number", //Required
    "name" => __("Items Amount","psythemes"), //Required
    "id" => "3extramodule3_num", //Required
    "desc" => __("Enter amount of contents you want to display in this module","psythemes"),
	"default" => ("16")
	),

// EXTRA MODULE 4
array (

	"under_section" => "additional-modules", //Required
	"type" => "small_heading",
	"title" => __( "Extra Module 4", "psythemes" )
),
	array(
    "under_section" => "additional-modules", //Required
    "type" => "checkbox",
    "name" => __("Extra Module 4","psythemes"),
    "id" => array("4extramodule4"),
    "options" => array( __("Activate","psythemes"), ), 
		"code" =>("[module-extra4]")),
			array(
    "under_section" => "additional-modules", //Required
    "type" => "text", //Required
    "name" => __("Module Title","psythemes"), //Required
    "id" => "4extramodule4_title", //Required
    "placeholder" => __("Module Title","psythemes"),
    "desc" => __("Leave blank to use default title.","psythemes"),
	),
			array(
    "under_section" => "additional-modules", //Required
    "type" => "number", //Required
    "name" => __("Filter by: Category","psythemes"), //Required
    "id" => "4extramodule4_cat", //Required
    "desc" => __("Category ID (Numeric) where all the posts you want to display belongs to.","psythemes"),
	),
	array(
    "under_section" => "additional-modules", //Required
    "type" => "number", //Required
    "name" => __("Items Amount","psythemes"), //Required
    "id" => "4extramodule4_num", //Required
    "desc" => __("Enter amount of contents you want to display in this module","psythemes"),
	"default" => ("16")
	),		
// EXTRA MODULE 5
array (

	"under_section" => "additional-modules", //Required
	"type" => "small_heading",
	"title" => __( "Extra Module 5", "psythemes" )
),
	array(
    "under_section" => "additional-modules", //Required
    "type" => "checkbox",
    "name" => __("Extra Module 5","psythemes"),
    "id" => array("5extramodule5"),
    "options" => array( __("Activate","psythemes"), ), 
		"code" =>("[module-extra5]")),
			array(
    "under_section" => "additional-modules", //Required
    "type" => "text", //Required
    "name" => __("Module Title","psythemes"), //Required
    "id" => "5extramodule5_title", //Required
    "placeholder" => __("Module Title","psythemes"),
    "desc" => __("Leave blank to use default title.","psythemes"),
	),
			array(
    "under_section" => "additional-modules", //Required
    "type" => "number", //Required
    "name" => __("Filter by: Category","psythemes"), //Required
    "id" => "5extramodule5_cat", //Required
    "desc" => __("Category ID (Numeric) where all the posts you want to display belongs to.","psythemes"),
	),
	array(
    "under_section" => "additional-modules", //Required
    "type" => "number", //Required
    "name" => __("Items Amount","psythemes"), //Required
    "id" => "5extramodule5_num", //Required
    "desc" => __("Enter amount of contents you want to display in this module","psythemes"),
	"default" => ("16")
	),		
### ADVERTISING ###
	

// Fake player

array(

    "under_section" => "ads-player-config",

    "type" => "checkbox",

    "name" => __("Fake Player", "psythemes"),

    "id" => array("activar-fake"),

	"img_desc" => get_bloginfo('template_directory')."/images/img_desc/fakeplay.png",
    "options" => array( __("Activate","psythemes"), ), 

    "desc" => __("After activating, assign the number of random links you want to activate below", "psythemes"),

    "default" => array("not")

),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __("Fake Server Name","psythemes"), //Required

    "id" => "server_adplayer", //Required

    "desc" => __("Leave blank to use default.","psythemes"),
	
	"placeholder" => __("HD Server","psythemes"),

    "default" => "HD Server"

),


array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __("Fake Quality","psythemes"), //Required

    "id" => "quality_adplayer", //Required

    "desc" => __("Leave blank to use default.","psythemes"),
	
	"placeholder" => __("HD 1080p","psythemes"),

    "default" => "HD 1080p"

),


array(

    "under_section" => "ads-player-config", //Required

    "type" => "color", //Required

    "name" => __("Color Scheme","psythemes"), //Required

    "id" => "color_adplayer", //Required

    "desc" => __("Choose a color","psythemes"),

    "default" => "81ad53"

),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "select", //Required

    "name" => __("Number of active links", "psythemes"), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "enlaces-fake", //Required

    "options" => array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10"), //Required

    "desc" => __("Select the number of active random links", "psythemes"),

    "default" => ""),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __( "Link 1", "psythemes" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fake-link-1", //Required

    "placeholder" => __( "http://", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __( "Link 2", "psythemes" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fake-link-2", //Required

    "placeholder" => __( "http://", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __( "Link 3", "psythemes" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fake-link-3", //Required

    "placeholder" => __( "http://", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __( "Link 4", "psythemes" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fake-link-4", //Required

    "placeholder" => __( "http://", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __( "Link 5", "psythemes" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fake-link-5", //Required

    "placeholder" => __( "http://", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __( "Link 6", "psythemes" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fake-link-6", //Required

    "placeholder" => __( "http://", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __( "Link 7", "psythemes" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fake-link-7", //Required

    "placeholder" => __( "http://", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __( "Link 8", "psythemes" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fake-link-8", //Required

    "placeholder" => __( "http://", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __( "Link 9", "psythemes" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fake-link-9", //Required

    "placeholder" => __( "http://", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __( "Link 10", "psythemes" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fake-link-10", //Required

    "placeholder" => __( "http://", "psythemes" ),

    "default" => ""

),

// Fake Buttons 
array(

    "under_section" => "ads-buttons-config",

    "type" => "checkbox",

    "name" => __("Fake Buttons", "psythemes"),

    "id" => array("fake-buttons"),

	"img_desc" => get_bloginfo('template_directory')."/images/img_desc/fakebuttons.png",
	
    "options" => array( __("Activate","psythemes"), ), 

    "desc" => __("Display fake 'Stream' & 'Download' buttons.", "psythemes"),

    "default" => array("not")

),

array (

	"under_section" => "ads-buttons-config",
	"type" => "small_heading",
	"title" => __( "Fake Button 1", "psythemes" )
),

array(

    "under_section" => "ads-buttons-config",

    "type" => "text",

    "name" => __("Title", "psythemes"),

    "id" => "ads-button-1-title",

    "default" => "Stream in HD",
	
	"desc" => __( "Leave blank to use default.", "psythemes" )

),

array(

    "under_section" => "ads-buttons-config",

    "type" => "text",

    "name" => __("URL", "psythemes"),

    "id" => "ads-button-1-url",
	
	"placeholder" => "http://"

),



array (

	"under_section" => "ads-buttons-config",
	"type" => "small_heading",
	"title" => __( "Fake Button 2", "psythemes" )
),

array(

    "under_section" => "ads-buttons-config",

    "type" => "text",

    "name" => __("Title", "psythemes"),

    "id" => "ads-button-2-title",

    "default" => __( "Download in HD", "psythemes" ),
	
	"desc" => __( "Leave blank to use default.", "psythemes" )

),

array(

    "under_section" => "ads-buttons-config",

    "type" => "text",

    "name" => __("URL", "psythemes"),

    "id" => "ads-button-2-url",
	
	"placeholder" => "http://"

),


// ADS - HOME PAGE

array (
	"under_section" => "ads-homepage-config",
	"type" => "small_heading",
	"title" => __( "Location: Before Suggestion Module", "psythemes" )
),

array(

    "under_section" => "ads-homepage-config",

    "type" => "checkbox",

    "name" => __("Display ad", "psythemes"),

    "id" => array("homepage-ad-above"),

    "options" => array("Activate"), 

),


array(

    "under_section" => "ads-homepage-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "psythemes" ), //Required

    "id" => "ads-homepage-1-title", //Required

    "display_checkbox_id" => "toggle_checkbox_id",
    
	"placeholder" => __( "Interesting for you", "psythemes" ),
	
	"desc" => __( "Leave blank to disable title.", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-homepage-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "psythemes" ), //Required

    "id" => "ads-homepage-1-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "psythemes" ),

    "default" => ""

),


array (
	"under_section" => "ads-homepage-config",
	"type" => "small_heading",
	"title" => __( "Location: After Suggestion Module", "psythemes" )
),


array(

    "under_section" => "ads-homepage-config",

    "type" => "checkbox",

    "name" => __("Display ad", "psythemes"),

    "id" => array("homepage-ad-after"),

    "options" => array("Activate"), 

),


array(

    "under_section" => "ads-homepage-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "psythemes" ), //Required

    "id" => "ads-homepage-2-title", //Required

    "display_checkbox_id" => "toggle_checkbox_id",
    
	"placeholder" => __( "Interesting for you", "psythemes" ),
	
	"desc" => __( "Leave blank to disable title.", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-homepage-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "psythemes" ), //Required

    "id" => "ads-homepage-2-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "psythemes" ),

    "default" => ""

),

array (
	"under_section" => "ads-homepage-config",
	"type" => "small_heading",
	"title" => __( "Location: Before Footer", "psythemes" )
),


array(

    "under_section" => "ads-homepage-config",

    "type" => "checkbox",

    "name" => __("Display ad", "psythemes"),

    "id" => array("homepage-ad-before"),

    "options" => array("Activate"), 

),


array(

    "under_section" => "ads-homepage-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "psythemes" ), //Required

    "id" => "ads-homepage-3-title", //Required

    "display_checkbox_id" => "toggle_checkbox_id",
    
	"placeholder" => __( "Interesting for you", "psythemes" ),
	
	"desc" => __( "Leave blank to disable title.", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-homepage-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "psythemes" ), //Required

    "id" => "ads-homepage-3-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "psythemes" ),

    "default" => ""

),


// ADS - ARCHIVE PAGES


array(
	"under_section" => "ads-mains-config",
	"type" => "small_heading",
	"title" => __( "Location: After Title", "psythemes" )
),

array(

    "under_section" => "ads-mains-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "psythemes" ), //Required

    "id" => "ads_mains_1_title", //Required

    "display_checkbox_id" => "toggle_checkbox_id",
    
	"placeholder" => __( "Interesting for you", "psythemes" ),
	
	"desc" => __( "Leave blank to disable title.", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-mains-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "psythemes" ), //Required

    "id" => "ads_mains_1_code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-mains-config",

    "type" => "checkbox",

    "name" => __("Display Ads", "psythemes"),

    "id" => array("results-ad-1", "archive-ad-1", "top-most-ad-1"),

    "options" => array(__( "Results Page", "psythemes" ), __( "Archive Pages", "psythemes" ), __( "Top/Most Archives", "psythemes" )), 

),

array(
	"under_section" => "ads-mains-config",
	"type" => "small_heading",
	"title" => __( "Location: Before Footer", "psythemes" ),
),

array(

    "under_section" => "ads-mains-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "psythemes" ), //Required

    "id" => "ads_mains_2_title", //Required

    "display_checkbox_id" => "toggle_checkbox_id",
    
	"placeholder" => __( "Interesting for you", "psythemes" ),
	
	"desc" => __( "Leave blank to disable title.", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-mains-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "psythemes" ), //Required

    "id" => "ads_mains_2_code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-mains-config",

    "type" => "checkbox",

    "name" => __("Display Ads", "psythemes"),

    "id" => array("results-ad-2", "archive-ad-2","top-most-ad-2"),

    "options" => array(__( "Results Pages", "psythemes" ), __( "Archive Pages", "psythemes" ), __( "Top/Most Archives", "psythemes" )), 

),


// ADS - WATCH PAGES


array(
	"under_section" => "ads-vid-config",
	"type" => "small_heading",
	"title" => __( "Location: Above Player", "psythemes" ),
),

array(

    "under_section" => "ads-vid-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "psythemes" ), //Required

    "id" => "ads-vid-1-title", //Required

    "display_checkbox_id" => "toggle_checkbox_id",
    
	"placeholder" => __( "Interesting for you", "psythemes" ),
	
	"desc" => __( "Leave blank to disable title.", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-vid-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "psythemes" ), //Required

    "id" => "ads-vid-1-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-vid-config",

    "type" => "checkbox",

    "name" => __("Display Ads", "psythemes"),

    "id" => array("mov-ad-1", "tv-ad-1", "ep-ad-1"),

    "options" => array( __( "Movies", "psythemes" ), __( "TV-Series", "psythemes" ), __( "Episodes", "psythemes" )), 

),

array(
	"under_section" => "ads-vid-config",
	"type" => "small_heading",
	"title" => __( "Location: Before Details", "psythemes" ),
),

array(

    "under_section" => "ads-vid-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "psythemes" ), //Required

    "id" => "ads-vid-2-title", //Required

    "display_checkbox_id" => "toggle_checkbox_id",
    
	"placeholder" => __( "Interesting for you", "psythemes" ),
	
	"desc" => __( "Leave blank to disable title.", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-vid-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "psythemes" ), //Required

    "id" => "ads-vid-2-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-vid-config",

    "type" => "checkbox",

    "name" => __("Display Ads", "psythemes"),

    "id" => array("mov-ad-2", "tv-ad-2", "ep-ad-2"),

    "options" => array( "Movies", "TV-Series", "Episodes"), 

),


array(
	"under_section" => "ads-vid-config",
	"type" => "small_heading",
	"title" => __( "Location: Above Comments", "psythemes" ),
),

array(

    "under_section" => "ads-vid-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "psythemes" ), //Required

    "id" => "ads-vid-3-title", //Required

    "display_checkbox_id" => "toggle_checkbox_id",
    
	"placeholder" => __( "Interesting for you", "psythemes" ),
	
	"desc" => __( "Leave blank to disable title.", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-vid-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "psythemes" ), //Required

    "id" => "ads-vid-3-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-vid-config",

    "type" => "checkbox",

    "name" => __("Display Ads", "psythemes"),

    "id" => array("mov-ad-3", "tv-ad-3", "ep-ad-3"),

    "options" => array( __( "Movies", "psythemes" ), __( "TV-Series", "psythemes" ), __( "Episodes", "psythemes" )), 

),

array(
	"under_section" => "ads-vid-config",
	"type" => "small_heading",
	"title" => __( "Location: Before Footer", "psythemes" ),
),

array(

    "under_section" => "ads-vid-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "psythemes" ), //Required

    "id" => "ads-vid-4-title", //Required

    "display_checkbox_id" => "toggle_checkbox_id",
    
	"placeholder" => __( "Interesting for you", "psythemes" ),
	
	"desc" => __( "Leave blank to disable title.", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-vid-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "psythemes" ), //Required

    "id" => "ads-vid-4-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-vid-config",

    "type" => "checkbox",

    "name" => __("Display Ads", "psythemes"),

    "id" => array("mov-ad-4", "tv-ad-4", "ep-ad-4"),

    "options" => array( __( "Movies", "psythemes" ), __( "TV-Series", "psythemes" ), __( "Episodes", "psythemes" )), 

),

// ADS - SINGLE PAGES



array(
	"under_section" => "ads-page-config",
	"type" => "small_heading",
	"title" => __( "Location: After Navigation", "psythemes" ),
),

array(

    "under_section" => "ads-page-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "psythemes" ), //Required

    "id" => "ads-page-1-title", //Required

    "display_checkbox_id" => "toggle_checkbox_id",
    
	"placeholder" => __("Interesting for you", "psythemes"),
	
	"desc" => __("Leave blank to disable title.", "psythemes"),

    "default" => ""

),


array(

    "under_section" => "ads-page-config", //Required

    "type" => "textarea", //Required

    "name" => __("Codes", "psythemes"), //Required

    "id" => "ads-page-1-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __("Add HTML code. Responsive ads is recommended.", "psythemes"),

    "default" => ""

),

array(

    "under_section" => "ads-page-config",

    "type" => "checkbox",

    "name" => __("Display Ads", "psythemes"),

    "id" => array("article-archive-ad-1", "article-post-ad-1", "page-ad-1"),

    "options" => array( __( "Articles Archive", "psythemes" ), __( "Article Post", "psythemes" ), __( "Single Pages", "psythemes" ),), 

),


array(
	"under_section" => "ads-page-config",
	"type" => "small_heading",
	"title" => __( "Location: Before Contents", "psythemes" ),
),


array(

    "under_section" => "ads-page-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "psythemes" ), //Required

    "id" => "ads-page-2-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-page-config",

    "type" => "checkbox",

    "name" => __("Display Ads", "psythemes"),

    "id" => array("article-ad-2", "page-ad-2"),

    "options" => array( __( "Article Post", "psythemes" ), __( "Single Pages", "psythemes" ),), 

),



array(
	"under_section" => "ads-page-config",
	"type" => "small_heading",
	"title" => __( "Location: After Contents", "psythemes" ),
),

array(

    "under_section" => "ads-page-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "psythemes" ), //Required

    "id" => "ads-page-3-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-page-config",

    "type" => "checkbox",

    "name" => __("Display Ads", "psythemes"),

    "id" => array("article-ad-3", "page-ad-3"),

    "options" => array( __( "Article Post", "psythemes" ), __( "Single Pages", "psythemes" ),), 

),








array(
	"under_section" => "ads-page-config",
	"type" => "small_heading",
	"title" => __( "Location: Above Comments", "psythemes" ),
),

array(

    "under_section" => "ads-page-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "psythemes" ), //Required

    "id" => "ads-page-4-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-page-config",

    "type" => "checkbox",

    "name" => __("Display Ads", "psythemes"),

    "id" => array("article-ad-4", "page-ad-4"),

    "options" => array(__( "Article Post", "psythemes" ), __( "Single Pages", "psythemes" ),), 

),




















array(
	"under_section" => "ads-page-config",
	"type" => "small_heading",
	"title" => __( "Location: Before Footer", "psythemes" ),
),

array(

    "under_section" => "ads-page-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "psythemes" ), //Required

    "id" => "ads-page-5-title", //Required

    "display_checkbox_id" => "toggle_checkbox_id",
    
	"placeholder" => __( "Interesting for you", "psythemes" ),
	
	"desc" => __( "Leave blank to disable title.", "psythemes" ),

    "default" => ""

),


array(

    "under_section" => "ads-page-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "psythemes" ), //Required

    "id" => "ads-page-5-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "ads-page-config",

    "type" => "checkbox",

    "name" => __("Display Ads", "psythemes"),

    "id" => array("article-archive-ad-5", "article-post-ad-5", "page-ad-5"),

    "options" => array(__( "Articles Archive", "psythemes" ), __( "Article Post", "psythemes" ), __( "Single Pages", "psythemes" ),), 

),


## DEVELOPER AREA 

// Code Integrations


array(

    "under_section" => "dev-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Extra integration code", "psythemes" ), //Required

    "id" => "html_integration", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Make your HTML integration with the theme code.", "psythemes" ),

    "default" => ""

),

array(

    "under_section" => "dev-config",

    "type" => "checkbox",

    "name" => __("Custom CSS","psythemes"),

    "id" => array("activate_css"),

    "options" =>array( __("Enable","psythemes"), ), 

	"desc" => __("Enable custom CSS codes", "psythemes"),

    "default" => array("not")),

array(

    "under_section" => "dev-config", //Required

    "type" => "textarea", 

    "name" => __( "CSS Codes", "psythemes" ), //Required

    "id" => "code_css", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add only CSS code without &lt;style&gt;&lt;/style&gt;", "psythemes" ),

),

array(

    "under_section" => "dev-config",

    "type" => "checkbox",

    "name" => __("Custom Javascript","psythemes"),

    "id" => array("activate_js"),

    "options" =>array( __("Enable","psythemes"), ), 

	"desc" => __("Enable custom Java Script code", "psythemes"),

    "default" => array("not")

),

array(

    "under_section" => "dev-config", //Required

    "type" => "textarea", 

    "name" => __( "Java Script Codes", "psythemes" ), //Required

    "id" => "code_js", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add only Javascript codes without &lt;script&gt;&lt;/script&gt;", "psythemes" ),

),


// Minify HTML
array(
    "under_section" => "minify-config",
    "type" => "radio",
    "name" => __("Minify HTML","psythemes"),
    "id" => "minify_html_active",
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array(
		"yes" => __('Enable','psythemes'),
		"no" => __('Disable','psythemes'),
	),
    "desc" => __('Enable or disable Minify HTML','psythemes'),
    "default" => "no"
),

array(
    "under_section" => "minify-config",
    "type" => "radio",
    "name" => __("Code comments","psythemes"),
    "id" => "minify_html_comments",
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array(
		"yes" => __('Yes','psythemes'),
		"no" => __('No','psythemes'),
	),
    "desc" => __('Remove HTML, JavaScript and CSS comments, this option is typically safe to set to (Yes)','psythemes'),
    "default" => "yes"
),


array(
    "under_section" => "minify-config",
    "type" => "radio",
    "name" => __("HTML5 void elements","psythemes"),
    "id" => "minify_html_xhtml",
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array(
		"yes" => __('Yes','psythemes'),
		"no" => __('No','psythemes'),
	),
    "desc" => __('Remove XHTML closing tags from HTML5 void elements','psythemes'),
    "default" => "no"
),

array(
	// minify_html_scheme
    "under_section" => "minify-config",
    "type" => "radio",
    "name" => __("Schemes (HTTP: and HTTPS:)","psythemes"),
    "id" => "minify_html_scheme",
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array(
		"yes" => __('Yes','psythemes'),
		"no" => __('No','psythemes'),
	),
    "desc" => __('Remove schemes (HTTP: and HTTPS:) from all URLs','psythemes'),
    "default" => "no"
),


array(
    "under_section" => "minify-config",
    "type" => "radio",
    "name" => __("Relative domain","psythemes"),
    "id" => "minify_html_relative",
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array(
		"yes" => __('Yes','psythemes'),
		"no" => __('No','psythemes'),
	),
    "desc" => __('Remove relative domain from internal URLs','psythemes'),
    "default" => "no"
),


## SEO

// Basic Config
array (

	"under_section" => "seo-config",
	"type" => "tips",
	"text" => __( "Disable Basic SEO if you're using any other SEO plugin. That way the theme's SEO features won't conflict with the other seo plugin. Activate it only if you dont have any other seo plugin installed.", "psythemes" ),
),

array(
    "under_section" => "seo-config",
    "type" => "checkbox",
    "name" => __("Basic SEO", "psythemes"),
    "id" => array("basic-seo"),
    "options" => array( __("Activate","psythemes"), ), 
    "default" => array("checked")
),	

array(

    "under_section" => "seo-config", //Required
    "type" => "text", //Required
    "name" => __( "Site Title", "psythemes" ), //Required
    "id" => "blogname", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
),
array(

    "under_section" => "seo-config", //Required
    "type" => "text", //Required
    "name" => __( "Site Tagline", "psythemes" ), //Required
    "id" => "blogdescription", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "desc" => __( "In a few words, explain what this site is about.", "psythemes" ),
),
array (
	"under_section" => "seo-config",
	"type" => "small_heading",
	"title" => __( "Site Information", "psythemes" ),
),

array(

    "under_section" => "seo-config", //Required
    "type" => "text", //Required
    "name" => __( "Main Keywords", "psythemes" ), //Required
    "id" => "seo-main-keywords", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "desc" => __( "Add main keywords. Separated by comma. Ex: key1, key2, key3", "psythemes" ),
),

array(

    "under_section" => "seo-config", //Required
    "type" => "textarea", //Required
    "name" => __( "Meta Description", "psythemes" ), //Required
    "id" => "seo-meta-description", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "desc" => __( "Add meta description.", "psythemes" ),
),


// Site Verification


array(

    "under_section" => "verify-config", //Required
    "type" => "text", //Required
    "name" => __( "Google Search Console", "psythemes" ), //Required
    "id" => "veri_google", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "desc" => __( "Get your verification code <a href='https://www.google.com/webmasters/verification/' target='_blank'>here</a>", "psythemes" ),
	"placeholder" =>__("a7lfzzbajVeMUroaLoypnLWlo-2v7Cj9ijd-Binzqws","psythemes"),
),

array(

    "under_section" => "verify-config", //Required
    "type" => "text", //Required
    "name" => __( "Alexa Verification ID", "psythemes" ), //Required
    "id" => "veri_alexa", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "desc" => __( "Get your verification code <a href='https://www.alexa.com/siteowners/claim/' target='_blank'>here</a>", "psythemes" ),
	"placeholder" =>__("jwbHtpHudFeOXI1-WKw5tNyCpFQ","psythemes"),
),


array(

    "under_section" => "verify-config", //Required
    "type" => "text", //Required
    "name" => __( "Bing Webmaster Tools", "psythemes" ), //Required
    "id" => "veri_bing", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "desc" => __( "Get your verification code <a href='https://www.bing.com/toolbox/webmaster/' target='_blank'>here</a>", "psythemes" ),
	"placeholder" =>__("CF37B212DE4857D8DCB5756C26CCC732","psythemes"),
),



array(

    "under_section" => "verify-config", //Required
    "type" => "text", //Required
    "name" => __( "Yandex Webmaster Tools", "psythemes" ), //Required
    "id" => "veri_yandex", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "desc" => __( "Get your verification code <a href='https://yandex.com/support/webmaster/service/rights.xml#how-to' target='_blank'>here</a>", "psythemes" ),
	"placeholder" =>__("d1e2bff8b0cbaf00","psythemes"),
),





    );
?>