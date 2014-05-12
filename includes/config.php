<?php
	$host = $_SERVER['SERVER_NAME'];

	switch ( $host ) 
	{
	case 'fijai-shs.local': {
	$school_gender = "mixed";
	$slogan = "young souls";
	$motto = "ad astra per aspera";
	$sch_name_short = 'fijai-shs';
	$sch_name_long = "fijai senior high school";
	$school_mobile = "050 . 679 . 7760";
	$twitter = "https://twitter.com/fijai-shs";
	$gplus = "https://www.google.com/+fijai-shs";
	$facebook = "https://www.facebook.com/fijai-shs";
	$youtube = "https://www.youtube.com/fijai-shs";
	}break;

	case 'sekco.local': {
	$school_gender = "mixed";
	$slogan = "yensuro";
	$motto = "lux et veritas";
	$country = "ghana";
	$zip_code = "( +233 )";
	$sch_name_short = 'sekco';
	$sch_name_long = "sekondi college";
	$school_mobile = "020 . 299 . 5877";
	$school_status = "Reopened"; // Vacated
	$school_status_date = "as @ May 5 2014";
	$twitter = "https://twitter.com/Sekcoschool";
	$google = "https://plus.google.com/114807988094759457766/";
	$facebook = "https://www.facebook.com/sekcoschool";
	$youtube = "https://www.youtube.com/sekcoschool";
	}break;

	case 'knust-jhs.local': {
	$school_gender = "mixed";
	$slogan = "oseikrom";
	$motto = "desire determination discipline ";
	$logo90 = $host.'_logo90.png';
	$sch_name_short = 'knust-jhs';
	$sch_name_long = "KNUST junior high school";
	$school_mobile = "024 . 979 . 3045";
	$twitter = "https://twitter.com/knust-jhs";
	$google = "https://www.google.com/+knust-jhs";
	$facebook = "https://www.facebook.com/knust-jhs";
	$youtube = "https://www.youtube.com/knust-jhs";
	}break;
	
	}

	switch ( $school_gender ) 
	{
	case 'female': { 
	$assoc_plural = 'Alumnae'; 
	$assoc_singular = 'Alumna';
	}break;

	default: { 
	$assoc_plural = 'Alumni'; 
	$assoc_singular = 'Alumnus';
	}break;
	}

?>
