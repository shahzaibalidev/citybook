<?php  

$options = array(

/*=================================================================*/

/* Configuration */
array("type" => "section","icon" => "dashicons-admin-settings","title" => "Configuration"
    ,"id" => "general","expanded" => "true"),

array("section" => "general", "type" => "heading","title" => "General Settings","id" => "general-config"),  

array("section" => "general", "type" => "heading","title" => "Logos & Images","id" => "style-config"),

// array("section" => "general", "type" => "heading","title" => "Advance Settings","id" => "adv-config"),

// array("section" => "general", "type" => "heading","title" => "Footer Settings","id" => "footer-config"),

/* Pages */
 array("type" => "section","icon" => "dashicons-admin-home","title" => "Pages","id" => "pages","expanded" => "false"),

array("section" => "pages", "type" => "heading","title" => "Home Modules","id" => "home-module"),

// array("section" => "homepage", "type" => "heading","title" => "Main Slider","id" => "sli-module"),

// array("section" => "homepage", "type" => "heading","title" => "Suggestion Module","id" => "sugg-module"),

// array("section" => "homepage", "type" => "heading","title" => "Latest Movies Modules","id" => "latest-mov"),

// array("section" => "homepage", "type" => "heading","title" => "Latest TV Series Modules","id" => "latest-tv"),

// array("section" => "homepage", "type" => "heading","title" => "Latest Episodes Modules","id" => "latest-ep"),

// array("section" => "homepage", "type" => "heading","title" => "Additional Modules","id" => "additional-modules"),

/* SEO */
// array("type" => "section","icon" => "dashicons-chart-area","title" => "SEO","id" => "seo-config","expanded" => "false"),

array("section" => "seo-config", "type" => "heading","title" => "Basic Settings","id" => "seo-config"),

array("section" => "seo-config", "type" => "heading","title" => "Site Verification","id" => "verify-config"),

/* Tools */
// array("type" => "section","icon" => "dashicons-admin-tools","title" => "Tools","id" => "general2","expanded" => "false"),

array("section" => "general2", "type" => "heading","title" => "Minify HTML","id" => "minify-config"),

array("section" => "general2", "type" => "heading","title" => "Code Integrations","id" => "dev-config"),

/* Mail Settings */
// array("type" => "section","icon" => "dashicons-email-alt","title" => "Mail Settings","id" => "mails","expanded" => "false"),

array("section" => "mails", "type" => "heading","title" => "Report Settings","id" => "rprt-config"),

array("section" => "mails", "type" => "heading","title" => "Requests Settings","id" => "rqst-config"),

array("section" => "mails", "type" => "heading","title" => "SMTP Settings","id" => "smtp-config"),

// array("type" => "section","icon" => "dashicons-analytics","title" => "Advertising","id" => "adsconfig","expanded" => "false"),

// array("section" => "general", "type" => "heading","title" => "Anti Adblocker","id" => "adblock-config"),

// array("section" => "general", "type" => "heading","title" => "TMDb API","id" => "api-config"),	

// array("section" => "general", "type" => "heading","title" => "Pages","id" => "pages-config"),	

// array("section" => "general", "type" => "heading","title" => "Site Notice","id" => "notice-config"),

// array("section" => "general", "type" => "heading","title" => "Watch Page Settings","id" => "watch-config"), 

// array("section" => "general", "type" => "heading","title" => "TV-Series Settings","id" => "tv-config"),

// array("section" => "general", "type" => "heading","title" => "Articles Settings","id" => "article-config"),

// array("section" => "general", "type" => "heading","title" => "Comments","id" => "comentarios-config"),

// array("section" => "adsconfig", "type" => "heading","title" => "Ads - Fake Player","id" => "ads-player-config"),

// array("section" => "adsconfig", "type" => "heading","title" => "Ads - Fake Buttons","id" => "ads-buttons-config"),

// array("section" => "adsconfig", "type" => "heading","title" => "Ad blocks - Home Page","id" => "ads-homepage-config"),

// array("section" => "adsconfig", "type" => "heading","title" => "Ad blocks - Archive Pages","id" => "ads-mains-config"),

// array("section" => "adsconfig", "type" => "heading","title" => "Ad blocks - Watch Pages","id" => "ads-vid-config"),

// array("section" => "adsconfig", "type" => "heading","title" => "Ad blocks - Single Pages","id" => "ads-page-config"),

/* array("section" => "general2", "type" => "heading","title" => "External Link Page","id" => "link-config"), */




// SMTP Settings
array(
    "under_section" => "smtp-config",
    "type" => "tips",
    "text" => __("Only fill up these forms if you selected smtp as delivery method on report or request settings. Otherwise it's unecessary.", "citybook"),
),	

array(
    "under_section" => "smtp-config", //Required
    "type" => "radio", //Required
    "name" => "Encryption", //Required
	"id" => "rprt-smtp-encr",
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("ssl" => __('SSL','citybook'), "tls" => __('TLS','citybook')), //Required
    "default" => "ssl"
),

array(

    "under_section" => "smtp-config", //Required
    "type" => "text", //Required
    "name" => __( "Server", "citybook" ), //Required
	"id" => "rprt-smtp-servr",
    "display_checkbox_id" => "toggle_checkbox_id",
	"placeholder" => "smtp.gmail.com",

), 

array(

    "under_section" => "smtp-config", //Required
    "type" => "text", //Required
    "name" => __( "Username", "citybook" ), //Required
	"id" => "rprt-smtp-usern",
    "display_checkbox_id" => "toggle_checkbox_id",
	"placeholder" => "user@gmail.com"

), 

array(

    "under_section" => "smtp-config", //Required
    "type" => "text", //Required
    "name" => __( "Password", "citybook" ), //Required
	"id" => "rprt-smtp-passw",
    "display_checkbox_id" => "toggle_checkbox_id",
	"placeholder" => "password"

), 

array(
    "under_section" => "smtp-config", //Required
    "type" => "number", //Required
    "name" => __( "Port", "citybook" ), //Required
	"id" => "rprt-smtp-port",
	"default" => "465",
	"placeholder" => "465"
),





// Request Settings

array(
    "under_section" => "rqst-config", //Required
    "type" => "radio", //Required
    "name" => __( "Comments System", "citybook" ), //Required
    "id" => "rqst-comment-sys", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("disabled" => __('Disable','citybook'), "wp_comment" => __('Wordpress','citybook'), "fb_comment" => __('Facebook Comments','citybook'),"dq_comment" => __('Disqus Comments','citybook')), //Required
    "desc" => __( "Choose an option", "citybook" ),
    "default" => "fb_comment"
),


array(

    "under_section" => "rqst-config", //Required
    "type" => "text", //Required
    "name" => __( "Email Reciever", "citybook" ), //Required
    "id" => "requestemail", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "desc" => __( "Insert the email where you want the reports to be sent to.", "citybook" ),

), 

array(
    "under_section" => "rqst-config", //Required
    "type" => "radio", //Required
    "name" => "Sending Method", //Required
    "id" => "rqst-em-type", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("mailf" => __('Mail()','citybook'), "smtp" => __('SMTP','citybook')), //Required
    "desc" => "Select how you want the script to deliver the email reports.",
    "default" => "mailf"
),









// Report Settings

array(

    "under_section" => "rprt-config", //Required
    "type" => "text", //Required
    "name" => __( "Email Reciever", "citybook" ), //Required
    "id" => "reportemail", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "desc" => __( "Insert the email where you want the reports to be sent to.", "citybook" ),

), 

array(
    "under_section" => "rprt-config", //Required
    "type" => "radio", //Required
    "name" => "Sending Method", //Required
    "id" => "rprt-em-type", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("mailf" => __('Mail()','citybook'), "smtp" => __('SMTP','citybook')), //Required
    "desc" => "Select how you want the script to deliver the email reports.",
    "default" => "mailf"
),






// Advance Settings

array(
    "under_section" => "adv-config", //Required
    "type" => "checkbox", //Required
    "name" => __( "Extras", "citybook" ), //Required
	"id" => array("content-preview", "xtras_imglazy"), //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array ("Movie Peview (qTip)", "Image (LazyLoad)"), //Required
    "default" => array("checked", "checked")
	
),

array(
    "under_section" => "adv-config", //Required
    "type" => "radio", //Required
    "name" => "Homepage Search", //Required
    "id" => "homepage-search", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("true" => __('Enable','citybook'), "false" => __('Disable','citybook')), //Required
    "desc" => "Display big search as homepage.",
    "default" => "true"
),

array(
	// Field pages
	"under_section" => "adv-config", 
    "type" => "pages", 
    "name" => __( "Homepage", "citybook" ), 
    "display_checkbox_id" => "toggle_checkbox_id",
    "id" => "cb_home", 
    "desc" => __( "Select relevant page.", "citybook" )
),

array(
    "under_section" => "adv-config", //Required
    "type" => "text", //Required
    "name" => "Homepage Button", //Required
    "id" => "homepage-search-custom-button", //Required
    "desc" => "Change or use custom text on the homepage's button.",
    "placeholder" => "Use Old cbPlay? Click Here"
),

array(

    "under_section" => "adv-config",
    "type" => "small_heading",
    "title" => __("Search", "citybook"),
),

array(
    "under_section" => "adv-config", //Required
    "type" => "radio", //Required
    "name" => "Live Search", //Required
    "id" => "live-search", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("true" => __('Enable','citybook'), "false" => __('Disable','citybook')), //Required
    "desc" => "Display big search as homepage.",
    "default" => "false"
),

array(
    "under_section" => "adv-config",
    "type" => "checkbox",
    "name" => __("Search Results: Post Type", "citybook"),
    "id" => array("search-mv","search-tv","search-ep",),
    "options" => array( __("Movies","citybook"), __("TV-Series","citybook"), __("Episodes","citybook") ), 
    "desc" => __("Activate to enable this function", "citybook"),
    "default" => array("checked","checked","not"),

),


array(
	"under_section" => "adv-config",
	"type" => "small_heading",
	"title" => __( "Content Lock", "citybook" )
),


array(
    "under_section" => "adv-config", //Required
    "type" => "radio", //Required
    "name" => __( "Display Videos:", "citybook" ), //Required
    "id" => "cb-hide-vid", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
	"desc" => "Select who can see your videos. ",	
    "options" => array("enable" => __('Registered Users Only','citybook'), "disable" => __('Everyone','citybook')), //Required
    "default" => "disable"
),

array(
    "under_section" => "adv-config", //Required
    "type" => "radio", //Required
    "name" => __( "Display Links:", "citybook" ), //Required
    "id" => "cb-hide-lnk", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
	"desc" => "Select who can see your download links. ",	
    "options" => array("enable" => __('Registered Users Only','citybook'), "disable" => __('Everyone','citybook')), //Required
    "default" => "disable"
),

array(
	"under_section" => "adv-config",
	"type" => "small_heading",
	"title" => __( "Trailer Option", "citybook" )
),

array(
    "under_section" => "adv-config", //Required
    "type" => "radio", //Required
    "name" => __( "Display Trailer:", "citybook" ), //Required
    "id" => "cb-trailer-player", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
	"desc" => "Select how you want to appear the trailer. ",	
    "options" => array("enable" => __('Main Player','citybook'), "disable" => __('Default','citybook')), //Required
    "default" => "disable"
),

array(
    "under_section" => "adv-config", //Required
    "type" => "text", //Required
    "name" => "Server Name", //Required
    "id" => "cb-trailer-player-srvrn", //Required
    "desc" => "Leave blank to use default.",
    "placeholder" => "HD Server"
),

array(
    "under_section" => "adv-config", //Required
    "type" => "text", //Required
    "name" => "Server Quality", //Required
    "id" => "cb-trailer-player-srvrq", //Required
    "desc" => "Leave blank to use default.",
    "placeholder" => "HD 1080P"
),



// General Settings 

array(
    "under_section" => "general-config", //Required
    "type" => "checkbox", //Required
    "name" => "Basic Tools", //Required
	"id" => array("bcontrols_admin_bar"), //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array ("Admin Bar"), //Required
    "default" => array("not")
	
),

array(
    "under_section" => "general-config", //Required
    "type" => "radio", //Required
    "name" => "Night Mode Switch", //Required
    "id" => "night-mode", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("true" => "Enable", "false" => "Disable"), //Required
    "desc" => "Let user switch from light to dark scheme.",
    "default" => "true"
),

array(

    "under_section" => "general-config", //Required

    "type" => "text", //Required

    "name" => "Google Analytics", //Required

    "id" => "analitica", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => "Insert tracking code to use this function.",

    "placeholder" => "UA-00000000-00",

),




array(
    "under_section" => "general-config", //Required
    "type" => "radio", //Required
    "name" => "User Registration", //Required
    "id" => "user-reg-check", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("enable" => "Enable", "disable" => "Disable"), //Required
    "default" => "disable",
), 





array (
	"under_section" => "general-config",
	"type" => "small_heading",
	"title" => "reCaptcha Settings",
),


array(

    "under_section" => "general-config", //Required

    "type" => "text", //Required

    "name" => "Public Key", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "public_key_rcth", //Required

    "placeholder" => "9Be3-7FGUUUUUUKC5Vx_IFxfkUaDHLZifBI0-kij",

    "desc" => "Get your key here - <a href=\"https://www.google.com/recaptcha/admin\" target=\"_blank\">Google reCAPTCHA</a>.",
    "default" => ""

),

array(

    "under_section" => "general-config", //Required

    "type" => "text", //Required

    "name" => "Private Key", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "private_key_rcth", //Required

    "placeholder" => "9Be3-7FGUUUUUFSKhhqv3kozQDlqJo90sfOnvQNs",

    "desc" => "Get your key here - <a href=\"https://www.google.com/recaptcha/admin\" target=\"_blank\">Google reCAPTCHA</a>.",


),




	array(
    "under_section" => "general-config", 
    "type" => "small_heading", 
    "title" => "Favorites Settings",
),

array(

    "under_section" => "general-config",

    "type" => "checkbox",

    "name" => __("Favorite System", "citybook"),

    "id" => array("favorite-settings"),

    "options" => array( __("Activate","citybook") ), 

    "desc" => __("Activate to enable this function", "citybook"),

    "default" => array("checked"),

),


array(
    "under_section" => "general-config", //Required
    "type" => "radio", //Required
    "name" => "Allowed to rate", //Required
    "id" => "fav-allow-settings", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("1" => "Logged-in Users Only", "2" => "Guests & Logged-in Users"), //Required
    "default" => "1"
),



array (
	"under_section" => "general-config",
	"type" => "small_heading",
	"title" => __( "Social Buttons", "citybook" ),
),



array(
    "under_section" => "general-config", //Required
    "type" => "checkbox", //Required
    "name" => __( "Enable or Disable", "citybook" ), //Required
	"id" => array("homes-social", "sli-social", "mov-social","tv-social","ep-social", "article-social", "page-social"), //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array ("Homepage Search", "Featured Slider", "Movie Page", "TV Series Page", "Episode Page", "Article Page", "Single Page"), //Required
    "default" => array("checked", "checked", "checked", "checked", "checked", "checked", "checked")
	
),

array(
    "under_section" => "general-config", //Required
    "type" => "text", //Required
    "name" => "AddThis ID", //Required
	"display_checkbox_id" => "toggle_checkbox_id",
    "id" => "sli-social-id", //Required
    "placeholder" => "58afa5de7221535f",
	"desc" => __("Example: ra-<span style='font-weight:bold;color:red;'>58afa5de7221535f</span> | <a href='#' target='_blank'>Click here</a> to watch on how to setup an addthis.com codes and get your id.","citybook"),
),

array(
    "under_section" => "general-config", //Required
    "type" => "text", //Required
    "name" => __( "Featured Slider - Social Message", "citybook" ), //Required
    "id" => "sli-social-message", //Required
    "default" => __( "Like and Share our website to support us.", "citybook" )
),



array (
	"under_section" => "general-config",
	"type" => "small_heading",
	"title" => __( "Related Module", "citybook" ),
),

array(
    "under_section" => "general-config",
    "type" => "checkbox",
    "name" => __("Related Movies", "citybook"),
    "id" => array("widget_related_mov"),
    "options" => array( __("Enable widget related movies?","citybook"), ), 
    "desc" => __("Check to activate the function.", "citybook"),
    "default" => array("checked")),
	
array(

    "under_section" => "general-config", //Required

    "type" => "text", //Required

    "name" => __("Related Movies - Title", "citybook"), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "related-movie-title", //Required

    "desc" => __("Leave blank to use default.", "citybook"),
	
	"placeholder" => __( "You May Also Like", "citybook" )
),
array(

    "under_section" => "general-config", //Required

    "type" => "select", //Required

    "name" => __("Related Movies Amount", "citybook"), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "related-movie", //Required

    "options" => array("6", "12", "18", "24"), //Required

    "desc" => __("select the number of items to display on the slider boxes", "citybook"),

    "default" => "12"
),
array(
    "under_section" => "general-config",
    "type" => "checkbox",
    "name" => __("Related TV Series", "citybook"),
    "id" => array("widget_related_tv"),
    "options" => array( __("Enable widget related tv series?","citybook"), ), 
    "desc" => __("Check to activate the function.", "citybook"),
    "default" => array("checked")
),
array(

    "under_section" => "general-config", //Required

    "type" => "select", //Required

    "name" => __("Related TV Series", "citybook"), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "related-tv", //Required

    "options" => array("6", "12", "18", "24"), //Required

    "desc" => __("select the number of items to display on the slider boxes", "citybook"),

    "default" => "12"
),

array(

    "under_section" => "general-config", //Required

    "type" => "text", //Required

    "name" => __("Related Movies - Title", "citybook"), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "related-tv-title", //Required

    "desc" => __("Leave blank to use default.", "citybook"),
	
	"placeholder" => __( "You May Also Like", "citybook" )
),

// TMDb Settings

/*array(
    "under_section" => "api-config",
    "type" => "checkbox",
    "name" => __("TMDb API","citybook"),
    "id" => array("tmdbapi"),
    "options" => array( __("Activate","citybook"), ), 
    "desc" => __("Configure your API on<a href=\"https://www.themoviedb.org/account/\" target=\"_blank\">Themoviedb.org</a>", "citybook"),
    "default" => array("not")),
array(
    "under_section" => "api-config", //Required
    "type" => "text", //Required
    "name" => __( "API Key", "citybook" ),  //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "id" => "tmdbkey", //Required
    "desc" => __( "Add the API Details from themoviedb.org", "citybook" ),
),
array(
    "under_section" => "api-config", 
    "type" => "text", 
    "name" => __('Language API','citybook'), 
    "display_checkbox_id" => "toggle_checkbox_id",
    "id" => "tmdbidioma", 
    "desc" => __('Select language of the generated data','citybook'),
    "default" =>"en-US",
),
array(
    "under_section" => "api-config",
    "type" => "checkbox",
    "name" => __("Generate Categories","citybook"),
    "id" => array("apigenero"),
    "options" => array( __("Activate","citybook"), ), 
    "desc" => __("This function automatically generates categories", "citybook"),
    "default" => array("checked")),*/
	
	// ANTI Adblocker
	
	array(
    "under_section" => "adblock-config",
    "type" => "checkbox",
    "name" => __("Anti Ad-Blocker","citybook"),
    "id" => "cb-anti-adblock", //Required
    "options" => array( __("Activate","citybook"), ), 
    "default" => array("not")),
	
	array(
    "under_section" => "adblock-config", //Required
    "type" => "radio", //Required
    "name" => "Alert Type", //Required
    "id" => "cb-anti-adblock-type", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("full" => __('Fullscreen','citybook'), "box" => __('Floating','citybook')), //Required
    "desc" => "Display message if user has enabled ad blocker on browser.",
    "default" => "full"
),

array(

    "under_section" => "adblock-config", //Required
    "type" => "textarea", //Required
    "name" => __( "Message", "citybook" ), //Required
    "id" => "cb-anti-adblock-message", //Required
	"placeholder" => __( "Please don't block ads. They are the only way to maintain this site. Your patience is highly appreciated and we hope our service can be worth it.", "citybook" ),	
	"desc" => __( "Leave blank to use default", "citybook" ),
    "display_checkbox_id" => "toggle_checkbox_id",	

),

array(

    "under_section" => "adblock-config", //Required
    "type" => "text", //Required
    "name" => __( "Button", "citybook" ), //Required
    "id" => "cb-anti-adblock-button", //Required
	"placeholder" => __( "I have disabled my ad blocker.", "citybook" ),	
	"desc" => __( "Leave blank to use default", "citybook" ),
    "display_checkbox_id" => "toggle_checkbox_id",	

),

// pages settings 

	array(
	// Field pages
	"under_section" => "pages-config", 
    "type" => "pages", 
    "name" => __( "Account Page", "citybook" ), 
    "display_checkbox_id" => "toggle_checkbox_id",
    "id" => "account_page", 
    "desc" => __( "Add link to the page (Account Area)", "citybook" ),
),

	array(
	// Field pages
	"under_section" => "pages-config", 
    "type" => "pages", 
    "name" => __( "Request Page", "citybook" ), 
    "display_checkbox_id" => "toggle_checkbox_id",
    "id" => "request_page", 
    "desc" => __( "Select relevant page.", "citybook" )
),

	array(
	// Field pages
	"under_section" => "pages-config", 
    "type" => "pages", 
    "name" => __( "Keywords Page", "citybook" ), 
    "display_checkbox_id" => "toggle_checkbox_id",
    "id" => "keywords_archive", 
    "desc" => __( "Select relevant page.", "citybook" )
),

//array(    "under_section" => "pages-config", //Required    "type" => "small_heading", //Required    "title" => __( "A-Z Library", "citybook" ), //Required),
// array( 	// Field pages	"under_section" => "pages-config",     "type" => "pages",     "name" => __( "Library Page", "citybook" ),     "display_checkbox_id" => "toggle_checkbox_id",    "id" => "librarive_page",     "desc" => __( "Select relevant page.", "citybook" ),),
//array(    "under_section" => "pages-config", //Required    "type" => "number", //Required    "name" => __("Library: Post Per Page","citybook"), //Required    "id" => "library_ppp", //Required    "desc" => __("Amount of post per page. Recommended: 40 ","citybook"),	"default" => "40"),

array(

    "under_section" => "pages-config", //Required
    "type" => "small_heading", //Required
    "title" => __( "Archive Pages", "citybook" ), //Required
),


array(
    "under_section" => "pages-config", //Required
    "type" => "number", //Required
    "name" => __("Archives: Post per page","citybook"), //Required
    "id" => "archive_posts", //Required
    "desc" => __("Amount of post per page. Recommended: 40 ","citybook"),
	"default" => "40"
),


array(
	// Field pages
	"under_section" => "pages-config", 
    "type" => "pages", 
    "name" => __( "Movies Archive", "citybook" ), 
    "display_checkbox_id" => "toggle_checkbox_id",
    "id" => "mov_archive", 
    "desc" => __( "Select relevant page.", "citybook" ),
),

array(
	// Field pages
	"under_section" => "pages-config", 
    "type" => "pages", 
    "name" => __( "Most Viewed Archive", "citybook" ), 
    "display_checkbox_id" => "toggle_checkbox_id",
    "id" => "mviewed_archive", 
    "desc" => __( "Select relevant page.", "citybook" ),
),


array(
	// Field pages
	"under_section" => "pages-config", 
    "type" => "pages", 
    "name" => __( "Most Favorite Archive", "citybook" ), 
    "display_checkbox_id" => "toggle_checkbox_id",
    "id" => "mfav_archive", 
    "desc" => __( "Select relevant page.", "citybook" ),
),


array(
	// Field pages
	"under_section" => "pages-config", 
    "type" => "pages", 
    "name" => __( "Most Rating Archive", "citybook" ), 
    "display_checkbox_id" => "toggle_checkbox_id",
    "id" => "mrat_archive", 
    "desc" => __( "Select relevant page.", "citybook" ),
),


array(
	// Field pages
	"under_section" => "pages-config", 
    "type" => "pages", 
    "name" => __( "Top IMDb Archive", "citybook" ), 
    "display_checkbox_id" => "toggle_checkbox_id",
    "id" => "topimdb_archive", 
    "desc" => __( "Select relevant page.", "citybook" ),
),


	// Style Settings
	
	/*array(
    "under_section" => "style-config", //Required
    "type" => "radio", //Required
    "name" => __( "Default Style", "citybook" ), //Required
    "id" => "cb-default-style", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("light" => __('Light','citybook'), "dark" => __('Dark','citybook')), //Required
    "default" => "light"),*/

/*array(
    "under_section" => "style-config", //Required
    "type" => "checkbox", //Required
    "name" => __( "More Options", "citybook" ), //Required
	"id" => array("rounded-corners", "border-effect"), //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array (__( "Rounded Corners (Posters)", "citybook" ),__( "Border Effect (Posters)", "citybook" )), //Required
	"default" => array("not", "not")
),	*/
	
/*array(

    "under_section" => "style-config",
    "type" => "small_heading",
    "title" => __("Color Scheme", "citybook"),

),	

array(
    "under_section" => "style-config", //Required
    "type" => "radio_image", //Required
    "name" => "Select a Color", //Required
    "show_labels" => "false",
    "image_src" => array(get_bloginfo('template_directory') . "/assets/css/img/img_desc/colors/green.png", get_bloginfo('template_directory') . "/assets/css/img/img_desc/colors/blue.png", get_bloginfo('template_directory') . "/assets/css/img/img_desc/colors/purple.png", get_bloginfo('template_directory') . "/assets/css/img/img_desc/colors/pink.png", get_bloginfo('template_directory') . "/assets/css/img/img_desc/colors/orange.png", get_bloginfo('template_directory') . "/assets/css/img/img_desc/colors/red.png"), //Required
    "image_size" => array("50"),
    "display_checkbox_id" => "toggle_checkbox_id",
    "id" => "cb-color-scheme", //Required
    "options" => array("green", "blue", "purple", "pink", "orange", "red"), //Required
    "desc" => "Choose your desired color scheme.",
    "default" => "green"
	),
	
array(
    "under_section" => "style-config",
    "type" => "small_heading",
    "title" => __("Pre-made Style", "citybook"),
),	

array(
    "under_section" => "style-config",
    "type" => "tips",
    "text" => __("Activating a pre-made style will override your selected color scheme.", "citybook"),
),	

array(

    "under_section" => "style-config",
    "type" => "checkbox",
    "name" => __("GoMovies Style", "citybook"),
    "id" => array("premade_style1"),
    "options" => array( __("Activate","citybook"), ), 
	"img_desc" => get_bloginfo('template_directory')."/assets/css/img/img_desc/gm.png",
    "default" => array("not")

),*/

/*array(

    "under_section" => "style-config",
    "type" => "small_heading",
    "title" => __("Logos & Images", "citybook"),
),	*/

array(
    "under_section" => "style-config",
    "type" => "image", //Required
    "placeholder" => __("Upload favicon","citybook"),
    "name" => __("Site Favicon","citybook"), //Required
    "id" => "general-favicon", //Required
    "desc" => __("Add favicon, Recommended in .ico format","citybook"),
    "default" => ""),
array(
    "under_section" => "style-config",
    "type" => "image", //Required
    "placeholder" => __("Site Logo - Dark Colored Text","citybook"),
    "name" => __("Logo (Light)","citybook"), //Required
    "id" => "cb-light-logo", //Required
    "desc" => __("Replace site's dark logo for light bg. Required dimension's 374px * 98px ","citybook"),
    "default" => ""),
array(
    "under_section" => "style-config",
    "type" => "image", //Required
    "placeholder" => __("Site Logo - Light Colored Text","citybook"),
    "name" => __("Logo (Dark)","citybook"), //Required
    "id" => "cb-dark-logo", //Required
    "desc" => __("Replace site's light logo for dark bg. Required dimension's 374px * 98px ","citybook"),
    "default" => ""),
	array(
    "under_section" => "style-config",
    "type" => "image", //Required
    "placeholder" => __("Footer Logo","citybook"),
    "name" => __("Footer Logo","citybook"), //Required
    "id" => "cb-footer-logo", //Required
    "desc" => __("Replace footer's logo. Required dimension's 300px * 80px ","citybook"),
    "default" => ""),	
array(
    "under_section" => "style-config",
    "type" => "image", //Required
    "placeholder" => __("wp-admin Logo","citybook"),
    "name" => __("Admin Logo","citybook"), //Required
    "id" => "wpadmin-logo", //Required
    "desc" => __("Replace wp-admin logo. Required dimension's 300px * 80px ","citybook"),
    "default" => ""),
array(
    "under_section" => "style-config",
    "type" => "image", //Required
    "placeholder" => __("wp-admin Logo","citybook"),
    "name" => __("Facebook Capture Image","citybook"), //Required
    "id" => "fbcapture-image", //Required
    "desc" => __("Replace the image that facebook will capture. Required dimension's 800px * 420px ","citybook"),
    "default" => ""),
		
	// Site Notice

array(

    "under_section" => "notice-config",

    "type" => "checkbox",

    "name" => __("Noticebar Module", "citybook"),

    "id" => array("activar_notice"),

    "options" => array( __("Activate","citybook"), ), 

    "desc" => __("Active to display the module.", "citybook"),

    "default" => array("not")

),

array(
    "under_section" => "notice-config", //Required
    "type" => "radio", //Required
    "name" => __( "Appearance", "citybook" ), //Required
    "id" => "notice_location", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("home" => __('Home page','citybook'), "global" => __('Entire site','citybook')), //Required
    "default" => "home"
),

array(

    "under_section" => "notice-config", //Required

    "type" => "textarea", 

    "name" => __( "Message", "citybook" ), //Required

    "id" => "notice", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add notice, this field accepts HTML", "citybook" ),

),



array(

    "under_section" => "notice-config", //Required

    "type" => "color", //Required

    "name" => __("Background Color","citybook"), //Required

    "id" => "color_notice", //Required

    "desc" => __("Choose a color","citybook"),

    "default" => "0F87FE"

),

array(

    "under_section" => "notice-config", //Required

    "type" => "color", //Required

    "name" => __("Links Color","citybook"), //Required

    "id" => "color_lnknotice", //Required

    "desc" => __("Choose a color","citybook"),

    "default" => "c8e2fd"

),
	
// First Visit Notice

array(

    "under_section" => "notice-config",

    "type" => "small_heading",

    "title" => __("First Visit Notice", "citybook"),

),	

array(

    "under_section" => "notice-config",

    "type" => "tips",

    "text" => __("Unlike the notice above, This notice only appear once. It's a cookie based notice that only appear on first visit. ", "citybook"),

),	


array(
    "under_section" => "notice-config", //Required
    "type" => "radio", //Required
    "name" => __( "Display Notice", "citybook" ), //Required
    "id" => "first-visit-notice", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("enable" => __('Enable','citybook'), "disable" => __('Disable','citybook')), //Required
    "default" => "disable"
),

array(

    "under_section" => "notice-config", //Required

    "type" => "color", //Required

    "name" => __("Background","citybook"), //Required

    "id" => "first_visit_notice_bg", //Required

    "desc" => __("Choose a color","citybook"),

    "default" => "7a0087"

),

array(
    "under_section" => "notice-config",
    "type" => "textarea",
    "name" => __("Message", "citybook"),
    "id" => "first-visit-notice-message",
	"code" => "{site}",
	"default" => "Please Follow us on Twitter/Facebook to receive latest news about {site}",
	"desc" => __("Use {site} to display your site name. HTML tags allowed.", "citybook"),
	"rows" =>"4"
),

array(
    "under_section" => "notice-config",
    "type" => "checkbox",
    "name" => __("Like & Follow Buttons", "citybook"),
    "id" => array("first-visit-notice-buttons"),
    "options" => array( __("Activate","citybook"), ), 
    "default" => array("not")
),	


array(
    "under_section" => "notice-config",
    "type" => "text",
    "name" => __("Title", "citybook"),
    "id" => "first-visit-notice-title",
	"default" => __("Follow Us", "citybook")
),	

array(
    "under_section" => "notice-config",
    "type" => "text",
    "name" => __("Facebook Page URL", "citybook"),
    "id" => "notice-facebook-url",
	"placeholder" => __("https://facebook.com/citybook/", "citybook"),
),	

array(
    "under_section" => "notice-config",
    "type" => "text",
    "name" => __("Twitter Account URL", "citybook"),
    "id" => "notice-twitter-url",
	"placeholder" => __("https://twitter.com/citybook/", "citybook"),
),
	
// Watch Settings



array(
    "under_section" => "watch-config", //Required
    "type" => "checkbox", //Required
    "name" => __( "Controls", "citybook" ), //Required
	"id" => array("watch-light", "watch-favorite","watch-comment","watch-report", "watch-ratings", "watch-next-previous-ep", "watch-views"), //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array (__( "Turn Off Lights", "citybook" ), __( "Favorite", "citybook" ), __( "Comments", "citybook" ), __( "Report", "citybook" ), __( "Ratings", "citybook" ), __( "Next & Previous", "citybook" ),__( "Views", "citybook" )), //Required
    "default" => array("checked", "checked", "checked", "checked", "checked", "checked", "checked", "checked")	
),	


array(
	"under_section" => "watch-config",
	"type" => "small_heading",
	"title" => __( "Splash Screen", "citybook" )
),

array(
    "under_section" => "watch-config", //Required
    "type" => "radio", //Required
    "name" => __( "Splash Image & Button", "citybook" ), //Required
    "id" => "cb-splash-screen", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
	"desc" => "Display a splash image that user have to click to view the video. ",	
    "options" => array("enable" => __('Enable','citybook'), "disable" => __('Disable','citybook')), //Required
    "default" => "disable"
),

array(
	"under_section" => "watch-config",
	"type" => "small_heading",
	"title" => __( "Images Slideshow", "citybook" )
),


array(
    "under_section" => "watch-config", //Required
    "type" => "radio", //Required
    "name" => __( "Images Slideshow", "citybook" ), //Required
    "id" => "images-slideshow-mv", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
	"desc" => "Slideshow automatically slides. ",	
    "options" => array("enable" => __('Enable','citybook'), "disable" => __('Disable','citybook')), //Required
    "default" => "disable"
),

array(
	"under_section" => "watch-config",
	"type" => "small_heading",
	"title" => __( "Downloads Table", "citybook" )
),

array(
    "under_section" => "watch-config", //Required
    "type" => "checkbox", //Required
    "name" => __( "Display On:", "citybook" ), //Required
	"id" => array("dltb_mv", "dltb_tv", "dltb_ep"), //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array ("Movies", "TV-Shows", "Episodes"), //Required
    "default" => array("checked", "not", "checked")	
),

array(
	"under_section" => "watch-config",
	"type" => "small_heading",
	"title" => __( "Additional Notice", "citybook" )
),


array(
    "under_section" => "watch-config", //Required
    "type" => "text", //Required
    "name" => __( "Note #1 - Message", "citybook" ), //Required
    "id" => "cstm-nt-1", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
),

array(
    "under_section" => "watch-config", //Required
    "type" => "text", //Required
    "name" => __( "Note #2 - Message", "citybook" ), //Required
    "id" => "cstm-nt-2", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
),

array(
    "under_section" => "watch-config", //Required
    "type" => "text", //Required
    "name" => __( "Note #3 - Message", "citybook" ), //Required
    "id" => "cstm-nt-3", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
),
/*
array(
	"under_section" => "watch-config",
	"type" => "small_heading",
	"title" => __( "Ad in Player", "citybook" )
),

array(
    "under_section" => "watch-config", //Required
    "type" => "checkbox", //Required
    "name" => __( "Ads in Player", "citybook" ), //Required
	"id" => array("ads-inplayer", "hide-ads-after-click"), //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array (__( "Ads in player", "citybook" ), __( "Hide ads after clicking", "citybook" )), //Required
    "default" => array("checked", "checked")
),

array(
    "under_section" => "watch-config", //Required
    "type" => "number", //Required
    "name" => __( "Ads Duration", "citybook" ), //Required
	"id" => "ads-inplayer-duration",
	"desc" => "Time in seconds before the ads disappear automatically.",
	"default" => "20"
),


array(
    "under_section" => "watch-config", //Required
    "type" => "textarea", //Required
    "name" => __( "Codes", "citybook" ), //Required
	"desc" => __("Use HTML codes. Recommended: 300x250 px","citybook"),
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
    "name" => __("Article: Post Header", "citybook"),
    "id" => array("article-header"),
    "options" => array( __("Activate","citybook"), ), 
    "default" => array("checked")
),

array(
	"under_section" => "article-config",
	"type" => "small_heading",
	"title" => __( "Facebook Likebox", "citybook" )
),

array(
    "under_section" => "article-config", //Required
    "type" => "radio", //Required
    "name" => __( "Enable or Disable", "citybook" ), //Required
    "id" => "article-likebox", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("enable" => __('Enable','citybook'), "disable" => __('Disable','citybook')), //Required
    "default" => "disable"
),

array(
    "under_section" => "article-config", //Required
    "type" => "text", //Required
    "name" => __( "Facebook Page Url", "citybook" ), //Required
	"id" => "article-likebox-fbid",
    "placeholder" => "http://facebook.com/google",
),

array(
    "under_section" => "article-config", //Required
    "type" => "checkbox", //Required
    "name" => __( "Likebox Settings", "citybook" ), //Required
	"id" => array("likebox-header", "likebox-cover","likebox-timeline","likebox-facepile"), //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array (__( "Small Header", "citybook" ), __( "Hide Cover Photo", "citybook" ), __( "Show Timeline", "citybook" ), __( "Show Friend's Faces", "citybook" )), //Required
    "default" => array("not", "not", "checked", "checked")
	
),


array(
	"under_section" => "article-config",
	"type" => "small_heading",
	"title" => __( "Related Articles", "citybook" )
),

array(
    "under_section" => "article-config", //Required
    "type" => "checkbox", //Required
    "name" => __( "Enable", "citybook" ), //Required
	"id" => array("article-related"), //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array (__( "Activate", "citybook" )), //Required
    "default" => array("checked")
	
),

array(
    "under_section" => "article-config", //Required
    "type" => "text", //Required
    "name" => __( "Related Articles - Title", "citybook" ), //Required
	"id" => "article-related-title",
    "placeholder" => __( "Related Articles", "citybook" ),
	"desc" => __( "Leave blank to use default", "citybook" )
	
),

array(
    "under_section" => "article-config", //Required
    "type" => "number", //Required
    "name" => __( "Amount", "citybook" ), //Required
	"id" => "article-related-amount",
	"default" => "5"
),

array(
	"under_section" => "article-config",
	"type" => "small_heading",
	"title" => __( "Hot Articles", "citybook" )
),

array(
    "under_section" => "article-config", //Required
    "type" => "checkbox", //Required
    "name" => __( "Enable", "citybook" ), //Required
	"id" => array("article-hot"), //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array (__( "Activate", "citybook" )), //Required
    "default" => array("checked")
	
),

array(
    "under_section" => "article-config", //Required
    "type" => "text", //Required
    "name" => __( "Hot Articles Title", "citybook" ), //Required
	"id" => "article-hot-title",
    "placeholder" => __( "Hot Articles", "citybook" ),
	"desc" => __( "Leave blank to use default", "citybook" )
	
),

array(
    "under_section" => "article-config", //Required
    "type" => "number", //Required
    "name" => __( "Amount", "citybook" ), //Required
	"id" => "article-hot-amount",
	"default" => "5"
),


// Next Episode Notice

array(
    "under_section" => "tv-config", //Required
    "type" => "radio", //Required
    "name" => __( "Skipped Season", "citybook" ), //Required
    "id" => "empty_seasons", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("enable" => __('Display','citybook'), "disable" => __('Hidden','citybook')), //Required
    "desc" => __( "Choose an option", "citybook" ),
    "default" => "enable"
),

array(
    "under_section" => "tv-config", //Required
    "type" => "radio", //Required
    "name" => __( "Splash Image & Button", "citybook" ), //Required
    "id" => "tv_splash", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("enable" => __('Enable','citybook'), "disable" => __('Disable','citybook')), //Required
    "desc" => __( "Display a splash image that user have to click to view the seasons & episodes", "citybook" ),
    "default" => "disable"
),

array(
	"under_section" => "tv-config",
	"type" => "small_heading",
	"title" => __( "Next Episode Notice", "citybook" )
),

array(
    "under_section" => "tv-config",
    "type" => "checkbox",
    "name" => __("Toggle On/Off", "citybook"),
    "id" => array("ep_sched"),
    "options" => array( __("Activate","citybook"), ), 
    "default" => array("checked")
),


	
array(

    "under_section" => "tv-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Schedule Message", "citybook" ), //Required

    "id" => "sched_note", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "placeholder" => __( "Estimated the next episode will come at {date} {time} {countdown}", "citybook" ),
	
	"default" => "Estimated the next episode will come at {date} {time} {countdown}",
		
	"rows" =>"5",
		
	"code" => "{date}<br>{time}<br>{countdown}",

    "default" => ""


),

array(

    "under_section" => "tv-config", //Required

    "type" => "color", //Required

    "name" => __("Text Color","citybook"), //Required

    "id" => "ep-sched-text", //Required

    "desc" => __("Click the box to select a color","citybook"),

    "default" => "ffffff"

),

array(

    "under_section" => "tv-config", //Required

    "type" => "color", //Required

    "name" => __("Background Color","citybook"), //Required

    "id" => "ep-sched-bg", //Required

    "desc" => __("Click the box to select a color","citybook"),

    "default" => "79c143"

),

array(

    "under_section" => "tv-config", //Required

    "type" => "color", //Required

    "name" => __("Border Color","citybook"), //Required

    "id" => "ep-sched-border", //Required

    "desc" => __("Click the box to select a color","citybook"),

    "default" => "79c143"

),


// Comments Settings

array(
    "under_section" => "comentarios-config", //Required
    "type" => "radio", //Required
    "name" => __( "Comments System", "citybook" ), //Required
    "id" => "comment-sys", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("wp_comment" => __('Wordpress','citybook'), "fb_comment" => __('Facebook Comments','citybook'),"dq_comment" => __('Disqus Comments','citybook')), //Required
    "desc" => __( "Choose an option", "citybook" ),
    "default" => "fb_comment"
),

array(
    "under_section" => "comentarios-config", //Required
    "type" => "checkbox", //Required
    "name" => __( "Enable or Disable", "citybook" ), //Required
    "id" => array("comm_mov", "comm_tv","comm_ep","comm_news", "comm_not", "comm_page"), //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array (__( "Movies", "citybook" ), __( "TV Series", "citybook" ), __( "Episodes", "citybook" ), __( "Article", "citybook" ), __( "Notices", "citybook" ), __( "Single Pages", "citybook" )), //Required
    "desc" => __( "Choose which pages you want the comments section to be enabled.", "citybook" ),
    "default" => array("checked", "checked", "checked", "checked", "checked", "not")
),

array (

	"under_section" => "comentarios-config",
	"type" => "small_heading",
	"title" => __( "Facebook Commnets", "citybook" ),
),
array (

	"under_section" => "comentarios-config",
	"type" => "tips",
	"text" => __( "We recommend setting these fields to moderate the facebook comments, <a href='https://developers.facebook.com/docs/plugins/comments' target='_blank'>more info</a>", "citybook" ),
),

array(

    "under_section" => "comentarios-config", //Required

    "type" => "text", //Required

    "name" => __( "Facebook App ID", "citybook" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fb_id", //Required

    "placeholder" => "209955335852854",

    "desc" => __( "Insert you Facebook app id here. If you don't have one for your webpage you can create it <a href='https://developers.facebook.com/apps/' target='_blank'>here</a>", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "comentarios-config", //Required

    "type" => "text", //Required

    "name" => __( "Admin User", "citybook" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fb_id_admin", //Required

    "desc" => __( "Enter username or user ID to manage comments", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "comentarios-config", //Required

    "type" => "text", //Required

    "name" => __( "App language", "citybook" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fb_idioma", //Required

    "placeholder" => "en_EN",

    "desc" => __( "Add the language code you want, (es_LA, ro_RO, pt_BR)", "citybook" ),

    "default" => ""

),


array(
    "under_section" => "comentarios-config", //Required
    "type" => "radio", //Required
    "name" => __( "Color Scheme", "citybook" ), //Required
    "id" => "fb_color", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("light" => __('Light Color','citybook'), "dark" => __('Dark Color','citybook')), //Required
    "desc" => __( "Choose an option", "citybook" ),
    "default" => "light"
),

array(

    "under_section" => "comentarios-config", //Required

    "type" => "number", //Required

    "name" => __("Facebook Number of Posts", "citybook"), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fb_numero", //Required

    "desc" => __("Select number of comments to display per publication", "citybook"),

    "default" => "10"),
array(
	"under_section" => "comentarios-config",
	"type" => "small_heading",
	"title" => __( "Disqus Comments", "citybook" ),
),


array(

    "under_section" => "comentarios-config", //Required

    "type" => "text", //Required

    "name" => __( "Shorname Disqus", "citybook" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "disqus_id", //Required

    "placeholder" => "grifus",

    "desc" => __( "Add your community shortname Disqus", "citybook" ),

    "default" => ""

),

// Footer Settings

array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Copyright Footer Text", "citybook" ), //Required

    "id" => "copyright_footer", //Required

	"placeholder" => " ".__( 'Powered by', 'citybook' )." WordPress & Moundothemes",

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Your license allows you to modify the copyright", "citybook" ),

    "default" => ""

),
array(

    "under_section" => "footer-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Disclaimer Footer Text", "citybook" ), //Required

    "id" => "disclaimer_footer", //Required

	"placeholder" => __( "Disclaimer: This site does not store any files on its server. All contents are provided by non-affiliated third parties.", "citybook" ),

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Your license allows you to modify the disclaimer", "citybook" ),
	
	"rows" =>"3",

    "default" => ""

),

array(

    "under_section" => "footer-config", //Required

    "type" => "small_heading", //Required

    "title" => __( "Social Network", "citybook" ), //Required
),


array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "citybook" ), //Required

    "id" => "social_title_footer", //Required

	"placeholder" => "Stay Connected",
	
	"desc" => __( "Leave blank to use default.", "citybook" ),

    "display_checkbox_id" => "toggle_checkbox_id",

),

array(

    "under_section" => "footer-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Message", "citybook" ), //Required

    "id" => "social_message_footer", //Required

	"placeholder" => __( "Like & follow us on social networking sites to get the latest updates on movies, tv-series and news", "citybook" ),
	
	"desc" => __( "Leave blank to use default", "citybook" ),

    "display_checkbox_id" => "toggle_checkbox_id",
	
			"rows" =>"4",

),

array(
    "under_section" => "footer-config",
    "type" => "checkbox",
    "name" => __("Enable/Disable Icons","citybook"),
    "id" => array("fb_icon_footer","tw_icon_footer","gp_icon_footer","yt_icon_footer"),
    "options" => array( __("Facebook","citybook"), __("Twitter","citybook"), __("Google+","citybook"), __("Youtube","citybook"), ), 
    "default" => array("checked","checked","checked","checked")
),


array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Facebook", "citybook" ), //Required

    "id" => "social_fb_footer", //Required

	"placeholder" => "https://www.facebook.com/google",

    "display_checkbox_id" => "toggle_checkbox_id",

),

array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Twitter", "citybook" ), //Required

    "id" => "social_tw_footer", //Required

	"placeholder" => "https://twitter.com/google",

    "display_checkbox_id" => "toggle_checkbox_id",

),

array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Google+", "citybook" ), //Required

    "id" => "social_gp_footer", //Required

	"placeholder" => "https://plus.google.com/+google",

    "display_checkbox_id" => "toggle_checkbox_id",

),

array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Youtube", "citybook" ), //Required

    "id" => "social_yt_footer", //Required

	"placeholder" => "https://www.youtube.com/user/google",

    "display_checkbox_id" => "toggle_checkbox_id",

),







array(
    "under_section" => "footer-config", 
    "type" => "small_heading", 
    "title" => __( "Footer Keywords", "citybook" ),
),


array(
    "under_section" => "footer-config", //Required
    "type" => "radio", //Required
    "name" => __( "Display Keywords", "citybook" ), //Required
    "id" => "display-footkey", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("enable" => __('Enable','citybook'), "disable" => __('Disable','citybook')), //Required
    "default" => "enable"
),


array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Keyword 1", "citybook" ), //Required

    "id" => "footkeyword_1", //Required

	"placeholder" => "Watch full movies online",

    "display_checkbox_id" => "toggle_checkbox_id",

    "placeholder" => __( "Leave blank to use default.", "citybook" )

),

array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Keyword 2", "citybook" ), //Required

    "id" => "footkeyword_2", //Required

	"placeholder" => "Free movies online",

    "display_checkbox_id" => "toggle_checkbox_id",

	
    "placeholder" => __( "Leave blank to use default.", "citybook" )

),

array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Keyword 3", "citybook" ), //Required

    "id" => "footkeyword_3", //Required

	"placeholder" => "Movietube",

    "display_checkbox_id" => "toggle_checkbox_id",

    "placeholder" => __( "Leave blank to use default.", "citybook" )

),

array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Keyword 4", "citybook" ), //Required

    "id" => "footkeyword_4", //Required

	"placeholder" => "Free online movies full",

    "display_checkbox_id" => "toggle_checkbox_id",

    "placeholder" => __( "Leave blank to use default.", "citybook" )

),

array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Keyword 5", "citybook" ), //Required

    "id" => "footkeyword_5", //Required

	"placeholder" => "Movie2k",

    "display_checkbox_id" => "toggle_checkbox_id",

    "placeholder" => __( "Leave blank to use default.", "citybook" )

),
array(

    "under_section" => "footer-config", //Required

    "type" => "text", //Required

    "name" => __( "Keyword 6", "citybook" ), //Required

    "id" => "footkeyword_6", //Required

	"placeholder" => "Watch movies 2k",

    "display_checkbox_id" => "toggle_checkbox_id",

    "placeholder" => __( "Leave blank to use default.", "citybook" )

),

### HOMEPAGE ####


// homepage modules

array(

    "under_section" => "home-module", //Required

    "type" => "textarea", 

    "name" => __( "Module Shortcodes", "citybook" ), //Required

    "id" => "module-shortcodes", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add modular Shortcodes to arrange your home page.", "citybook" ),
	
	"code" => "[module-movies]<br>[module-tvshows]<br>[module-episodes]<br>[module-extra1]<br>[module-extra2]<br>[module-extra3]<br>[module-extra4]<br>[module-extra5]"

),



// Featured Slider Module


array(
    "under_section" => "sli-module",
    "type" => "checkbox",
    "name" => __("Featured Slider Module","citybook"),
    "id" => array("featslidmodule"),
    "options" => array( __("Activate","citybook"), ), 
    "default" => array("checked")
),

array (
	"under_section" => "sli-module",
	"type" => "small_heading",
	"title" => __( "Featured Movies", "citybook" ),
),

array(
    "under_section" => "sli-module",
    "type" => "checkbox",
    "name" => __("Contents Types", "citybook"),
    "id" => array("slider-mv","slider-tv","slider-ep",),
    "options" => array( __("Movies","citybook"), __("TV-Series","citybook") ), 
    "default" => array("checked","not",),

),
	
array(
    "under_section" => "sli-module", //Required
    "type" => "radio", //Required
    "name" => __( "Filter by:", "citybook" ), //Required
    "id" => "filterby-cat", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("disable" => __('Release Year','citybook'), "enable" => __('Category','citybook')), //Required
    "default" => "disable"
),

	
array(
    "under_section" => "sli-module", //Required
    "type" => "number", //Required
    "name" => __("Category ID or Year ID","citybook"), //Required
    "id" => "estrenos_cat", //Required
	"display_checkbox_id" => "toggle_checkbox_id",
    "desc" => __("Enter the correct term id.","citybook")
),
array(
    "under_section" => "sli-module", //Required
    "type" => "number", //Required
    "name" => __("Item Amount","citybook"), //Required
    "id" => "slider_num", //Required
    "desc" => __("Enter amount of featured movies to display in slider","citybook"),
	"default" => ("5")),
	
array (
	"under_section" => "sli-module",
	"type" => "small_heading",
	"title" => "News & Site Notice",
),

array(
    "under_section" => "sli-module", //Required
    "type" => "radio", //Required
    "name" => __( "Featured News", "citybook" ), //Required
    "id" => "news-module", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("enable" => __('Enable','citybook'), "disable" => __('Disable','citybook')), //Required
    "default" => "enable"
),

array(
    "under_section" => "sli-module", //Required
    "type" => "radio", //Required
    "name" => __( "Featured Notice", "citybook" ), //Required
    "id" => "notice-module", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("enable" => __('Enable','citybook'), "disable" => __('Disable','citybook')), //Required
	"desc" => __("Feature coming soon.","citybook"),
    "default" => "disable"
),




array (
	"under_section" => "sli-module",
	"type" => "small_heading",
	"title" => __( "Mobile Applications", "citybook" ),
),

array(
    "under_section" => "sli-module",
    "type" => "checkbox",
    "name" => __("Android App","citybook"),
    "id" => array("mobile_android"),
    "options" => array( __("Activate","citybook"), ), 
),

array(
    "under_section" => "sli-module",
    "type" => "text",
    "name" => __("Android App Link","citybook"),
    "id" => "android-link",
    "placeholder" => __("https://play.google.com/store/apps/details?id=com.android.chrome","citybook"),
),

array(
    "under_section" => "sli-module",
    "type" => "checkbox",
    "name" => __("iOS App","citybook"),
    "id" => array("mobile_ios"),
    "options" => array( __("Activate","citybook"), ), 
),

array(
    "under_section" => "sli-module",
    "type" => "text",
    "name" => __("iOS App Link","citybook"),
    "id" => "ios-link",
    "placeholder" => __("https://itunes.apple.com/us/app/id535886823","citybook"),
),


// Suggestions Module

	array(
    "under_section" => "sugg-module",
    "type" => "checkbox",
    "name" => __("Suggestions Module","citybook"),
    "id" => array("suggmodule"),
    "options" => array( __("Activate","citybook"), ), 
    "default" => array("checked")),
	array(
    "under_section" => "sugg-module", //Required
    "type" => "text", //Required
    "name" => __("Module Title","citybook"), //Required
    "id" => "sugg_title", //Required
    "placeholder" => __("Suggestion","citybook"),
    "desc" => __("Leave blank to use the default title.","citybook"),
	"default" => ("Suggestion")),
array(
    "under_section" => "sugg-module", //Required
    "type" => "number", //Required
    "name" => __("Items Amount","citybook"), //Required
    "id" => "sugg_num", //Required
	"default" => ("16")),
	array(
    "under_section" => "sugg-module", //Required
    "type" => "checkbox", //Required
    "name" => __( "Sub Modules", "citybook" ), //Required
    "id" => array("sugg_mviews", "sugg_mfav","sugg_trating","sugg_timdb"), //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array (__( "Most Viewed", "citybook" ), __( "Most Favorite", "citybook" ), __( "Top Rating", "citybook" ), __( "Top IMDb", "citybook" )), //Required
    "default" => array("checked", "checked", "checked", "checked")
),

array (
	"under_section" => "sugg-module",
	"type" => "small_heading",
	"title" => __( "Featured Movies", "citybook" )
),

array(
    "under_section" => "sugg-module", //Required
    "type" => "radio", //Required
    "name" => __( "Featured Movies", "citybook" ), //Required
    "id" => "sugg-featured-mov", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("enable" => __('Enable','citybook'), "disable" => __('Disable','citybook')), //Required
    "default" => "enable"
),


array(
    "under_section" => "sugg-module",
    "type" => "checkbox",
    "name" => __("Contents Types", "citybook"),
    "id" => array("sugg-mv","sugg-tv","slider-ep",),
    "options" => array( __("Movies","citybook"), __("TV-Series","citybook") ), 
    "default" => array("checked","not",),

),


array(
    "under_section" => "sugg-module", //Required
    "type" => "radio", //Required
    "name" => __( "Filter by:", "citybook" ), //Required
    "id" => "sugg-filterby-cat", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array("false" => __('Release Year','citybook'), "true" => __('Category','citybook')), //Required
    "default" => "false"
),

array(
    "under_section" => "sugg-module", //Required
    "type" => "number", //Required
    "name" => __("Category ID or Year ID","citybook"), //Required
    "id" => "sugg_featured_mov_id", //Required
    "desc" => __("Enter the correct term id.","citybook"),
),
// Latest Movies Module 


	array(
    "under_section" => "latest-mov",
    "type" => "checkbox",
    "name" => __("Latest Movies Module","citybook"),
    "id" => array("movsmodule"),
    "options" => array( __("Activate","citybook"), ), 
    "default" => array("checked"),
		"code" =>("[module-movies]")),
		array(
    "under_section" => "latest-mov", //Required
    "type" => "text", //Required
    "name" => __("Module Title","citybook"), //Required
    "id" => "latestmov_title", //Required
    "placeholder" => __("Latest Movies","citybook"),
    "desc" => __("Leave blank to use default title.","citybook"),
	"default" => ("Latest Movies")),
array(
    "under_section" => "latest-mov", //Required
    "type" => "number", //Required
    "name" => __("Items Amount","citybook"), //Required
    "id" => "latestmov_num", //Required
    "desc" => __("Enter amount of movies you want to display in homepage","citybook"),
	"default" => ("16")),
	
// Latest TV-Series Module 
	
array(
    "under_section" => "latest-tv",
    "type" => "checkbox",
    "name" => __("Latest TV Shows Module","citybook"),
    "id" => array("tvmodule"),
    "options" => array( __("Activate","citybook"), ), 
    "default" => array("checked"),
		"code" =>("[module-tvshows]")),
			array(
    "under_section" => "latest-tv", //Required
    "type" => "text", //Required
    "name" => __("Module Title","citybook"), //Required
    "id" => "latesttv_title", //Required
    "placeholder" => __("Latest TV Series","citybook"),
    "desc" => __("Leave blank to use default title.","citybook"),
	"default" => ("Latest TV Series")),
array(
    "under_section" => "latest-tv", //Required
    "type" => "number", //Required
    "name" => __("Items","citybook"), //Required
    "id" => "latesttv_num", //Required
    "desc" => __("Enter amount of tv series you want to display in homepage","citybook"),
	"default" => ("16")),
	
	
// Latest Episodes Module 

	array(
    "under_section" => "latest-ep",
    "type" => "checkbox",
    "name" => __("Latest Episodes Module","citybook"),
    "id" => array("epmodule"),
    "options" => array( __("Activate","citybook"), ), 
    "default" => array("checked"),
		"code" =>("[module-episodes]")),
			array(
    "under_section" => "latest-ep", //Required
    "type" => "text", //Required
    "name" => __("Module Title","citybook"), //Required
    "id" => "latestep_title", //Required
    "placeholder" => __("Latest Episodes","citybook"),
    "desc" => __("Leave blank to use default title.","citybook"),
	"default" => ("Latest Episodes")),
	array(
    "under_section" => "latest-ep", //Required
    "type" => "number", //Required
    "name" => __("Items Amount","citybook"), //Required
    "id" => "latestep_num", //Required
    "desc" => __("Enter amount of episodes you want to display in homepage","citybook"),
	"default" => ("16")),
	
### ADDITIONAL MODULES ###

// EXTRA MODULE 1
array (

	"under_section" => "additional-modules", //Required
	"type" => "small_heading",
	"title" => __( "Extra Module 1", "citybook" )
),
	array(
    "under_section" => "additional-modules", //Required
    "type" => "checkbox",
    "name" => __("Extra Module 1","citybook"),
    "id" => array("1extramodule1"),
    "options" => array( __("Activate","citybook"), ), 
		"code" =>("[module-extra1]")),
			array(
    "under_section" => "additional-modules", //Required
    "type" => "text", //Required
    "name" => __("Module Title","citybook"), //Required
    "id" => "1extramodule1_title", //Required
    "placeholder" => __("Module Title","citybook"),
    "desc" => __("Leave blank to use default title.","citybook"),
	),
			array(
    "under_section" => "additional-modules", //Required
    "type" => "number", //Required
    "name" => __("Filter by: Category","citybook"), //Required
    "id" => "1extramodule1_cat", //Required
    "desc" => __("Category ID (Numeric) where all the posts you want to display belongs to.","citybook"),
	),
	array(
    "under_section" => "additional-modules", //Required
    "type" => "number", //Required
    "name" => __("Items Amount","citybook"), //Required
    "id" => "1extramodule1_num", //Required
    "desc" => __("Enter amount of contents you want to display in this module","citybook"),
	"default" => ("16")
	),
	
	
// EXTRA MODULE 2
array (

	"under_section" => "additional-modules", //Required
	"type" => "small_heading",
	"title" => __( "Extra Module 2", "citybook" )
),
	array(
    "under_section" => "additional-modules", //Required
    "type" => "checkbox",
    "name" => __("Extra Module 2","citybook"),
    "id" => array("2extramodule2"),
    "options" => array( __("Activate","citybook"), ), 
		"code" =>("[module-extra2]")),
			array(
    "under_section" => "additional-modules", //Required
    "type" => "text", //Required
    "name" => __("Module Title","citybook"), //Required
    "id" => "2extramodule2_title", //Required
    "placeholder" => __("Module Title","citybook"),
    "desc" => __("Leave blank to use default title.","citybook"),
	),
			array(
    "under_section" => "additional-modules", //Required
    "type" => "number", //Required
    "name" => __("Filter by: Category","citybook"), //Required
    "id" => "2extramodule2_cat", //Required
    "desc" => __("Category ID (Numeric) where all the posts you want to display belongs to.","citybook"),
	),
	array(
    "under_section" => "additional-modules", //Required
    "type" => "number", //Required
    "name" => __("Items Amount","citybook"), //Required
    "id" => "2extramodule2_num", //Required
    "desc" => __("Enter amount of contents you want to display in this module","citybook"),
	"default" => ("16")
	),	

// EXTRA MODULE 3
array (

	"under_section" => "additional-modules", //Required
	"type" => "small_heading",
	"title" => __( "Extra Module 3", "citybook" )
),
	array(
    "under_section" => "additional-modules", //Required
    "type" => "checkbox",
    "name" => __("Extra Module 3","citybook"),
    "id" => array("3extramodule3"),
    "options" => array( __("Activate","citybook"), ), 
		"code" =>("[module-extra3]")),
			array(
    "under_section" => "additional-modules", //Required
    "type" => "text", //Required
    "name" => __("Module Title","citybook"), //Required
    "id" => "3extramodule3_title", //Required
    "placeholder" => __("Module Title","citybook"),
    "desc" => __("Leave blank to use default title.","citybook"),
	),
			array(
    "under_section" => "additional-modules", //Required
    "type" => "number", //Required
    "name" => __("Filter by: Category","citybook"), //Required
    "id" => "3extramodule3_cat", //Required
    "desc" => __("Category ID (Numeric) where all the posts you want to display belongs to.","citybook"),
	),
	array(
    "under_section" => "additional-modules", //Required
    "type" => "number", //Required
    "name" => __("Items Amount","citybook"), //Required
    "id" => "3extramodule3_num", //Required
    "desc" => __("Enter amount of contents you want to display in this module","citybook"),
	"default" => ("16")
	),

// EXTRA MODULE 4
array (

	"under_section" => "additional-modules", //Required
	"type" => "small_heading",
	"title" => __( "Extra Module 4", "citybook" )
),
	array(
    "under_section" => "additional-modules", //Required
    "type" => "checkbox",
    "name" => __("Extra Module 4","citybook"),
    "id" => array("4extramodule4"),
    "options" => array( __("Activate","citybook"), ), 
		"code" =>("[module-extra4]")),
			array(
    "under_section" => "additional-modules", //Required
    "type" => "text", //Required
    "name" => __("Module Title","citybook"), //Required
    "id" => "4extramodule4_title", //Required
    "placeholder" => __("Module Title","citybook"),
    "desc" => __("Leave blank to use default title.","citybook"),
	),
			array(
    "under_section" => "additional-modules", //Required
    "type" => "number", //Required
    "name" => __("Filter by: Category","citybook"), //Required
    "id" => "4extramodule4_cat", //Required
    "desc" => __("Category ID (Numeric) where all the posts you want to display belongs to.","citybook"),
	),
	array(
    "under_section" => "additional-modules", //Required
    "type" => "number", //Required
    "name" => __("Items Amount","citybook"), //Required
    "id" => "4extramodule4_num", //Required
    "desc" => __("Enter amount of contents you want to display in this module","citybook"),
	"default" => ("16")
	),		
// EXTRA MODULE 5
array (

	"under_section" => "additional-modules", //Required
	"type" => "small_heading",
	"title" => __( "Extra Module 5", "citybook" )
),
	array(
    "under_section" => "additional-modules", //Required
    "type" => "checkbox",
    "name" => __("Extra Module 5","citybook"),
    "id" => array("5extramodule5"),
    "options" => array( __("Activate","citybook"), ), 
		"code" =>("[module-extra5]")),
			array(
    "under_section" => "additional-modules", //Required
    "type" => "text", //Required
    "name" => __("Module Title","citybook"), //Required
    "id" => "5extramodule5_title", //Required
    "placeholder" => __("Module Title","citybook"),
    "desc" => __("Leave blank to use default title.","citybook"),
	),
			array(
    "under_section" => "additional-modules", //Required
    "type" => "number", //Required
    "name" => __("Filter by: Category","citybook"), //Required
    "id" => "5extramodule5_cat", //Required
    "desc" => __("Category ID (Numeric) where all the posts you want to display belongs to.","citybook"),
	),
	array(
    "under_section" => "additional-modules", //Required
    "type" => "number", //Required
    "name" => __("Items Amount","citybook"), //Required
    "id" => "5extramodule5_num", //Required
    "desc" => __("Enter amount of contents you want to display in this module","citybook"),
	"default" => ("16")
	),		
### ADVERTISING ###
	

// Fake player

array(

    "under_section" => "ads-player-config",

    "type" => "checkbox",

    "name" => __("Fake Player", "citybook"),

    "id" => array("activar-fake"),

	"img_desc" => get_bloginfo('template_directory')."/assets/css/img/img_desc/fakeplay.png",
    "options" => array( __("Activate","citybook"), ), 

    "desc" => __("After activating, assign the number of random links you want to activate below", "citybook"),

    "default" => array("not")

),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __("Fake Server Name","citybook"), //Required

    "id" => "server_adplayer", //Required

    "desc" => __("Leave blank to use default.","citybook"),
	
	"placeholder" => __("HD Server","citybook"),

    "default" => "HD Server"

),


array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __("Fake Quality","citybook"), //Required

    "id" => "quality_adplayer", //Required

    "desc" => __("Leave blank to use default.","citybook"),
	
	"placeholder" => __("HD 1080p","citybook"),

    "default" => "HD 1080p"

),


array(

    "under_section" => "ads-player-config", //Required

    "type" => "color", //Required

    "name" => __("Color Scheme","citybook"), //Required

    "id" => "color_adplayer", //Required

    "desc" => __("Choose a color","citybook"),

    "default" => "81ad53"

),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "select", //Required

    "name" => __("Number of active links", "citybook"), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "enlaces-fake", //Required

    "options" => array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10"), //Required

    "desc" => __("Select the number of active random links", "citybook"),

    "default" => ""),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __( "Link 1", "citybook" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fake-link-1", //Required

    "placeholder" => __( "http://", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __( "Link 2", "citybook" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fake-link-2", //Required

    "placeholder" => __( "http://", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __( "Link 3", "citybook" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fake-link-3", //Required

    "placeholder" => __( "http://", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __( "Link 4", "citybook" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fake-link-4", //Required

    "placeholder" => __( "http://", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __( "Link 5", "citybook" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fake-link-5", //Required

    "placeholder" => __( "http://", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __( "Link 6", "citybook" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fake-link-6", //Required

    "placeholder" => __( "http://", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __( "Link 7", "citybook" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fake-link-7", //Required

    "placeholder" => __( "http://", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __( "Link 8", "citybook" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fake-link-8", //Required

    "placeholder" => __( "http://", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __( "Link 9", "citybook" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fake-link-9", //Required

    "placeholder" => __( "http://", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-player-config", //Required

    "type" => "text", //Required

    "name" => __( "Link 10", "citybook" ), //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "id" => "fake-link-10", //Required

    "placeholder" => __( "http://", "citybook" ),

    "default" => ""

),

// Fake Buttons 
array(

    "under_section" => "ads-buttons-config",

    "type" => "checkbox",

    "name" => __("Fake Buttons", "citybook"),

    "id" => array("fake-buttons"),

	"img_desc" => get_bloginfo('template_directory')."/assets/css/img/img_desc/fakebuttons.png",
	
    "options" => array( __("Activate","citybook"), ), 

    "desc" => __("Display fake 'Stream' & 'Download' buttons.", "citybook"),

    "default" => array("not")

),

array (

	"under_section" => "ads-buttons-config",
	"type" => "small_heading",
	"title" => __( "Fake Button 1", "citybook" )
),

array(

    "under_section" => "ads-buttons-config",

    "type" => "text",

    "name" => __("Title", "citybook"),

    "id" => "ads-button-1-title",

    "default" => "Stream in HD",
	
	"desc" => __( "Leave blank to use default.", "citybook" )

),

array(

    "under_section" => "ads-buttons-config",

    "type" => "text",

    "name" => __("URL", "citybook"),

    "id" => "ads-button-1-url",
	
	"placeholder" => "http://"

),



array (

	"under_section" => "ads-buttons-config",
	"type" => "small_heading",
	"title" => __( "Fake Button 2", "citybook" )
),

array(

    "under_section" => "ads-buttons-config",

    "type" => "text",

    "name" => __("Title", "citybook"),

    "id" => "ads-button-2-title",

    "default" => __( "Download in HD", "citybook" ),
	
	"desc" => __( "Leave blank to use default.", "citybook" )

),

array(

    "under_section" => "ads-buttons-config",

    "type" => "text",

    "name" => __("URL", "citybook"),

    "id" => "ads-button-2-url",
	
	"placeholder" => "http://"

),


// ADS - HOME PAGE

array (
	"under_section" => "ads-homepage-config",
	"type" => "small_heading",
	"title" => __( "Location: Before Suggestion Module", "citybook" )
),

array(

    "under_section" => "ads-homepage-config",

    "type" => "checkbox",

    "name" => __("Display ad", "citybook"),

    "id" => array("homepage-ad-above"),

    "options" => array("Activate"), 

),


array(

    "under_section" => "ads-homepage-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "citybook" ), //Required

    "id" => "ads-homepage-1-title", //Required

    "display_checkbox_id" => "toggle_checkbox_id",
    
	"placeholder" => __( "Interesting for you", "citybook" ),
	
	"desc" => __( "Leave blank to disable title.", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-homepage-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "citybook" ), //Required

    "id" => "ads-homepage-1-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "citybook" ),

    "default" => ""

),


array (
	"under_section" => "ads-homepage-config",
	"type" => "small_heading",
	"title" => __( "Location: After Suggestion Module", "citybook" )
),


array(

    "under_section" => "ads-homepage-config",

    "type" => "checkbox",

    "name" => __("Display ad", "citybook"),

    "id" => array("homepage-ad-after"),

    "options" => array("Activate"), 

),


array(

    "under_section" => "ads-homepage-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "citybook" ), //Required

    "id" => "ads-homepage-2-title", //Required

    "display_checkbox_id" => "toggle_checkbox_id",
    
	"placeholder" => __( "Interesting for you", "citybook" ),
	
	"desc" => __( "Leave blank to disable title.", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-homepage-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "citybook" ), //Required

    "id" => "ads-homepage-2-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "citybook" ),

    "default" => ""

),

array (
	"under_section" => "ads-homepage-config",
	"type" => "small_heading",
	"title" => __( "Location: Before Footer", "citybook" )
),


array(

    "under_section" => "ads-homepage-config",

    "type" => "checkbox",

    "name" => __("Display ad", "citybook"),

    "id" => array("homepage-ad-before"),

    "options" => array("Activate"), 

),


array(

    "under_section" => "ads-homepage-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "citybook" ), //Required

    "id" => "ads-homepage-3-title", //Required

    "display_checkbox_id" => "toggle_checkbox_id",
    
	"placeholder" => __( "Interesting for you", "citybook" ),
	
	"desc" => __( "Leave blank to disable title.", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-homepage-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "citybook" ), //Required

    "id" => "ads-homepage-3-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "citybook" ),

    "default" => ""

),


// ADS - ARCHIVE PAGES


array(
	"under_section" => "ads-mains-config",
	"type" => "small_heading",
	"title" => __( "Location: After Title", "citybook" )
),

array(

    "under_section" => "ads-mains-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "citybook" ), //Required

    "id" => "ads_mains_1_title", //Required

    "display_checkbox_id" => "toggle_checkbox_id",
    
	"placeholder" => __( "Interesting for you", "citybook" ),
	
	"desc" => __( "Leave blank to disable title.", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-mains-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "citybook" ), //Required

    "id" => "ads_mains_1_code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-mains-config",

    "type" => "checkbox",

    "name" => __("Display Ads", "citybook"),

    "id" => array("results-ad-1", "archive-ad-1", "top-most-ad-1"),

    "options" => array(__( "Results Page", "citybook" ), __( "Archive Pages", "citybook" ), __( "Top/Most Archives", "citybook" )), 

),

array(
	"under_section" => "ads-mains-config",
	"type" => "small_heading",
	"title" => __( "Location: Before Footer", "citybook" ),
),

array(

    "under_section" => "ads-mains-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "citybook" ), //Required

    "id" => "ads_mains_2_title", //Required

    "display_checkbox_id" => "toggle_checkbox_id",
    
	"placeholder" => __( "Interesting for you", "citybook" ),
	
	"desc" => __( "Leave blank to disable title.", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-mains-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "citybook" ), //Required

    "id" => "ads_mains_2_code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-mains-config",

    "type" => "checkbox",

    "name" => __("Display Ads", "citybook"),

    "id" => array("results-ad-2", "archive-ad-2","top-most-ad-2"),

    "options" => array(__( "Results Pages", "citybook" ), __( "Archive Pages", "citybook" ), __( "Top/Most Archives", "citybook" )), 

),


// ADS - WATCH PAGES


array(
	"under_section" => "ads-vid-config",
	"type" => "small_heading",
	"title" => __( "Location: Above Player", "citybook" ),
),

array(

    "under_section" => "ads-vid-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "citybook" ), //Required

    "id" => "ads-vid-1-title", //Required

    "display_checkbox_id" => "toggle_checkbox_id",
    
	"placeholder" => __( "Interesting for you", "citybook" ),
	
	"desc" => __( "Leave blank to disable title.", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-vid-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "citybook" ), //Required

    "id" => "ads-vid-1-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-vid-config",

    "type" => "checkbox",

    "name" => __("Display Ads", "citybook"),

    "id" => array("mov-ad-1", "tv-ad-1", "ep-ad-1"),

    "options" => array( __( "Movies", "citybook" ), __( "TV-Series", "citybook" ), __( "Episodes", "citybook" )), 

),

array(
	"under_section" => "ads-vid-config",
	"type" => "small_heading",
	"title" => __( "Location: Before Details", "citybook" ),
),

array(

    "under_section" => "ads-vid-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "citybook" ), //Required

    "id" => "ads-vid-2-title", //Required

    "display_checkbox_id" => "toggle_checkbox_id",
    
	"placeholder" => __( "Interesting for you", "citybook" ),
	
	"desc" => __( "Leave blank to disable title.", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-vid-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "citybook" ), //Required

    "id" => "ads-vid-2-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-vid-config",

    "type" => "checkbox",

    "name" => __("Display Ads", "citybook"),

    "id" => array("mov-ad-2", "tv-ad-2", "ep-ad-2"),

    "options" => array( "Movies", "TV-Series", "Episodes"), 

),


array(
	"under_section" => "ads-vid-config",
	"type" => "small_heading",
	"title" => __( "Location: Above Comments", "citybook" ),
),

array(

    "under_section" => "ads-vid-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "citybook" ), //Required

    "id" => "ads-vid-3-title", //Required

    "display_checkbox_id" => "toggle_checkbox_id",
    
	"placeholder" => __( "Interesting for you", "citybook" ),
	
	"desc" => __( "Leave blank to disable title.", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-vid-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "citybook" ), //Required

    "id" => "ads-vid-3-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-vid-config",

    "type" => "checkbox",

    "name" => __("Display Ads", "citybook"),

    "id" => array("mov-ad-3", "tv-ad-3", "ep-ad-3"),

    "options" => array( __( "Movies", "citybook" ), __( "TV-Series", "citybook" ), __( "Episodes", "citybook" )), 

),

array(
	"under_section" => "ads-vid-config",
	"type" => "small_heading",
	"title" => __( "Location: Before Footer", "citybook" ),
),

array(

    "under_section" => "ads-vid-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "citybook" ), //Required

    "id" => "ads-vid-4-title", //Required

    "display_checkbox_id" => "toggle_checkbox_id",
    
	"placeholder" => __( "Interesting for you", "citybook" ),
	
	"desc" => __( "Leave blank to disable title.", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-vid-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "citybook" ), //Required

    "id" => "ads-vid-4-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-vid-config",

    "type" => "checkbox",

    "name" => __("Display Ads", "citybook"),

    "id" => array("mov-ad-4", "tv-ad-4", "ep-ad-4"),

    "options" => array( __( "Movies", "citybook" ), __( "TV-Series", "citybook" ), __( "Episodes", "citybook" )), 

),

// ADS - SINGLE PAGES



array(
	"under_section" => "ads-page-config",
	"type" => "small_heading",
	"title" => __( "Location: After Navigation", "citybook" ),
),

array(

    "under_section" => "ads-page-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "citybook" ), //Required

    "id" => "ads-page-1-title", //Required

    "display_checkbox_id" => "toggle_checkbox_id",
    
	"placeholder" => __("Interesting for you", "citybook"),
	
	"desc" => __("Leave blank to disable title.", "citybook"),

    "default" => ""

),


array(

    "under_section" => "ads-page-config", //Required

    "type" => "textarea", //Required

    "name" => __("Codes", "citybook"), //Required

    "id" => "ads-page-1-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __("Add HTML code. Responsive ads is recommended.", "citybook"),

    "default" => ""

),

array(

    "under_section" => "ads-page-config",

    "type" => "checkbox",

    "name" => __("Display Ads", "citybook"),

    "id" => array("article-archive-ad-1", "article-post-ad-1", "page-ad-1"),

    "options" => array( __( "Articles Archive", "citybook" ), __( "Article Post", "citybook" ), __( "Single Pages", "citybook" ),), 

),


array(
	"under_section" => "ads-page-config",
	"type" => "small_heading",
	"title" => __( "Location: Before Contents", "citybook" ),
),


array(

    "under_section" => "ads-page-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "citybook" ), //Required

    "id" => "ads-page-2-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-page-config",

    "type" => "checkbox",

    "name" => __("Display Ads", "citybook"),

    "id" => array("article-ad-2", "page-ad-2"),

    "options" => array( __( "Article Post", "citybook" ), __( "Single Pages", "citybook" ),), 

),



array(
	"under_section" => "ads-page-config",
	"type" => "small_heading",
	"title" => __( "Location: After Contents", "citybook" ),
),

array(

    "under_section" => "ads-page-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "citybook" ), //Required

    "id" => "ads-page-3-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-page-config",

    "type" => "checkbox",

    "name" => __("Display Ads", "citybook"),

    "id" => array("article-ad-3", "page-ad-3"),

    "options" => array( __( "Article Post", "citybook" ), __( "Single Pages", "citybook" ),), 

),








array(
	"under_section" => "ads-page-config",
	"type" => "small_heading",
	"title" => __( "Location: Above Comments", "citybook" ),
),

array(

    "under_section" => "ads-page-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "citybook" ), //Required

    "id" => "ads-page-4-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-page-config",

    "type" => "checkbox",

    "name" => __("Display Ads", "citybook"),

    "id" => array("article-ad-4", "page-ad-4"),

    "options" => array(__( "Article Post", "citybook" ), __( "Single Pages", "citybook" ),), 

),




















array(
	"under_section" => "ads-page-config",
	"type" => "small_heading",
	"title" => __( "Location: Before Footer", "citybook" ),
),

array(

    "under_section" => "ads-page-config", //Required

    "type" => "text", //Required

    "name" => __( "Title", "citybook" ), //Required

    "id" => "ads-page-5-title", //Required

    "display_checkbox_id" => "toggle_checkbox_id",
    
	"placeholder" => __( "Interesting for you", "citybook" ),
	
	"desc" => __( "Leave blank to disable title.", "citybook" ),

    "default" => ""

),


array(

    "under_section" => "ads-page-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Codes", "citybook" ), //Required

    "id" => "ads-page-5-code", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add HTML code. Responsive ads is recommended.", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "ads-page-config",

    "type" => "checkbox",

    "name" => __("Display Ads", "citybook"),

    "id" => array("article-archive-ad-5", "article-post-ad-5", "page-ad-5"),

    "options" => array(__( "Articles Archive", "citybook" ), __( "Article Post", "citybook" ), __( "Single Pages", "citybook" ),), 

),


## DEVELOPER AREA 

// Code Integrations


array(

    "under_section" => "dev-config", //Required

    "type" => "textarea", //Required

    "name" => __( "Extra integration code", "citybook" ), //Required

    "id" => "html_integration", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Make your HTML integration with the theme code.", "citybook" ),

    "default" => ""

),

array(

    "under_section" => "dev-config",

    "type" => "checkbox",

    "name" => __("Custom CSS","citybook"),

    "id" => array("activate_css"),

    "options" =>array( __("Enable","citybook"), ), 

	"desc" => __("Enable custom CSS codes", "citybook"),

    "default" => array("not")),

array(

    "under_section" => "dev-config", //Required

    "type" => "textarea", 

    "name" => __( "CSS Codes", "citybook" ), //Required

    "id" => "code_css", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add only CSS code without &lt;style&gt;&lt;/style&gt;", "citybook" ),

),

array(

    "under_section" => "dev-config",

    "type" => "checkbox",

    "name" => __("Custom Javascript","citybook"),

    "id" => array("activate_js"),

    "options" =>array( __("Enable","citybook"), ), 

	"desc" => __("Enable custom Java Script code", "citybook"),

    "default" => array("not")

),

array(

    "under_section" => "dev-config", //Required

    "type" => "textarea", 

    "name" => __( "Java Script Codes", "citybook" ), //Required

    "id" => "code_js", //Required

    "display_checkbox_id" => "toggle_checkbox_id",

    "desc" => __( "Add only Javascript codes without &lt;script&gt;&lt;/script&gt;", "citybook" ),

),


// Minify HTML
array(
    "under_section" => "minify-config",
    "type" => "radio",
    "name" => __("Minify HTML","citybook"),
    "id" => "minify_html_active",
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array(
		"yes" => __('Enable','citybook'),
		"no" => __('Disable','citybook'),
	),
    "desc" => __('Enable or disable Minify HTML','citybook'),
    "default" => "no"
),

array(
    "under_section" => "minify-config",
    "type" => "radio",
    "name" => __("Code comments","citybook"),
    "id" => "minify_html_comments",
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array(
		"yes" => __('Yes','citybook'),
		"no" => __('No','citybook'),
	),
    "desc" => __('Remove HTML, JavaScript and CSS comments, this option is typically safe to set to (Yes)','citybook'),
    "default" => "yes"
),


array(
    "under_section" => "minify-config",
    "type" => "radio",
    "name" => __("HTML5 void elements","citybook"),
    "id" => "minify_html_xhtml",
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array(
		"yes" => __('Yes','citybook'),
		"no" => __('No','citybook'),
	),
    "desc" => __('Remove XHTML closing tags from HTML5 void elements','citybook'),
    "default" => "no"
),

array(
	// minify_html_scheme
    "under_section" => "minify-config",
    "type" => "radio",
    "name" => __("Schemes (HTTP: and HTTPS:)","citybook"),
    "id" => "minify_html_scheme",
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array(
		"yes" => __('Yes','citybook'),
		"no" => __('No','citybook'),
	),
    "desc" => __('Remove schemes (HTTP: and HTTPS:) from all URLs','citybook'),
    "default" => "no"
),


array(
    "under_section" => "minify-config",
    "type" => "radio",
    "name" => __("Relative domain","citybook"),
    "id" => "minify_html_relative",
    "display_checkbox_id" => "toggle_checkbox_id",
    "options" => array(
		"yes" => __('Yes','citybook'),
		"no" => __('No','citybook'),
	),
    "desc" => __('Remove relative domain from internal URLs','citybook'),
    "default" => "no"
),


## SEO

// Basic Config
array (

	"under_section" => "seo-config",
	"type" => "tips",
	"text" => __( "Disable Basic SEO if you're using any other SEO plugin. That way the theme's SEO features won't conflict with the other seo plugin. Activate it only if you dont have any other seo plugin installed.", "citybook" ),
),

array(
    "under_section" => "seo-config",
    "type" => "checkbox",
    "name" => __("Basic SEO", "citybook"),
    "id" => array("basic-seo"),
    "options" => array( __("Activate","citybook"), ), 
    "default" => array("checked")
),	

array(

    "under_section" => "seo-config", //Required
    "type" => "text", //Required
    "name" => __( "Site Title", "citybook" ), //Required
    "id" => "blogname", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
),
array(

    "under_section" => "seo-config", //Required
    "type" => "text", //Required
    "name" => __( "Site Tagline", "citybook" ), //Required
    "id" => "blogdescription", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "desc" => __( "In a few words, explain what this site is about.", "citybook" ),
),
array (
	"under_section" => "seo-config",
	"type" => "small_heading",
	"title" => __( "Site Information", "citybook" ),
),

array(

    "under_section" => "seo-config", //Required
    "type" => "text", //Required
    "name" => __( "Main Keywords", "citybook" ), //Required
    "id" => "seo-main-keywords", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "desc" => __( "Add main keywords. Separated by comma. Ex: key1, key2, key3", "citybook" ),
),

array(

    "under_section" => "seo-config", //Required
    "type" => "textarea", //Required
    "name" => __( "Meta Description", "citybook" ), //Required
    "id" => "seo-meta-description", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "desc" => __( "Add meta description.", "citybook" ),
),


// Site Verification


array(

    "under_section" => "verify-config", //Required
    "type" => "text", //Required
    "name" => __( "Google Search Console", "citybook" ), //Required
    "id" => "veri_google", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "desc" => __( "Get your verification code <a href='https://www.google.com/webmasters/verification/' target='_blank'>here</a>", "citybook" ),
	"placeholder" =>__("a7lfzzbajVeMUroaLoypnLWlo-2v7Cj9ijd-Binzqws","citybook"),
),

array(

    "under_section" => "verify-config", //Required
    "type" => "text", //Required
    "name" => __( "Alexa Verification ID", "citybook" ), //Required
    "id" => "veri_alexa", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "desc" => __( "Get your verification code <a href='https://www.alexa.com/siteowners/claim/' target='_blank'>here</a>", "citybook" ),
	"placeholder" =>__("jwbHtpHudFeOXI1-WKw5tNyCpFQ","citybook"),
),


array(

    "under_section" => "verify-config", //Required
    "type" => "text", //Required
    "name" => __( "Bing Webmaster Tools", "citybook" ), //Required
    "id" => "veri_bing", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "desc" => __( "Get your verification code <a href='https://www.bing.com/toolbox/webmaster/' target='_blank'>here</a>", "citybook" ),
	"placeholder" =>__("CF37B212DE4857D8DCB5756C26CCC732","citybook"),
),



array(

    "under_section" => "verify-config", //Required
    "type" => "text", //Required
    "name" => __( "Yandex Webmaster Tools", "citybook" ), //Required
    "id" => "veri_yandex", //Required
    "display_checkbox_id" => "toggle_checkbox_id",
    "desc" => __( "Get your verification code <a href='https://yandex.com/support/webmaster/service/rights.xml#how-to' target='_blank'>here</a>", "citybook" ),
	"placeholder" =>__("d1e2bff8b0cbaf00","citybook"),
),





    );
?>