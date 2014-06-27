<?php 
	session_start()
	;
	echo '
	<!doctype html>
	<html lang="en">
	<head><title></title>
		<meta charset="UTF-8"> '
		;
		if ( !isset ($_SESSION["refresh"] ) ) 
		{
			echo '<meta http-equiv="refresh" content="7">';
		} else {
		}
		echo '
		<link rel="stylesheet" type="text/css" href="style.css" />
	</head>
		<body>
				<div id="recent-additions-content">
					<ul>
						<li>
							<div class="thumbnail">
								<img src="thumbnails/1.jpg">
							</div>
							<div class="info">
								<div class="link">
									<a href="http://www.vladstudio.com/wallpaper/?rainbow_butterfly">
									Rainbow Butterfly Rainbow Butterfly Rainbow Butterfly Rainbow Butterfly
									</a>
								</div>
								<div class="link-desc">
									<span class="attribute">
										Date: 12 March 2014
										&nbsp;&nbsp;
										Type: Wallpaper
										&nbsp;&nbsp;
										Category: Abstract art
									</span>
								</div>
							</div>
							<div class="clear"></div>
						</li>
						<li>
							<div class="thumbnail">
								<img src="thumbnails/2.jpg">
							</div>
							<div class="info">
								<div class="link">
								<a href="http://www.vladstudio.com/wallpaper/?teddybear_mac">
								Teddy Bear and MacBook Teddy Bear and MacBook Teddy Bear and MacBook
								</a>
								</div>
								<div class="link-desc">
									<span class="attribute">
										Date: 27 April 2014
										&nbsp;&nbsp;
										Type: Wallpaper
										&nbsp;&nbsp;
										Category: Photos
									</span>
								</div>
							</div>
							<div class="clear"></div>
						</li>
						<li>
							<div class="thumbnail">
								<img src="thumbnails/3.jpg">
							</div>
							<div class="info">
								<div class="link">
									<a href="http://www.vladstudio.com/wallpaper/?knight_lady">
									The Knight and the Lady The Knight and the Lady The Knight and the Lady The Knight and the Lady
								
									</a>
								</div>
								<div class="link-desc">
									<span class="attribute">
										Date: 28 April 2014 
										&nbsp;&nbsp;
										Type: Wallpaper
										&nbsp;&nbsp;
										Category: Illustrations
									</span>
								</div>
							</div>
							<div class="clear"></div>
						</li>
						<li>
							<div class="thumbnail">
								<img src="thumbnails/4.jpg">
							</div>
							<div class="info">
								<div class="link">
									<a href="http://www.vladstudio.com/wallpaper/?family_of_colors">
									The Family of Colours The Family of Colours The Family of Colours The Family of Colours
									</a>
								</div>
								<div class="link-desc">
									<span class="attribute">
										Date: 10 April 2014 
										&nbsp;&nbsp;
										Type: Wallpaper
										&nbsp;&nbsp;
										Category: Creatures
									</span>
								</div>
							</div>
							<div class="clear"></div>
						</li>
						<li>
							<div class="thumbnail">
								<img src="thumbnails/5.jpg">
							</div>
							<div class="info">
								<div class="link">
									<a href="http://www.vladstudio.com/wallpaper/?space_travel">
									Space Travel Space Travel Space Travel Space Travel Space Travel Space Travel Space Travel
									</a>
								</div>
								<div class="link-desc">
									<span class="attribute">
										Date: 27 April 2014 
										&nbsp;&nbsp;
										Type: Wallpaper
										&nbsp;&nbsp;
										Category: Abstract art
									</span>
								</div>
							</div>
							<div class="clear"></div>
						</li>
						<li>
							<div class="thumbnail">
								<img src="thumbnails/6.jpg">
							</div>
							<div class="info">
								<div class="link">
								<a href="http://www.vladstudio.com/wallpaper/?traveling_tree">
								The Traveling Tree The Traveling Tree The Traveling Tree The Traveling Tree The Traveling Tree
								</a>
								</div>
								<div class="link-desc">
									<span class="attribute">
										Date: 03 February 2014 
										&nbsp;&nbsp;
										Type: Wallpaper
										&nbsp;&nbsp;
										Category: Creatures
									</span>
								</div>
							</div>
							<div class="clear"></div>
						</li>
					</ul>
				</div><!--End of recent-additions-content-->
				<script src="../../javascripts/jquery-1.11.0.min.js"></script>
				<script src="../../javascripts/jcarousellite_1.0.1c4.js" type="text/javascript"></script>
				<script type="text/javascript"> 
					$(function() { 
					$("#recent-additions-content")
						.jCarouselLite({
							vertical: true,
							hoverPause: true,
							visible: 1,
							auto: 10000,
							speed: 2000
						});
					}); 
				</script>
		</body>
	</html>'
	;
	$_SESSION["refresh"] = true;
	;
?>
