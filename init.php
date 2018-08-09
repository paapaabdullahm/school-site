<?php

// Site version 1.0
defined('SCHOOL_SITE') ? null : define('SCHOOL_SITE', 10);

// Database Constants
defined('DB_SERVER') ? null : define("DB_SERVER", getenv('DB_HOST'));
defined('DB_USER')   ? null : define("DB_USER", getenv('DB_USER'));
defined('DB_PASS')   ? null : define("DB_PASS", getenv('DB_PASSWORD'));
defined('DB_NAME')   ? null : define("DB_NAME", getenv('DB_DATABASE'));

//Get current working directory
defined('CWD') ? null : define('CWD', getcwd());

// Define site root
defined('SITE_ROOT') ? null : define('SITE_ROOT', 'https://'.$_SERVER['SERVER_NAME']);

// Define document root
defined('DOC_ROOT') ? null : define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT']);

// Define directory separator \ on win, / on unix or mac
defined('DS') ? null : define('DS', '/');

// Define Levels Up dir
defined('U1') ? null : define('U1', '..');
defined('U2') ? null : define('U2', '..'.DS.'..');
defined('U3') ? null : define('U3', '..'.DS.'..'.DS.'..');
defined('U4') ? null : define('U4', '..'.DS.'..'.DS.'..'.DS.'..');
defined('U5') ? null : define('U5', '..'.DS.'..'.DS.'..'.DS.'..'.DS.'..');

// Define the main directory structure paths
defined('ASSET_PATH') ? null : define('ASSET_PATH',	'assets');
defined('INC_PATH')   ? null : define('INC_PATH', 'includes');
defined('MOD_PATH')   ? null : define('MOD_PATH', 'modules');
defined('TPL_PATH')   ? null : define('TPL_PATH',	'templates');

// Define assets sub directory
defined('CACHE_PATH')   ? null : define('CACHE_PATH', ASSET_PATH.DS.'cache');
defined('LOG_PATH')     ? null : define('LOG_PATH', ASSET_PATH.DS.'logs');
defined('UPLOAD_PATH')  ? null : define('UPLOAD_PATH', ASSET_PATH.DS.'uploads');

// Define public sub directory
defined('IFRAME_PATH') ? null : define('IFRAME_PATH', TPL_PATH.DS.'iframes');
defined('CSS_PATH')    ? null : define('CSS_PATH', TPL_PATH.DS.'stylesheets');
defined('JS_PATH')     ? null : define('JS_PATH', TPL_PATH.DS.'javascripts');
defined('FONT_PATH')   ? null : define('FONT_PATH', TPL_PATH.DS.'fonts');
defined('IMG_PATH')    ? null : define('IMG_PATH', SITE_ROOT.DS.TPL_PATH.DS.'images');

// Define smarty directories
defined('SMARTY_PATH')  ? null : define('SMARTY_PATH', INC_PATH.DS.'smarty');
defined('CONFIG_PATH')  ? null : define('CONFIG_PATH', SMARTY_PATH.DS.'configs');
defined('COMPILE_PATH') ? null : define('COMPILE_PATH', ASSET_PATH.DS.'templates_c');

// load config file
require_once(INC_PATH.DS.'config.php');

// load basic functions
require_once(INC_PATH.DS.'functions.php');

// load core objects
require_once(INC_PATH.DS.'session.php');

/*
require_once(LIB_PATH.DS.'database.php');
require_once(LIB_PATH.DS.'database_object.php');
require_once(LIB_PATH.DS.'pagination.php');
require_once(LIB_PATH.DS."phpMailer".DS."class.phpmailer.php");
require_once(LIB_PATH.DS."phpMailer".DS."class.smtp.php");
require_once(LIB_PATH.DS."phpMailer".DS."language".DS."phpmailer.lang-en.php");

// load database-related classes
require_once(LIB_PATH.DS.'user.php');
require_once(LIB_PATH.DS.'photograph.php');
require_once(LIB_PATH.DS.'comment.php');
*/

if (!isset ($_SESSION["modified_css"])) {
    //check if css generator file had change
    $_SESSION["modified_css"] = filemtime(CSS_PATH.DS."generator.php");
} else {
    $modified_css = $_SESSION["modified_css"];
}

require_once (CSS_PATH.DS."generator.php");

// load Smarty engine
require_once(SMARTY_PATH.DS.'Smarty.class.php');
require_once(INC_PATH.DS.'template.php');

