<?php /* Smarty version Smarty-3.1.18, created on 2014-06-19 11:15:18
         compiled from "templates/home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17648599955390c92e2480d0-87899095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44473f1c7779fd2764925cf1eff848b4714c81c4' => 
    array (
      0 => 'templates/home.tpl',
      1 => 1403169313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17648599955390c92e2480d0-87899095',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5390c92e4ac6f4_76851412',
  'variables' => 
  array (
    'sch_name_long' => 0,
    'twitter_link' => 0,
    'google_link' => 0,
    'facebook_link' => 0,
    'about' => 0,
    'admissions' => 0,
    'faq' => 0,
    'gallery' => 0,
    'alumni' => 0,
    'assoc_plural' => 0,
    'groups' => 0,
    'online_store' => 0,
    'sch_status' => 0,
    'sch_status_date' => 0,
    'recent_additions_source' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5390c92e4ac6f4_76851412')) {function content_5390c92e4ac6f4_76851412($_smarty_tpl) {?><!doctype html>
<html lang="en" ng-app>
<head>
	<?php echo $_smarty_tpl->getSubTemplate ('header.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</head>
<body>
	<?php echo $_smarty_tpl->getSubTemplate ('bg.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<center>
	<div id='header' class='Forground'>
		<div class='sch-info'>
			<div class='sch-logo'></div>
			<div class='sprite sch-logo'></div>
			<div class='logo-overlay'></div>
			<div class='sch-official'>Welcome to the Official Homepage of</div>
			<div class='sch-name'><?php echo $_smarty_tpl->tpl_vars['sch_name_long']->value;?>
</div>
		</div>
		<div class='soc-channels'>
			
			<a href="<?php echo $_smarty_tpl->tpl_vars['twitter_link']->value;?>
" title='' target="_blank">
			<div class='twitter'></div>
			</a>
			
			<a href="<?php echo $_smarty_tpl->tpl_vars['google_link']->value;?>
" title='' target="_blank" rel="publisher" />
			<div class='google'></div>
			</a>
			
			<a href="<?php echo $_smarty_tpl->tpl_vars['facebook_link']->value;?>
" title='' target="_blank">
			<div class='facebook'></div>
			</a>
			
			<div class='tell-friends'>Tell your friends</div>
		</div>
	</div>
	<div id='content' class='Forground'>
		<div id='right-segement'> 
			
			<div id='search' class="sch-coloured ui icon input">
			  <input placeholder="Search site..." type="text">
			  <i class="search icon"></i>
			</div>
			
			<div class="sch-coloured spacer sp-3y"><div class="ui ribbon label">Menu</div></div>
			<div class="vertical-menu">
				<a href='?token=<?php echo $_smarty_tpl->tpl_vars['about']->value;?>
' class="">
				<div class="label first-divider">About <!--i class="fa fa-info-circle"></i--></div>
				</a>
				<a href='?token=<?php echo $_smarty_tpl->tpl_vars['admissions']->value;?>
' class="">
				<div class="label next-divider">Admissions <!--i class="fa  fa-sign-in"></i--></div>
				</a>
				<a href='?token=<?php echo $_smarty_tpl->tpl_vars['faq']->value;?>
' class="">
				<div class="label next-divider">Faq <!--i class="fa fa-question-circle"></i--></div>
				</a>
				<a href='?token=<?php echo $_smarty_tpl->tpl_vars['gallery']->value;?>
' class="">
				<div class="label next-divider">Gallery <!--i class="fa fa-picture-o"></i--></div>
				</a>
				<a href='?token=<?php echo $_smarty_tpl->tpl_vars['alumni']->value;?>
' class="">
				<div class="label next-divider"><?php echo $_smarty_tpl->tpl_vars['assoc_plural']->value;?>
 <!--i class="fa fa-graduation-cap"></i--></div>
				</a>
				<a href='?token=<?php echo $_smarty_tpl->tpl_vars['groups']->value;?>
' class="">
				<div class="label next-divider">Groups <!--i class="fa fa-group"></i--></div>
				</a>
				
				<div class="record-service label next-divider">Record Service <!--i class="fa fa-cubes"></i--></div>
				<div class="elearning-service label next-divider">E-Centre <!--i class="fa fa-desktop"></i--></div>
				<div class="inet-service label next-divider">Inet Service <!--i class="fa fa-cloud"></i--></div>
				<div class="management-service label next-divider">Site Map <!--i class="fa fa-sitemap"></i--></div>
				
				<a href='?token=<?php echo $_smarty_tpl->tpl_vars['online_store']->value;?>
' class="">
				<div class="label last-divider">Online Store <!--i class="fa fa-shopping-cart"></i--></div>
				</a>
			</div>	
			
			<!--div class="spacer sp-1y"></div-->
			
			<div id='sch-stats'>
				<div class='sch-status'>
					<div class='icon'><i class="fa fa-institution"></i></div>
					<div class='content'>
						<div class='status'><?php echo $_smarty_tpl->tpl_vars['sch_status']->value;?>
</div>
						<div class='date'><?php echo $_smarty_tpl->tpl_vars['sch_status_date']->value;?>
</div>
						<div class='text'>School Status</div>
					</div>
				</div>
			</div>
				
			<div class="spacer sp-d8"></div>
			
			<div id='channel-bg' class="youtube-channel blue ui segment">
				~ YOU-TUBE CHANNEL ~
				<ul><li><a target='_blank' href='http://www.youtube.com/user/sekcoschool'>Listen to Podcasts</a></li>
				<li><a href='#'>Watch Live Streams</a></li>
				<li><a href='#'>Video Archives</a></li></ul>
			</div>
			 
			<div id='channel-bg' class="academic-calendar blue ui segment">
				~ SCHOOL CALENDAR ~
				<ul><li><a href='#'>Current&nbsp;Events</a></li>
				<li><a href='#'>Pending&nbsp;Events</a></li>
				<li><a href='#'>Past&nbsp;Events</a></li></ul>
			</div>
			
			<div id='channel-bg' class="document blue ui segment">
				~ DOCUMENTS ~
				<ul><li><a href='#'>Promotional&nbsp;Interview</a></li>
				<li><a href='#'>ICT&nbsp;Training</a></li>
				<li><a href='#'>Other&nbsp;Docs</a></li></ul>
			</div>
			 
			<div id='channel-bg' class="publication blue ui segment">
				~ PUBLICATIONS ~
				<ul><li><a href='#'>School&nbsp;Magazine</a></li>
				<li><a href='#'>Electronic&nbsp;Gazette</a></li>
				<li><a href='#'>Weblog</a></li></ul>
			</div>
			
			<div id="channel-bg" class="comment blue ui segment">
				~ COMMENTS ~
				<ul>
					<li>
					<a href='#'>
					Got&nbsp;suggestions&nbsp;that can&nbsp;improve&nbsp;us?&nbsp;Just send&nbsp;us&nbsp;a&nbsp;Comment.
					</a>
					</li>
				</ul>
			</div>
			
		</div><!--End of right-segement-->
		
		<div id="left-segement">
			
		<div id="primary-content">
			<div class="primary-content-link">
			<a target="_blank" href="https://www.alislam.org/books/epub/Philosophy.epub">ePub</a> | 
			<a target="_blank" href="https://www.alislam.org/multimedia/english-audio-books.html">Audio</a> | 
			<a target="_blank" href="https://www.alislam.org/books/epub/Philosophy.mobi">mobi</a> | 
			<a target="_blank" href="https://www.alislam.org/library/books/Philosophy-of-Teachings-of-Islam.pdf">PDF</a>
			<br />
			</div>
		</div><!--End of primary-content-->
		
		<div id='secondary-content' class='white-bordered'>
			<div class="white-bordered left-floated-column">
				<p class='title'>PARENTS</p>
					<span class="more overview"><i class="right arrow sign icon"></i> <a href='#'>Your Ward</a></span>
					<span class="more overview"><i class="right arrow sign icon"></i> <a href='#'>PTA Info</a></span>
					<span class="more overview"><i class="right arrow sign icon"></i> <a href='#'>Other Events</a></span>
			</div>
		  	<div class='vertical-divider'></div>
		  	
			<div class="white-bordered left-floated-column">
				<p class='title'>STUDENTS</p>
					<span class="more overview"><i class="right arrow sign icon"></i> <a href='#'>Record Service</a></span>
					<span class="more overview"><i class="right arrow sign icon"></i> <a href='#'>E-Centre</a></span>
					<span class="more overview"><i class="right arrow sign icon"></i> <a href='#'>Weblog</a></span>
			</div>
			<div class='vertical-divider'></div>
			
			<div class="white-bordered left-floated-column">
				<p class="title">STAFF</p>
					<span class="more overview"><i class="right arrow sign icon"></i> <a href='#'>Inet Service</a></span>
					<span class="more overview"><i class="right arrow sign icon"></i> <a href='#'>E-Centre</a></span>
					<span class="more overview"><i class="right arrow sign icon"></i> <a href='#'>Weblog</a></span>
			</div>
		</div><!--End of secondary-content-->
		
		<div id='recent-additions' class=''>
			<div class='header'><h3 class=''>Recent Additions Noteworthy</h3><a href='#'><i class='list icon'></i>Show All</a></div>
			
				<iframe name="recent-additions-iframe" id="recent-additions-iframe" 
				src="<?php echo $_smarty_tpl->tpl_vars['recent_additions_source']->value;?>
" frameborder="0" scrolling="no"
				marginheight="0" marginwidth="0" width="550px" height="77px" seamless>
				</iframe>
			
		</div><!--End of recent-additions-->
		
		
		<div id='isometric-grid'>
		
		<div id='sch-stats' class=''>
			<div class='stu-pop'>
				<div class='icon'><i class="fa fa-users"></i></div>
				<div class='content'>
					<div class='num'>1560</div>
					<div class='text'>Active Students</div>
				</div>
			</div>
			<div class='staff-pop'>
				<div class='icon'>
					  <i class="fa fa-user"></i>
				</div>
				<div class='content'>
					<div class='num'>132</div>
					<div class='text'>Staff at Post</div>
				</div>
			</div>
			<div class='total-dept'>
				<div class='icon'><i class="fa fa-suitcase"></i></div>
				<div class='content'>
					<div class='num'>15</div>
					<div class='text'>Departments</div>
				</div>
			</div>
		</div><!--End of sch-stats-->
		
		</div><!--End of isometric-grid-->
		
		<div id='fluid-grid'>
			<ul>
				<li id='history' class=''>
					<a href='?token=<?php echo $_smarty_tpl->tpl_vars['about']->value;?>
#history'>
						<i class="fa fa-history"></i>
						<h3>History</h3>
						<p>
							An introduction to the history of 
							Sekondi College from the time it started
							to present, enumerating some of its achievements. 
						</p>
					</a>
				</li>
				<li id='counselling' class=''>
					<a href='#'>
						<i class="big puzzle piece icon"></i>
						<h3>Counselling</h3>
						<p>
							This section provides invaluable counselling and 
							carrear guidance information for current and 
							prospective students of Sekondi College. 
						</p>
					</a>
				</li>
				<li id='academics' class=''>
					<a href='#'>
						<i class="big book icon"></i>
						<h3>Academics</h3>
						<p>
							This section provides info on departments, and 
							programmes that are offered in the school. Others 
							like performance stats, academic calendar, etc are also provided. 
						</p>
					</a>
				</li>
				<li id='admissions' class=''>
					<a href='#'>
						<i class="big sign in icon"></i>
						<h3>Admissions</h3>
						<p>
							Understand Sekondi College&#39;s Mission and Vision and decide if it 
							is the right choice for you. Also learn about the CSSPS school selection system.
						</p>
					</a>
				</li>
				<li id='sports' class=''>
					<a href='#'>
						<i class="big dribbble icon"></i>
						<h3>Sports</h3>
						<p>
							General information on Local, Regional and National sporting activities. 
							Also find highlights on Athletics, Soccer, Volley and other sporting events. 
						</p>
					</a>
				</li>
				<li id="pta" class="">
					<a href="#">
						<i class="big user icon"></i>
						<h3>PTA</h3>
						<p>
							This section provides info on Sekco PTA and its 
							activities over the years such as fundraising, housing 
							projects, meetings and other useful infomation. 
						</p>
					</a>
				</li>
			</ul>
		</div><!--End of fluid-grid-->
		
		</div><!--End of left-segement-->
		
	</div><!--End of forground content-->
	
	<!-- Record Service Login Modal-->
	
	<div id="record-service-login-modal" class="ui modal record-service-login">
	  <div class="header">Record Service Login</div>
	  <div class="content">
			<div class="ui two column middle aligned relaxed grid basic segment">
			  <div class="column">
				<div class="ui form segment">
				  <div class="field">
					<!--label>Username</label-->
					<div class="ui left labeled icon input">
					  <input placeholder="Username" type="text">
					  <i class="user icon"></i>
					  <div class="ui corner label">
						<i class="asterisk icon"></i>
					  </div>
					</div>
				  </div>
				  <div class="field">
					<!--label>Password</label-->
					<div class="ui left labeled icon input">
					  <input placeholder="Password" type="password">
					  <i class="lock icon"></i>
					  <div class="ui corner label">
						<i class="asterisk icon"></i>
					  </div>
					</div>
				  </div>
				  <div class="ui blue submit button">Login</div>
				</div>
			  </div>
			  <div class="ui vertical divider">
				Or
			  </div>
			  <div class="center aligned column">
				<div class="record-service-registration huge green ui labeled icon button">
				  <i class="signup icon"></i>
				  Register
				</div>
			  </div>
			</div>
	  </div>
	  <div class="actions">
		<div class="orange ui button">Cancel</div>
	  </div>
	</div>
	
	<!-- Record Service Registration Modal-->

	<div id="record-service-registration-modal" class="ui modal record-service-registration">
	  <div class="header">Record Service Registration</div>
	  <div class="content">
		<div class="container"> 
		  <h1>Kindly fill out and submit the following form ( <i>All fields are required</i> )</h1>
			
		  <div class="ui form segment" ng-controller="RegisterController"> 
			
			<div class="ui inverted dimmer" ng-class="{true: 'active', false: 'disabled'}[loading]">
				<div class="ui text loader">Your details are being processed. <br /><br />Please wait!</div>
			</div>
			
			<div class="two fields">
				<div class="field">
					<label for="FullName">Full Name</label>
					<input id="FullName" placeholder="Enter Your Full Name" type="text" ng-model="user.fullname" />
				</div>
				<div id="wrapper" class="field">
				<div class="two fields">
				<div class="field">
					<label for="Gender">Gender</label> 
					<div class="ui fluid selection dropdown">
						<div class="text"><span>Select</span></div>
					  	<i class="dropdown icon"></i>
					  	<input id="Gender" name="Gender" type="hidden"  ng-model="user.gender" />
						<div class="menu">
						  	<div class="item">Male</div>
						  	<div class="item">Female</div>
						</div>
					</div>
				</div>
				<div class="field">
					<label for="Usertype">User Type</label> 
					<div class="ui fluid selection dropdown">
						<div class="text"><span>Select</span></div>
					  	<i class="dropdown icon"></i>
					  	<input id="Usertype" name="Usertype" type="hidden" ng-model="user.usertype" />
						<div class="menu">
						  	<div class="item">Parent</div>
						  	<div class="item">Guardian</div>
						  	<div class="item">Student</div>
						</div>
					</div>
				</div>
				</div>
				</div>
			</div>
			
			<div class="two fields">
				<div class="field">
				  <label for="Email">Email</label>
				  <input id="Email" placeholder="Enter a valid Address" type="text" ng-model="user.email" />
				</div>
				<div class="field">
				  <label for="MobileNumber">Mobile Number</label>
				  <input id="MobileNumber" placeholder="Enter a valid Number" type="text" ng-model="user.mobilenumber" />
				</div>
			</div>
			
			<div class="two fields">
			<div class="field">
			  <label for="Username">Username</label>
			  <input id="Username" placeholder="Username" type="text" ng-model="user.username" />
			</div>
			<div class="field">
				<label for="TrackingId">Tracking ID</label>
				<input id="TrackingId" placeholder="Enter a valid Student ID" type="text" ng-model="user.trackingid" />
			</div>
			</div>
			
			<div class="field">
			  <label for="Password">Password</label>
			  <input id="Password" placeholder="Six characters max" type="password" ng-model="user.password" />
			</div>

			<div class="field">
			  <label for="PasswordConfirm">Password Confirm</label>
			  <input id="PasswordConfirm" placeholder="Confirm" type="password" ng-model="user.passwordconfirm" />
			</div>
			<div class="inline field">
				<span class="ui checkbox">
				  <input id="Terms" type="checkbox" ng-model="user.terms" />
				  <label>I agree to the Terms and Conditions.</label>
				</span><span class="agree"> <i href="">Read</i></span>
			 </div>
			<button class="ui blue button" ng-click="register()">Submit</button>
		  </div>
		</div>
	  </div>
	  <div class="actions">
		<div class="orange ui button">Cancel</div>
	  </div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	
	<script type="text/javascript"> 
	
		$('.record-service-login.modal')
			.modal({detachable:false})
			.modal('setting', 'closable', false)
			.modal('attach events', '.record-service', 'show')
			;
	
		$('.record-service-registration.modal')
			.modal({detachable:false})
			.modal('setting', 'closable', true)
			.modal('attach events', '.record-service-registration', 'show')
			;
			
		$('.ui.selection.dropdown') .dropdown();
		
		$('.ui.checkbox') .checkbox();

		(function ($) {
			$('.ui.form').form({        
			  fullname: {
			    identifier: 'FullName',
			    rules: [{
			      type: 'empty',
			      prompt: 'Required'
			    }]
			  },       
			  gender: {
					identifier: 'Gender',
					rules: [{
						type: 'empty',
						prompt: 'Required'
					}]
				}, 
				usertype: {
					identifier: 'Usertype',
					rules: [{
						type: 'empty',
						prompt: 'Required'
					}]
				},      
			  email: {
			    identifier: 'Email',
			    rules: [{
			      type: 'empty',
			      prompt: 'Required'
			    },{
			      type: 'email',
			      prompt: 'Email not valid'
			    }]
			  },
			  mobilenumber: {
					identifier: 'MobileNumber',
					rules: [{
						type: 'empty',
						prompt: 'Required'
					},{
						type: 'mobile',
						prompt: 'Invalid'
					},{
						type: 'length[10]',
						prompt: 'Must be 10 digits'
					}]
				},
			  username: {
			    identifier: 'Username',
			    rules: [{
			      type: 'empty',
			      prompt: 'Required'
			    }]
			  },       
			  trackingid: {
					identifier: 'TrackingId',
					rules: [{
						type: 'empty',
						prompt: 'Required'
					}]
				},     
			  password: {
			    identifier: 'Password',
			    rules: [{
			      type: 'empty',
			      prompt: 'Required'
			    },{
			      type: 'length[6]',
			      prompt: 'Must be 6 characters long'
			    }]
			  },       
			  passwordConfirm: {
			    identifier: 'PasswordConfirm',
			    rules: [{
			      type: 'match[Password]',
			      prompt: 'Password don\'t match'
			    }]
			  },
			  terms: {
					identifier : 'Terms',
					rules: [{
						type   : 'checked',
						prompt : 'Must agree to the terms'
					}]
				}
			}, {
			  on: 'blur',
			  inline: 'true'
			});
		}(jQuery));
	</script>	
	
	<script type="text/javascript"> 
		$(function () {
			$("#recent-additions-iframe").load(function () {
				var ifr = document.getElementById("recent-additions-iframe");
				var anchors = ifr.contentDocument.getElementsByTagName("a");
				for (var i in anchors) {
					anchors[i].setAttribute("target", "_blank");
				}
			});
		})
		;
	</script>
	
</center>
</body>
</html>
<?php }} ?>