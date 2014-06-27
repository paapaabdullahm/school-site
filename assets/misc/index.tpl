<?php
	//session_start();
	if ( !isset ($_SESSION["modified_css"]) ) 
	{
		//check if css generator file had change
		$_SESSION["modified_css"] = filemtime(CSS_PATH.DS."generator.php");
	} else {
		$modified_css = $_SESSION["modified_css"];
	}
		
	
echo "<!doctype html>
<html lang=\"en\" ng-app>
<head><title>". strtoupper( $host ) ."</title>"; 
	
	echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"".FONT_PATH.DS."raleway/raleway.css\" />";
	echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"".CSS_PATH.DS."semantic.css\" class=\"ui\" />";
	echo "<link rel=\"stylesheet\" type=\"text/css\" href=\"".CSS_PATH.DS."{$config['css_static_file']}\" />";
	require_once (CSS_PATH.DS."generator.php"); 
	
	
	echo "	
</head>
<body>

";
	$condition = false;
	
	echo "<div class='Background'></div>
	<center>
	<!--div id='call-us' class='Forground'>
		
		<span class='sprite country-flag-small'></span> {$config['zip_code']}
		
		<i class='large phone icon'></i>{$config['sch_mobile']}
		<span class='flag-overlay'><span>
	</div-->
	<div id='header' class='Forground'>
		<div class='sch-info'>
			<div class='sch-logo'></div>
			<div class='sprite sch-logo'></div>
			<div class='logo-overlay'></div>
			<div class='sch-official'>Welcome to the Official Homepage of</div>
			<div class='sch-name'>".ucwords($config['long_sch_name'])."</div>
		</div>
		<div class='soc-channels'>
			
			<a href=\"{$config['twitter']}\" title='' target=\"_blank\">
			<div class='twitter'></div>
			</a>
			
			<a href=\"{$config['google']}\" title='' target=\"_blank\" rel=\"publisher\" />
			<div class='google'></div>
			</a>
			
			<a href=\"{$config['facebook']}\" title='' target=\"_blank\">
			<div class='facebook'></div>
			</a>
			
			<div class='tell-friends'>Tell your friends</div>
		</div>
	</div>
	<div id='content' class='Forground'>
		<div id='right-segement'> 
			
			<div id='search' class=\"sch-coloured ui icon input\">
			  <input placeholder=\"Search site...\" type=\"text\">
			  <i class=\"search icon\"></i>
			</div>
			
			<div class=\"sch-coloured spacer sp-3y\"><div class='ui ribbon label'>Menu</div></div>
			<div class=\"vertical-menu\">
				<a href='#' class=\"\">
				<div class=\"label first-divider\">About ".ucfirst($config['short_sch_name'])."</div>
				</a>
				<a href='#' class=\"\">
				<div class=\"label next-divider\">Admissions</div>
				</a>
				<a href='#' class=\"\">
				<div class=\"label next-divider\">Frequently Asked</div>
				</a>
				<a href='#' class=\"\">
				<div class=\"label next-divider\">School Gallery</div>
				</a>
				<a href='#' class=\"\">
				<div class=\"label next-divider\">{$config['assoc_plural']} Association</div>
				</a>
				<a href='#' class=\"\">
				<div class=\"label next-divider\">Clubs and Societies</div>
				</a>
				<div class=\"record-service label next-divider\">Record Service</div>
				<a href='#' class=\"\">
				<div class=\"label next-divider\">E-Learning Service</div>
				</a>
				<div class=\"inet-service label next-divider\">Staff Inet Service</div>
				<a href='#' class=\"\">
				<div class=\"label last-divider\">Management Service</div>
				</a>
			</div>	
			
			<div class='spacer sp-2y'></div>
			
			<div id='sch-stats'>
				<div class='sch-status'>
					<div class='icon'><i class=\"big home icon\"></i></div>
					<div class='content'>
						<div class='status'>{$config['sch_status']}</div>
						<div class='date'>{$config['sch_status_date']}</div>
						<div class='text'>School Status</div>
					</div>
				</div>
			</div>
				
			<div class='spacer sp-d8'></div>
			
			<div id='channel-bg' class=\"youtube-channel blue ui segment\">
				~ YOU-TUBE CHANNEL ~
				<ul><li><a target='_blank' href='http://www.youtube.com/user/sekcoschool'>Listen to Podcasts</a></li>
				<li><a href='#'>Watch Live Streams</a></li>
				<li><a href='#'>Video Archives</a></li></ul>
			</div>
			 
			<div id='channel-bg' class=\"academic-calendar blue ui segment\">
				~ SCHOOL CALENDAR ~
				<ul><li><a href='#'>Current&nbsp;Events</a></li>
				<li><a href='#'>Pending&nbsp;Events</a></li>
				<li><a href='#'>Past&nbsp;Events</a></li></ul>
			</div>
			
			<div id='channel-bg' class=\"document blue ui segment\">
				~ DOCUMENTS ~
				<ul><li><a href='#'>Promotional&nbsp;Interview</a></li>
				<li><a href='#'>ICT&nbsp;Training</a></li>
				<li><a href='#'>Other&nbsp;Docs</a></li></ul>
			</div>
			 
			<div id='channel-bg' class=\"publication blue ui segment\">
				~ PUBLICATIONS ~
				<ul><li><a href='#'>School&nbsp;Magazine</a></li>
				<li><a href='#'>Electronic&nbsp;Gazette</a></li>
				<li><a href='#'>Students Blog</a></li></ul>
			</div>
			
			<div id='channel-bg' class=\"comment blue ui segment\">
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
		
		<div id='left-segement'>
			
		<div id='primary-content'>
			<div class=\"primary-content-link\">
			<a target=\"_blank\" href=\"https://www.alislam.org/books/epub/Philosophy.epub\">ePub</a> | 
			<a target=\"_blank\" href=\"https://www.alislam.org/multimedia/english-audio-books.html\">Audio</a> | 
			<a target=\"_blank\" href=\"https://www.alislam.org/books/epub/Philosophy.mobi\">mobi</a> | 
			<a target=\"_blank\" href=\"https://www.alislam.org/library/books/Philosophy-of-Teachings-of-Islam.pdf\">PDF</a>
			<br />
			</div>
		</div><!--End of primary-content-->
		
		<div id='secondary-content' class='white-bordered'>
			<div class='white-bordered left-floated-column'>
				<p class='title'>PARENTS</p>
					<span class='more overview'><i class=\"right arrow sign icon\"></i> <a href='#'>About your ward</a></span>
					<span class='more overview'><i class=\"right arrow sign icon\"></i> <a href='#'>Sekondi College PTA</a></span>
					<span class='more overview'><i class=\"right arrow sign icon\"></i> <a href='#'>Sekco Events</a></span>
					<span class='more overview'><i class=\"right arrow sign icon\"></i> <a href='#'>more</a></span>
			</div>
		  	<div class='vertical-divider'></div>
		  	
			<div class='white-bordered left-floated-column'>
				<p class='title'>STUDENTS</p>
					<span class='more overview'><i class=\"right arrow sign icon\"></i> <a href='#'>Record Service</a></span>
					<span class='more overview'><i class=\"right arrow sign icon\"></i> <a href='#'>E-Learning Centre</a></span>
					<span class='more overview'><i class=\"right arrow sign icon\"></i> <a href='#'>Blogging</a></span>
					<span class='more overview'><i class=\"right arrow sign icon\"></i> <a href='#'>more</a></span>
			</div>
			<div class='vertical-divider'></div>
			
			<div class='white-bordered left-floated-column'>
				<p class='title'>STAFF</p>
					<span class='more overview'><i class=\"right arrow sign icon\"></i> <a href='#'>Inet Service</a></span>
					<span class='more overview'><i class=\"right arrow sign icon\"></i> <a href='#'>E-Learning Centre</a></span>
					<span class='more overview'><i class=\"right arrow sign icon\"></i> <a href='#'>Blogging</a></span>
					<span class='more overview'><i class=\"right arrow sign icon\"></i> <a href='#'>more</a></span>
			</div>
		</div><!--End of secondary-content-->
		
		<div id='recent-additions' class=''>
			<div class='header'><h3 class=''>Recent Additions Noteworthy</h3><a href='#'><i class='list icon'></i>Show All</a></div>
			
				<iframe name='recent-additions-iframe' id='recent-additions-iframe' 
				src='".NODE_PATH.DS."recent_additions/index.php' frameborder='0' scrolling='no'
				marginheight='0' marginwidth='0' width='550px' height='77px' 'seamless'>
				</iframe>
			
		</div><!--End of recent-additions-->
		
		
		<div id='isometric-grid'>
		
		<div id='sch-stats' class=''>
			<div class='stu-pop'>
				<div class='icon'><i class=\"big users icon\"></i></div>
				<div class='content'>
					<div class='num'>1560</div>
					<div class='text'>Active Students</div>
				</div>
			</div>
			<div class='staff-pop'>
				<div class='icon'>
					  <i class=\"big user icon\"></i>
				</div>
				<div class='content'>
					<div class='num'>132</div>
					<div class='text'>Staff at Post</div>
				</div>
			</div>
			<div class='total-dept'>
				<div class='icon'><i class=\"big suitcase icon\"></i></div>
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
					<a href='#'>
						<i class=\"big time icon\"></i>
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
						<i class=\"big puzzle piece icon\"></i>
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
						<i class=\"big book icon\"></i>
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
						<i class=\"big sign in icon\"></i>
						<h3>Admissions</h3>
						<p>
							Understand Sekondi College&#39;s Mission and Vision and decide if it 
							is the right choice for you. Also learn about the CSSPS school selection system.
						</p>
					</a>
				</li>
				<li id='sports' class=''>
					<a href='#'>
						<i class=\"big dribbble icon\"></i>
						<h3>Sports</h3>
						<p>
							General information on Local, Regional and National sporting activities. 
							Also find highlights on Athletics, Soccer, Volley and other sporting events. 
						</p>
					</a>
				</li>
				<li id='pta' class=''>
					<a href='#'>
						<i class=\"big user icon\"></i>
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
	
	<div id='footer'>
		<span class='copyright'>&copy; 2014 sekco.edu.gh</span> |
		<span class='about'><a href=''>About</a></span> |
		<span class='contact'><a href=''>Contact</a></span>
	</div>
	
	</center>
	
	";
	
	// Record Service Login Modal
	
	echo "
	<div id='record-service-login-modal' class=\"ui modal record-service-login\">
	  <div class=\"header\">Record Service Login</div>
	  <div class=\"content\">
			<div class=\"ui two column middle aligned relaxed grid basic segment\">
			  <div class=\"column\">
				<div class=\"ui form segment\">
				  <div class=\"field\">
					<!--label>Username</label-->
					<div class=\"ui left labeled icon input\">
					  <input placeholder=\"Username\" type=\"text\">
					  <i class=\"user icon\"></i>
					  <div class=\"ui corner label\">
						<i class=\"asterisk icon\"></i>
					  </div>
					</div>
				  </div>
				  <div class=\"field\">
					<!--label>Password</label-->
					<div class=\"ui left labeled icon input\">
					  <input placeholder=\"Password\" type=\"password\">
					  <i class=\"lock icon\"></i>
					  <div class=\"ui corner label\">
						<i class=\"asterisk icon\"></i>
					  </div>
					</div>
				  </div>
				  <div class=\"ui blue submit button\">Login</div>
				</div>
			  </div>
			  <div class=\"ui vertical divider\">
				Or
			  </div>
			  <div class=\"center aligned column\">
				<div class=\"record-service-registration huge green ui labeled icon button\">
				  <i class=\"signup icon\"></i>
				  Register
				</div>
			  </div>
			</div>
	  </div>
	  <div class=\"actions\">
		<div class=\"orange ui button\">Cancel</div>
	  </div>
	</div>
	";
	
	// Record Service Registration Modal
	
	echo " 
	<div id='record-service-registration-modal' class=\"ui modal record-service-registration\">
	  <div class=\"header\">Record Service Registration</div>
	  <div class=\"content\">
		<div class=\"container\"> 
		  <h1>Kindly fill out and submit the following form ( <i>All fields are required</i> )</h1>
			
		  <div class=\"ui form segment\" ng-controller=\"RegisterController\"> 
			
			<div class=\"ui inverted dimmer\" ng-class=\"{true: 'active', false: 'disabled'}[loading]\">
				<div class=\"ui text loader\">Your details are being processed. <br /><br />Please wait!</div>
			</div>
			
			<div class=\"two fields\">
				<div class=\"field\">
					<label for=\"FullName\">Full Name</label>
					<input id=\"FullName\" placeholder=\"Enter Your Full Name\" type=\"text\" ng-model=\"user.fullname\" />
				</div>
				<div id=\"wrapper\" class=\"field\">
				<div class=\"two fields\">
				<div class=\"field\">
					<label for=\"Gender\">Gender</label> 
					<div class=\"ui fluid selection dropdown\">
						<div class=\"text\"><span>Select</span></div>
					  	<i class=\"dropdown icon\"></i>
					  	<input id=\"Gender\" name=\"Gender\" type=\"hidden\"  ng-model=\"user.gender\" />
						<div class=\"menu\">
						  	<div class=\"item\">Male</div>
						  	<div class=\"item\">Female</div>
						</div>
					</div>
				</div>
				<div class=\"field\">
					<label for=\"Usertype\">User Type</label> 
					<div class=\"ui fluid selection dropdown\">
						<div class=\"text\"><span>Select</span></div>
					  	<i class=\"dropdown icon\"></i>
					  	<input id=\"Usertype\" name=\"Usertype\" type=\"hidden\" ng-model=\"user.usertype\" />
						<div class=\"menu\">
						  	<div class=\"item\">Parent</div>
						  	<div class=\"item\">Guardian</div>
						  	<div class=\"item\">Student</div>
						</div>
					</div>
				</div>
				</div>
				</div>
			</div>
			
			<div class=\"two fields\">
				<div class=\"field\">
				  <label for=\"Email\">Email</label>
				  <input id=\"Email\" placeholder=\"Enter a valid Address\" type=\"text\" ng-model=\"user.email\" />
				</div>
				<div class=\"field\">
				  <label for=\"MobileNumber\">Mobile Number</label>
				  <input id=\"MobileNumber\" placeholder=\"Enter a valid Number\" type=\"text\" ng-model=\"user.mobilenumber\" />
				   <!--div class=\"ui pointing label\">
						Please enter a number
					</div-->
				</div>
			</div>
			
			<div class=\"two fields\">
			<div class=\"field\">
			  <label for=\"Username\">Username</label>
			  <input id=\"Username\" placeholder=\"Username\" type=\"text\" ng-model=\"user.username\" />
			</div>
			<div class=\"field\">
				<label for=\"TrackingId\">Tracking ID</label>
				<input id=\"TrackingId\" placeholder=\"Enter a valid Student ID\" type=\"text\" ng-model=\"user.trackingid\" />
			</div>
			</div>
			
			<div class=\"field\">
			  <label for=\"Password\">Password</label>
			  <input id=\"Password\" placeholder=\"Six characters max\" type=\"password\" ng-model=\"user.password\" />
			</div>

			<div class=\"field\">
			  <label for=\"PasswordConfirm\">Password Confirm</label>
			  <input id=\"PasswordConfirm\" placeholder=\"Confirm\" type=\"password\" ng-model=\"user.passwordconfirm\" />
			</div>
			<div class=\"inline field\">
				<span class=\"ui checkbox\">
				  <input id=\"Terms\" type=\"checkbox\" ng-model=\"user.terms\" />
				  <label>I agree to the Terms and Conditions.</label>
				</span><span class='agree'> <i href=\"\">Read</i></span>
			 </div>
			<button class=\"ui blue button\" ng-click=\"register()\">Submit</button>
		  </div>
		</div>
	  </div>
	  <div class=\"actions\">
		<div class=\"orange ui button\">Cancel</div>
	  </div>
	</div>
	";