// home links
$about_link                 = substr(sha1($config['salt'].'about'),-24);
$admissions_link            = substr(sha1($config['salt'].'admissions'),-24);
$faq_link                   = substr(sha1($config['salt'].'faq'),-24);
$gallery_link               = substr(sha1($config['salt'].'gallery'),-24);
$alumni_link                = substr(sha1($config['salt'].'alumni'),-24);
$groups_link                = substr(sha1($config['salt'].'groups'),-24);
$record_service_link        = substr(sha1($config['salt'].'record_service'),-24);
$e_centre_link              = substr(sha1($config['salt'].'e_centre'),-24);
$inet_service_link          = substr(sha1($config['salt'].'inet_service'),-24);
$management_service_link    = substr(sha1($config['salt'].'management_service'),-24);
$online_store_link          = substr(sha1($config['salt'].'online_store'),-24);

// token
if (isset ($_GET['token']))
{
    switch ($_GET['token']) {
        case $about_link: 		        { $node = 'about'; }break;
        case $admissions_link: 		    { $node = 'admissions'; }break;
        case $faq_link: 		        { $node = 'faq'; }break;
        case $gallery_link: 		    { $node = 'gallery'; }break;
        case $alumni_link: 		        { $node = 'alumni'; }break;
        case $groups_link: 		        { $node = 'groups'; }break;
        case $record_service_link: 	    { $node = 'record_service'; }break;
        case $e_centre_link: 		    { $node = 'e_centre'; }break;
        case $inet_service_link: 	    { $node = 'inet_service'; }break;
        case $management_service_link: 	{ $node = 'management_service'; }break;
        case $online_store_link: 	    { $node = 'online_store'; }break;
    }
} else {
    $_GET['token'] = '';
    $node = 'home';
}
$page_title = ($node == 'about')
    ? ucwords('about'." ".$config['sch_name_short'])
    : ucwords(implode(" ", explode("_",$node)));

//header assignments
$template->assign('page_title', 		        $page_title);
$template->assign('raleway_font_path', 		FONT_PATH.DS.'raleway'.DS.'raleway.css');
$template->assign('fontawesome_path', 		FONT_PATH.DS.'fontawesome'.DS.'css'.DS.'font-awesome.min.css');
$template->assign('semantic_css_file', 		CSS_PATH.DS.'semantic.css');
$template->assign('pure_ui_css_file', 		CSS_PATH.DS.'pure-ui.css');
$template->assign('pure_side_menu_css_file', 	CSS_PATH.DS.'pure-side-menu.css');
$template->assign('j_rating_css_file', 		CSS_PATH.DS.'jRating.jquery.css');
$template->assign('rating_css_file', 		    CSS_PATH.DS.'rating.css');
$template->assign('css_static_file', 	 	    CSS_PATH.DS.$config['css_static_file']);

// body assignments
$template->assign('sch_name_long',            ucwords($config['sch_name_long']));
$template->assign('sch_name_short',           ucfirst($config['sch_name_short']));
$template->assign('twitter_link',             $config['twitter']);
$template->assign('google_link',              $config['google']);
$template->assign('facebook_link',            $config['facebook']);
$template->assign('assoc_plural',             $config['assoc_plural']);
$template->assign('sch_status',               $config['sch_status']);
$template->assign('sch_status_date',          $config['sch_status_date']);
$template->assign('recent_additions_source',  IFRAME_PATH.DS.'recent_additions'.DS.'index.php');

// anchor href assignments for home.tpl
$template->assign('home',                   SITE_ROOT);
$template->assign('about',                  $about_link);
$template->assign('admissions',             $admissions_link);
$template->assign('faq',                    $faq_link);
$template->assign('gallery',                $gallery_link);
$template->assign('alumni',                 $alumni_link);
$template->assign('groups',                 $groups_link);
$template->assign('record_service',         $record_service_link);
$template->assign('e_centre',               $e_centre_link);
$template->assign('inet_service',           $inet_service_link);
$template->assign('management_service',     $management_service_link);
$template->assign('online_store',           $online_store_link);

// footer assignments
$template->assign('jquery_file',                JS_PATH.DS.'jquery-1.11.0.min.js');
$template->assign('jquery_scroll_to_file',      JS_PATH.DS.'jquery.scrollTo.min.js');
$template->assign('jquery_local_scroll_file',   JS_PATH.DS.'jquery.localScroll.js');
$template->assign('semantic_js_file',           JS_PATH.DS.'semantic.js');
$template->assign('angularjs_file',             JS_PATH.DS.'angular.min.js');
$template->assign('pure_side_menu_js_file',     JS_PATH.DS.'pure-side-menu.js');
$template->assign('j_rating_js_file',           JS_PATH.DS.'jRating.jquery.js');
$template->assign('rating_js_file',             JS_PATH.DS.'rating.js');
