<?php
	$host = isset($_GET['sch']) ? htmlentities($_GET['sch']): "";
	$sch_name_short = $host;
	switch ($sch_name_short) 
	{
		case 'fijai-shs':{
			$motto = "ad astra per aspera";
			$color = "#965292";
			$background = "rgb(128,57,123)";
		}break;
		case 'sekco':{
			$motto = "lux et veritas";
			$color = "#007de7";
			$background = "#006ecd";
		}break;
		case 'knust-jhs':{
			$motto = "desire determination discipline ";
			$color = "#7e67b8";
			$background = "#6b54a4";
		}break;
		default:{
			$motto = "";
			$color = "";
			$background = "";
			echo "<h1><u>Watermark Generation:</u></h1>
			<h2>You must select a school first.</h2>";
		}
	}
	$output = "";
	$output.= "
	<html lang=\"en\">
	<head><title>".strtoupper($host)."</title>"; 
		require_once ("fonts/lobster/lobster.dcss.php"); 
		echo "
		<style type='text/css'>
			#Background{
				z-index:-1; position:fixed; top:0%; left:-100%; height:180%; width:240%;
				font-family: 'Lobster', cursive; font-size:24px; text-align:justify;
				color:".$color."; 
				background:".$background.";
				-webkit-transform:rotate(-45deg);
				-moz-transform:rotate(-45deg);
				-ms-transform:rotate(-45deg);
				-o-transform:rotate(-45deg);
				transform:rotate(-45deg);
			}
		</style>
		";
		$output.= "
	</head>
	<body>
		<span id='Background'></span>
		<script src=\"js/jquery-1.11.0.min.js\"></script>
		<!--script src=\"js/Visibility-API.js\"></script-->
		<script type='text/javascript'>
			function FillWatermark(jQuery) {
			var text='';
			for(var i=0;i<940;i++) text+='" . strtoupper($motto) . " " . "';
			var cached = text;
			$('#Background').html(cached);
			//exit;
			}$(document).ready(FillWatermark);
		</script>
	</body>
	</html>";
	echo $output = isset($output) ? $output : "";
?>