?>	

	<!--____Start JS From Here___________________________________________________-->
<?php 
echo "
	<script src='".JS_PATH.DS."jquery-1.11.0.min.js'></script>
	<script src='".JS_PATH.DS."semantic.js'></script>
	<script src='".JS_PATH.DS."angular.min.js'></script>
	"; 
?>
	
	<script type="text/javascript"> 
		$('.record-service-login.modal')
			.modal({detachable:false})
			.modal('setting', 'closable', false)
			.modal('attach events', '.record-service', 'show')
			;
	</script>	
	
	<script type="text/javascript"> 
		
		$('.record-service-registration.modal')
			.modal({detachable:false})
			.modal('setting', 'closable', true)
			.modal('attach events', '.record-service-registration', 'show')
			;
		
		
		//$( "#record-service-login-modal .record-service-registration" ).click(function() {
			//$( "#record-service-login-modal" ).hide( "fast" );
			//$( "#record-service-registration-modal" ).show( "slow" );
		//});
		
	</script>	
	
	<script type="text/javascript">
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
  
	function RegisterController($scope, $element) {
		var registrationForm = $($element);
		$scope.user = {};
		$scope.loading = false;
		$scope.isInvalid = function() {
			return !registrationForm.form('validate form');
		};

		$scope.register = function () {
			if (this.isInvalid()) {
				return;
			}
			this.loading = true;
			//alert("Register was clicked!");
			console.log(this.user);
		};
	}
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
		});
	</script>
	<!--____Stop JS From Here____________________________________________________-->

<?php
echo "

</body>
</html>";
?>
