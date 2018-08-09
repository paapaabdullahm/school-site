<?php

	if (!isset ($_SESSION["modified_css"]))
	{
		//check if css generator file had change
		$_SESSION["modified_css"] = filemtime(CSS_PATH.DS."generator.php");
	} else {
		$modified_css = $_SESSION["modified_css"];
	}

	require_once (CSS_PATH.DS."generator.php");

	//header
	$template->assign('page_title', strtoupper($host));
	$template->assign('raleway_font_path', FONT_PATH.DS.'raleway'.DS.'raleway.css');
	$template->assign('semantic_css_file', CSS_PATH.DS.'semantic.css');
	$template->assign('css_static_file', 	 CSS_PATH.DS.$config['css_static_file']);

	// body
	$template->assign('sch_name_long', ucwords($config['sch_name_long']));
	$template->assign('sch_name_short', ucfirst($config['sch_name_short']));
	$template->assign('twitter_link', $config['twitter']);
	$template->assign('google_link', $config['google']);
	$template->assign('facebook_link', $config['facebook']);
	$template->assign('assoc_plural', $config['assoc_plural']);
	$template->assign('sch_status', $config['sch_status']);
	$template->assign('sch_status_date', $config['sch_status_date']);
	$template->assign('recent_additions_source', IFRAME_PATH.DS.'recent_additions'.DS.'index.php');

	// menu links
	$template->assign('about', 				substr(sha1($config['salt'].'about'),-24));
	$template->assign('admissions', 			substr(sha1($config['salt'].'admissions'),-24));
	$template->assign('frequently_asked', 	substr(sha1($config['salt'].'frequently_asked'),-24));
	$template->assign('school_gallery', 		substr(sha1($config['salt'].'school_gallery'),-24));
	$template->assign('alumni_association',	substr(sha1($config['salt'].'alumni_association'),-24));
	$template->assign('clubs_and_societies', 	substr(sha1($config['salt'].'clubs_and_societies'),-24));
	$template->assign('online_store', 		substr(sha1($config['salt'].'online_store'),-24));


	$template->assign('record_service', 		substr(sha1($config['salt'].'record_service'),-24));
	$template->assign('elearning_service', 	substr(sha1($config['salt'].'elearning_service'),-24));
	$template->assign('staff_inet_service', 	substr(sha1($config['salt'].'staff_inet_service'),-24));
	$template->assign('management_service', 	substr(sha1($config['salt'].'management_service'),-24));

	// footer
	$template->assign('jquery_file',        JS_PATH.DS.'jquery-1.11.0.min.js');
	$template->assign('semantic_js_file',   JS_PATH.DS.'semantic.js');
	$template->assign('angularjs_file',     JS_PATH.DS.'angular.min.js');
