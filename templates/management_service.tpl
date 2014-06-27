<!doctype html>
<html lang="en" ng-app>
<head>
	{include file='header.inc.tpl'}
	<link rel="stylesheet" href="{$pure_ui_css_file}" />
	<link rel="stylesheet" type="text/css" href="{$pure_side_menu_css_file}" />
</head>
<body id="body">
	{include file='bg.inc.tpl'}
	<div id="layout">
   
   <div id="topnav">
   	 <h2>{$page_title}</h2>
   	 <a class="pure-home-heading" href="{$home}" title="Back to Home"><i class="fa fa-home"></i></a>
		 <div class="jRatingLabel">Rate this <i class="fa fa-caret-right"></i></div>
		 <div class="basic jRatingWrapper" data-average="1" data-id="1"></div>
   </div>
   <print title="Print this"><i class="fa fa-print"></i></print>
    
    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu pure-menu-open">
            <ul>
                 <li class="menu-item-divided">
                		<a href="#link-item1">link item1</a>
                </li>
                <li class="menu-item-divided">
                		<a href="#link-item2">link item2</a>
                </li>
                <li class="menu-item-divided">
                		<a href="#link-item3">link item3</a>
                </li>
                 <li class="menu-item-divided">
                		<a href="#link-item4">link item4</a>
                </li>
                <li class="bottom-menu-item-divided">
                		<a href="#link-item5">link item5</a>
                </li>
            </ul>
        </div>
    </div>

    <div id="main">
      <div class="content">
      		<div id="link-item1" class="section">
            <h2 class="content-subhead">link item1</h2>
            <p>Paragraph 1</p>
            <p>Paragraph 2</p>
        	</div>
        	<div id="link-item2" class="section">
            <h2 class="content-subhead">link item2</h2>
            <p>Paragraph 1</p>
            <p>Paragraph 2</p>
        	</div>
        	<div id="link-item3" class="section">
            <h2 class="content-subhead">link item3</h2>
            <p>Paragraph 1</p>
            <p>Paragraph 2</p>
        	</div>
        	<div id="link-item4" class="section">
            <h2 class="content-subhead">link item4</h2>
            <p>Paragraph 1</p>
            <p>Paragraph 2</p>
        	</div>
        	<div id="link-item5" class="section">
            <h2 class="content-subhead">link item5</h2>
            <p>Paragraph 1</p>
            <p>Paragraph 2</p>
        	</div>
      </div>
		</div>
	</div>
	<center>
  {include file='footer.inc.tpl'} 
  </center>
  <script>
  	$(function() {
			$("#menu .pure-menu a").click(function(){
					$(".pure-menu-selected").removeClass("pure-menu-selected");
					$(this).addClass("pure-menu-selected");
			});
		});
  </script>
  
  <script type="text/javascript">
		$(document).ready(function(){
		  // simple jRating call
		  $(".basic").jRating({
		  	step:true,
		    length : 5,
		    onSuccess : function(){
		       alert('Thank you : your rating has been submitted :)');
		     }
		  });
		});
	</script>
</body>
</html>
