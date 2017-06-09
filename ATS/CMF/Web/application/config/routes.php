<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	http://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There area two reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router what URI segments to use if those provided
| in the URL cannot be matched to a valid route.
|
*/
$route['default_controller'] = "CE_Home";

if(ENVIRONMENT==='development')
{
	$route[ADMIN_URL_FOLDER.'/install']		="AE_Setup/install";
	$route[ADMIN_URL_FOLDER.'/uninstall']	="AE_Setup/uninstall";
}

$route[ADMIN_URL_FOLDER]							="AE_Dashboard";
$route[ADMIN_URL_FOLDER."/dashboard"]			="AE_Dashboard";
$route[ADMIN_URL_FOLDER."/user"]					="AE_Users/index/0";
$route[ADMIN_URL_FOLDER."/user/(\d+)"]			="AE_Users/index/$1";
$route[ADMIN_URL_FOLDER."/user/search/(.*)"]	="AE_Users/search/$1";
$route[ADMIN_URL_FOLDER."/login"]				="AE_Login";
$route[ADMIN_URL_FOLDER."/change_pass"]		="AE_Change_Pass";
$route[ADMIN_URL_FOLDER."/logout"]				="AE_Logout";
$route[ADMIN_URL_FOLDER."/access"]				="AE_Access/index/0";
$route[ADMIN_URL_FOLDER."/access/(\-?\d+)"]	="AE_Access/index/$1";
$route[ADMIN_URL_FOLDER."/module"]				="AE_Module";
$route[ADMIN_URL_FOLDER."/hit_counter"]		="AE_Hit_Counter";
$route[ADMIN_URL_FOLDER."/log"]					="AE_Log";
$route[ADMIN_URL_FOLDER."/constant"]			="AE_Constant";

$route[ADMIN_URL_FOLDER."/post"]					="AE_Post";
$route[ADMIN_URL_FOLDER."/post/(\d+)"]			="AE_Post/details/$1";
$route["post-(\d+)/([^\/]+)/?"]					="CE_Post/index/$1/$2";
$route["post-(\d+)/([^\/]+)/([^\/]*)/?"]		="CE_Post/index/$1/$2/$3";

$route[ADMIN_URL_FOLDER."/file"]					="AE_File";
$route[ADMIN_URL_FOLDER."/file/inline"]		="AE_File/inline";
$route[ADMIN_URL_FOLDER."/file/conf.json"]	="AE_File/conf";
$route[ADMIN_URL_FOLDER."/file/([^\/]+)"]		="AE_File/action/$1";

$route[ADMIN_URL_FOLDER."/category"]			="AE_Category";
$route[ADMIN_URL_FOLDER."/category/organize"]="AE_Category/organize";
$route[ADMIN_URL_FOLDER."/category/(\d+)"]	="AE_Category/details/$1";
$route["category-(\d+)/([^\/]+)/?"]							="CE_Category/index/$1/$2";
$route["category-(\d+)/([^\/]+)/([^\/]*)/?"]				="CE_Category/index/$1/$2/$3";
$route["category-(\d+)/([^\/]+)/([^\/]*)/(\d+)"]		="CE_Category/index/$1/$2/$3/$4";

$route[ADMIN_URL_FOLDER."/contact_us"]				="AE_Contact_Us";
$route[ADMIN_URL_FOLDER."/contact_us/send_new"]	="AE_Contact_Us/send_new";
$route[ADMIN_URL_FOLDER."/contact_us/(\d+)"]		="AE_Contact_Us/details/$1";
//$route["contact_us"]										="CE_Contact_Us";

$route["retry"]="retry";
$route["watermark"]="CE_Watermark";

$route[ADMIN_URL_FOLDER."/customer"]							= "AE_Customer";
$route[ADMIN_URL_FOLDER."/customer/search/(.*)"]			= "AE_Customer/search/$1";
$route[ADMIN_URL_FOLDER."/customer/details/(\d+)"]			= "AE_Customer/customer_details/$1";
$route[ADMIN_URL_FOLDER."/customer/details/(\d+)/(\d+)"] = "AE_Customer/customer_details/$1/$2";

$route[ADMIN_URL_FOLDER."/task"]									= "AE_Task";
$route[ADMIN_URL_FOLDER."/task/details/(\d+)"]				= "AE_Task/task_details/$1";
$route[ADMIN_URL_FOLDER."/task_exec"]							= "AE_Task_Exec";
$route[ADMIN_URL_FOLDER."/task_exec/get_file/(\d+)/(.+)"]= "AE_Task_Exec/get_file/$1/$2";

$route['dashboard']				= "CE_Dashboard";
$route['login']					= "CE_Login/login";
$route['login/yahoo']			= "CE_Login/yahoo";
$route['login/facebook']		= "CE_Login/facebook";
$route['login/google']			= "CE_Login/google";
$route['logout']					= "CE_Login/logout";
$route['signup']					= "CE_Login/signup";
$route['forgotten_password']	= "CE_Login/forgotten_password";

$route[ADMIN_URL_FOLDER."/message"]										= "AE_Message/index";
$route[ADMIN_URL_FOLDER."/message/new"]								= "AE_Message/new_message";
$route[ADMIN_URL_FOLDER."/message/(\d+)"]								= "AE_Message/message/$1";
$route[ADMIN_URL_FOLDER."/message_access(/(\d+))?"]				= "AE_Message/access/$2";
$route[ADMIN_URL_FOLDER."/message/search_departments/(.*)"]		= "AE_Message/search_departments/$1";
$route["contact_us"]															= "CE_Message/c2d";
$route['message']																= "CE_Message/message";
$route['message/(\d+)']														= "CE_Message/details/$1";
$route['message/send/(\d+)']												= "CE_Message/c2c/$1";

$route['(((:any)/)*:any)']="CE_Home/redirect";

/* End of file routes.php */
/* Location: ./application/config/routes.php */