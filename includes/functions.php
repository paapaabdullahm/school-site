<?php
	function get_correct_m_time($filePath)
	{

		$time = filemtime($filePath);

		$isDST = (date('I', $time) == 1);
		$systemDST = (date('I') == 1);

		$adjustment = 0;

		if ($isDST == false && $systemDST == true)
		    $adjustment = 3600;
	   
		else if ($isDST == true && $systemDST == false)
		    $adjustment = -3600;

		else
		    $adjustment = 0;

		return ($time + $adjustment);
	} 
	
	function redirect_to($location = NULL)
	{
		if ($location != NULL)
		{
			header("Location: {$location}");
			exit;
		}
	}
?>
