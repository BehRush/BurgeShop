<?php

define('MAIN_ADDRESS',"192.168.2.100/Web/BurgeATS/CMF/Web");

//if you have different domains for your different languages
//define('MAIN_ADDRESS_EN',"your english webiste");

define('ENVIRONMENT', 'development');
//define('ENVIRONMENT', 'production');

//languages
//the default language should be the first index
function LANGUAGES()
{
	return array(
		"fa"=>"فارسی"
		,"en"=>"English"
	);
}

//functions used for each language to convert timestamp to datetime 
function LANGUAGE_DATETIME_FUNCTIONS()
{
	return array(
		"fa"=>"jdate"
		,"en"=>"date"
	);
}

define("ADMIN_URL_FOLDER","admin");

define("DATE_FUNCTION","jdate");
//define("DATE_FUNCTION","date");


define("DEFAULT_TIMEZONE","Asia/Tehran");
date_default_timezone_set(DEFAULT_TIMEZONE);


//session expiration for admin users in seconds
define("USER_SESSION_EXPIRATION",30*60);


////////////////////////////////////////////////
////////////////////////////////////////////////
////////////////////////////////////////////////

//http server
define ('HOME_URL' ,"http://".MAIN_ADDRESS);
//https server
define ('HOME_SURL',"http://".MAIN_ADDRESS);

define ('URL_LANGUAGE_PATTERN',"{language}");

define ('HOME_URL_LANG'  ,HOME_URL ."/".URL_LANGUAGE_PATTERN);
define ('HOME_SURL_LANG' ,HOME_SURL."/".URL_LANGUAGE_PATTERN);

define('ADMIN_URL' ,HOME_URL ."/".ADMIN_URL_FOLDER);
define('ADMIN_SURL',HOME_SURL."/".ADMIN_URL_FOLDER);

define ('ADMIN_URL_LANG'  ,HOME_URL_LANG ."/".ADMIN_URL_FOLDER);
define ('ADMIN_SURL_LANG' ,HOME_SURL_LANG."/".ADMIN_URL_FOLDER);

define ('HOME_DIR',getcwd());

define ('LOG_DIR',HOME_DIR."/application/logs/burge_cmf");
define ('LOGS_PREFIX','bcmf-log-');

define ('COOKIE_PREFIX','asfamqw78a6asdfzxasd');
define ('SESSION_VARS_PREFIX','jdsa834SN3');

define ('VISITOR_TRACKING_COOKIE_NAME',"sMD239wfsfdaQQsd9f7q");
define ('TRACKING_ENCRYPTION_KEY',		'YW32sde23rAeedXW');
define ('TRACKING_IV',						'182090376ebca98w');

define ('IMAGES_URL', HOME_URL."/images");
define ('IMAGES_DIR', HOME_DIR."/images");

define ('CAPTCHA_DIR', IMAGES_DIR."/captcha");
define ('CAPTCHA_URL', IMAGES_URL."/captcha");

define ('POST_GALLERY_DIR', IMAGES_DIR."/gallery");
define ('POST_GALLERY_URL', IMAGES_URL."/gallery");

define ('STYLES_URL', HOME_URL."/styles");

define ('SCRIPTS_URL', HOME_URL."/scripts");
define ('SCRIPTS_DIR', HOME_DIR."/scripts");

define ('UPLOAD_DIR', HOME_DIR."/upload");
define ('UPLOAD_URL', HOME_URL."/upload");

define ('CATEGORY_CACHE_DIR', HOME_DIR."/application/cache/category");

define ('MESSAGE_ATTACHMENT_DIR', UPLOAD_DIR."/message");
define ('MESSAGE_ATTACHMENT_URL', UPLOAD_URL."/message");

//settings for BurgeATS
define ('CUSTOMER_SESSION_EXPIRATION',60*60*3);
