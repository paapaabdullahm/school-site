<?php /* Smarty version Smarty-3.1.18, created on 2014-06-10 21:00:04
         compiled from "templates/about.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1498068115538f5ba8687a04-08978552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f62a2b3e8eaad4f869d1bdb0a22ac2d59fb01f12' => 
    array (
      0 => 'templates/about.tpl',
      1 => 1402426614,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1498068115538f5ba8687a04-08978552',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538f5ba86d0439_71536458',
  'variables' => 
  array (
    'pure_ui_css_file' => 0,
    'pure_side_menu_css_file' => 0,
    'page_title' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538f5ba86d0439_71536458')) {function content_538f5ba86d0439_71536458($_smarty_tpl) {?><!doctype html>
<html lang="en" ng-app>
<head>
	<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['pure_ui_css_file']->value;?>
" />
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['pure_side_menu_css_file']->value;?>
" />
</head>
<body id="body">
	<?php echo $_smarty_tpl->getSubTemplate ('bg.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div id="layout">
   	<?php echo $_smarty_tpl->getSubTemplate ('topnav.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <!-- Menu toggle -->
    <a href="#menu" id="menuLink" class="menu-link">
        <!-- Hamburger icon -->
        <span></span>
    </a>

    <div id="menu">
        <div class="pure-menu pure-menu-open">
            <ul>
                 <li class="menu-item-divided">
                		<a href="#mission">Mission</a>
                </li>
                <li class="menu-item-divided">
                		<a href="#vision">Vision</a>
                </li>
                <li class="menu-item-divided">
                		<a href="#history">History</a>
                </li>
                 <li class="menu-item-divided">
                		<a href="#achievements">Achievements</a>
                </li>
                <li class="menu-item-divided">
                		<a href="#infrastructure">Infrastructure</a>
                </li>

                <li class="menu-item-divided">
                    <a href="#location">Location</a>
                </li>

                <li class="bottom-menu-item-divided">
                		<a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
    </div>

    <div id="main">
        <!--div class="header">
            <h1><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1>
        </div-->
        
        <div class="content">
        
					<div id="mission" class="section">
            <h2 class="content-subhead">Mission</h2>
            <p>
		          Sekondi College ( SEKCO ) exists to;
		          <ul>
		          	<i class="right-caret-bullet"></i><li>
		          		Assist students acquire general knowledge in natural and general sciences as 
		          		a foundation for understanding the world in which they live.
								</li>
								<i class="right-caret-bullet"></i><li>
									Strengthen and refine the students’ power of reasoning and judgement.
								</li>
								<i class="right-caret-bullet"></i><li>
									Assist students to discover their intellectual capabilities and interest and 
									development competencies in identified areas.
								</li>
								<i class="right-caret-bullet"></i><li>
									Prepare students to participate constructively in nation building. Inculcate in 
									students a sense of discipline, good morals, selflessness and patriotism.
								</li>
		          </ul>
            </p>
          </div> 
           
        	<div id="vision" class="section">
            <h2 class="content-subhead">Vision</h2>
            <p>
		          The vision of Sekondi College is to provide total education that will equip students with knowledge, 
		          skills and attitude which will make them functional and contribute to the development of the 
		          country, whiles given them the foundation for higher education.
            </p>
            <p>
            	The most important criteria for measuring our success will be
							<ul>
		          	<i class="right-caret-bullet"></i><li>
		          		our ability to attract students motivated by our mission;
								</li>
								<i class="right-caret-bullet"></i><li>
									the high number of graduating students entering post-secondary institutions; and
								</li>
								<i class="right-caret-bullet"></i><li>
									the resulting sense of satisfaction and reward felt by the Sekondi College community.
								</li>
		          </ul> 
            </p>
					</div>
					
        	<div id="history" class="section">
		        <h2 class="content-subhead">History</h2>
		        <p>
							Sekondi College is one of the oldest second cycle institutions in the Western Region of Ghana. 
							It was single – handedly founded by Mr. Joseph William Acquah of blessed memory.  
							The School started as a private Co-educational Institution and was later adopted by the Ghana 
							Education Trust.  The School opened for classes for the first time on the 24th of 
							September, 1951.  Since its establishment the School has been headed by twelve (12) 
							substantive headmasters including the founder.
		       	</p>
		        <p>
							Presently, the School is located on a 238.7 acre parcel of land in South Inchaban near 
							Sekondi Sports Stadium. Until September, 1989 the school was using an abandoned premises 
							of the military called Ranchi Barracks in Takoradi having inhabited another abandoned military 
							post at Ekuasi a suburb of Sekondi earlier on.  In fact the name Sekondi College emerge from 
							this earlier location.
		        </p>
		        <p>
		          <div class="pure-g">
		            <div class="pure-u-1-4">
		              <img class="pure-img-responsive" src="../modules/about/images/1.jpg" alt="Peyto Lake">
		            </div>
		            <div class="pure-u-1-4">
		              <img class="pure-img-responsive" src="../modules/about/images/2.jpg" alt="Train">
		            </div>
		            <div class="pure-u-1-4">
		              <img class="pure-img-responsive" src="../modules/about/images/3.jpg" alt="T-Shirt Store">
		            </div>
		            <div class="pure-u-1-4">
		              <img class="pure-img-responsive" src="../modules/about/images/4.jpg" alt="Mountain">
		            </div>
		          </div>
		        </p>
		        <p>
							The School can be reached on the following telephone lines 0312091192 and 0312093284.  
							The school’s e-mail address is sekcoschool@gmail.com
		        </p>
		        <p>
							In almost every other year the school celebrates a speech and prize giving and Founder’s 
							day in the month of November. The school has facilities for day and boarding students.
		        </p>
         	</div> 
          
         	<div id="achievements" class="section">
            <h2 class="content-subhead">Achievements</h2>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
         	</div> 
           
         	<div id="infrastructure" class="section">   
            <h2 class="content-subhead">Infrastructure</h2>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
         	</div> 
           
         	<div id="location" class="section">
            <h2 class="content-subhead">Location</h2>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        	</div>
        	
        	<div id="contact" class="section">
            <h2 class="content-subhead">Contact</h2>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        	</div>
        </div>
    </div>
     
	</div>
	<center>
  <?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
  </center>
  <script>
	//$('.ui.dropdown') .dropdown();
	//$('.ui.checkbox') .checkbox();
</script>
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
<?php }} ?>
