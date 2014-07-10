<!doctype html>
<html lang="en" ng-app>
<head>
  {include file='header.inc.tpl'}
</head>
<body>
  {include file='bg.inc.tpl'}
  <center>
  <div id='header' class='Forground'>
    <div class='sch-info'>
      <div class='sch-logo'></div>
      <div class='sprite sch-logo'></div>
      <div class='logo-overlay'></div>
      <div class='sch-official'>Welcome to the Official Homepage of</div>
      <div class='sch-name'>{$sch_name_long}</div>
    </div>
    <div class='soc-channels'>
      <a href="{$twitter_link}" title='' target="_blank">
      <div class='twitter'></div></a>
      <a href="{$google_link}" title='' target="_blank" rel="publisher">
      <div class='google'></div></a>
      <a href="{$facebook_link}" title='' target="_blank">
      <div class='facebook'></div></a>
      <div class='tell-friends'>Tell your friends</div>
    </div>
  </div>
            
  <div id='content' class='Forground'>
    <div id='right-menu-segement'> 
      <div id='search' class="search-bg ui icon input">
        <input placeholder="Search site..." type="text">
        <i class="search icon"></i>
      </div>

      <div class="ribbon-bg spacer sp-3y">
        <div class="ui ribbon label">Menu</div>
      </div>
      <div class="vertical-menu">
        <a href='?token={$about}' class="">
        <div class="label first-divider">
          About <!--i class="fa fa-info-circle"></i-->
        </div></a>
        <a href='?token={$admissions}' class="">
        <div class="label next-divider">
          Admissions <!--i class="fa  fa-sign-in"></i-->
        </div></a>
        <a href='?token={$faq}' class="">
        <div class="label next-divider">
          Frequently Asked <!--i class="fa fa-question-circle"></i-->
        </div></a>
        <a href='?token={$gallery}' class="">
        <div class="label next-divider">
          School Gallery <!--i class="fa fa-picture-o"></i-->
        </div></a>
        <a href='?token={$alumni}' class="">
        <div class="label next-divider">
          {$assoc_plural} Portal<!--i class="fa fa-graduation-cap"></i-->
        </div></a>
        <a href='?token={$groups}' class="">
        <div class="label next-divider">
          Student Groups <!--i class="fa fa-group"></i-->
        </div></a>
        <div class="record-service label next-divider">
          Record Service <!--i class="fa fa-cubes"></i-->
        </div>
        <div class="inet-service label next-divider">
          Inet Service <!--i class="fa fa-cloud"></i-->
        </div>
        <div class="elearning-service label next-divider">
          E-Centre <!--i class="fa fa-desktop"></i-->
        </div>
        <div class="management-service label next-divider">
          Site Map <!--i class="fa fa-sitemap"></i-->
        </div>
        <a href='?token={$online_store}' class="">
        <div class="label last-divider">
          Web Store <!--i class="fa fa-shopping-cart"></i-->
        </div></a>
      </div>	
      <div class="spacer sp-d8"></div>

    </div><!--End of right-segement-->

  <div id="left-primary-segement">

  <div id="primary-content">
    <div class="primary-content-link">
     
    </div>
  </div><!--End of primary-content-->

  <div id='secondary-content' class='white-bordered'>
      
      <div class="white-bordered left-floated-column">
          <p class='title'>Parents</p>
          <span class="more overview">
            <i class="right arrow sign icon"></i> <a href='#'>Your Ward</a>
          </span>
          <span class="more overview">
            <i class="right arrow sign icon"></i> <a href='#'>PTA Info</a>
          </span>
          <span class="more overview">
            <i class="right arrow sign icon"></i> <a href='#'>Other Events</a>
          </span>
      </div>
      
      <div class='vertical-divider'></div>

      <div class="white-bordered left-floated-column">
          <p class='title'>Students</p>
          <span class="more overview">
            <i class="right arrow sign icon"></i> <a href='#'>Record Service</a>
          </span>
          <span class="more overview">
            <i class="right arrow sign icon"></i> <a href='#'>E-Centre</a>
          </span>
          <span class="more overview">
            <i class="right arrow sign icon"></i> <a href='#'>Weblog</a>
          </span>
      </div>
      
      <div class='vertical-divider'></div>

      <div class="white-bordered left-floated-column">
          <p class="title">Staff</p>
          <span class="more overview">
            <i class="right arrow sign icon"></i> <a href='#'>Inet Service</a>
          </span>
          <span class="more overview">
            <i class="right arrow sign icon"></i> <a href='#'>E-Centre</a>
          </span>
          <span class="more overview">
            <i class="right arrow sign icon"></i> <a href='#'>Weblog</a>
          </span>
      </div>
      
  </div><!--End of secondary-content-->

  <div id='recent-additions' class=''>
    <div class='header'>
      <h3 class=''>Recent Additions Noteworthy</h3>
      <a href='#'><i class='list icon'></i>Show All</a>
    </div>
    <iframe name="recent-additions-iframe" 
            id="recent-additions-iframe" 
            src="{$recent_additions_source}" 
            frameborder="0" 
            scrolling="no"
            marginheight="0" 
            marginwidth="0" 
            width="550px" 
            height="77px" 
            seamless>
    </iframe>
  </div><!--End of recent-additions-->
  </div><!--End of left-primary-segement-->
  <div id='isometric-grid' class="">
    <div id='sch-stats' class=''>
      <div class='stu-pop'>
        <div class='icon'><i class="fa fa-users"></i></div>
        <div class='content'>
          <div class='num'>1560</div>
          <div class='text'>Active Students</div>
        </div>
      </div>
      <div class='staff-pop'>
        <div class='icon'><i class="fa fa-user"></i></div>
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
      <div class='sch-status'>
        <div class='icon'><i class="fa fa-institution"></i></div>
        <div class='content'>
          <div class='status'>{$sch_status}</div>
          <div class='date'>{$sch_status_date}</div>
          <div class='text'>School Status</div>
        </div>
      </div>
    </div>
  </div><!--End of isometric-grid-->
  <div id='fluid-grid'>
    <ul>
      <li id='admissions' class=''>
        <a href='#'>
          <i class="big sign in icon"></i><br>
          <h2>Admissions</h2>
          <p>
            Understand Sekondi College&#39;s Mission and Vision and decide if it 
            is the right choice for you. Also learn about the CSSPS school selection system.
          </p>
        </a>
      </li>
      <li id='academics' class=''>
        <a href='#'>
          <i class="big book icon"></i>
          <h2>Academics</h2>
          <p>
            This section provides info on departments, and 
            programmes that are offered in the school. Others 
            like performance stats, academic calendar, etc are also provided. 
          </p>
        </a>
      </li>
      <li id='sports' class=''>
        <a href='#'>
          <i class="big dribbble icon"></i>
          <h2>Sports</h2>
          <p>
            General information on Local, Regional and 
            National sporting activities. Also find 
            highlights on Athletics, Soccer, Volley 
            and other sporting events. 
          </p>
        </a>
      </li>
      
      <!--div class='right square'><div></div></div>
      <div class='left square'><div></div></div-->
      
      <li id='history' class=''>
        <a href='?token={$about}#history'>
          <i class="fa fa-history"></i>
          <h2>History</h2>
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
          <h2>Counselling</h2>
          <p>
            This section provides invaluable counselling and 
            carrear guidance information for current and 
            prospective students of Sekondi College. 
          </p>
        </a>
      </li>
      <li id="pta" class="">
        <a href="#">
          <i class="big user icon"></i>
          <h2>PTA</h2>
          <p>
            This section provides info on Sekco PTA and its 
            activities over the years such as fundraising, housing 
            projects, meetings and other useful infomation. 
          </p>
        </a>
      </li>
    </ul>
  </div><!--End of fluid-grid-->
  <div id="line-devider" class="h-devider">
    <div class="cleared">
      <div class="rounded">
        <i class="ui heart icon"></i>
      </div>
    </div>
  </div>
  <div id="bottom-grid">
    <div id='left-floated-bottom-grid' class="youtube-channel stacked ui segment">
      <h3>~ YOU-TUBE ~</h3>
      <ul>
        <li>
          <a target='_blank' href='http://www.youtube.com/user/sekcoschool'>
            Listen to Podcasts
          </a>
        </li>
        <li><a href='#'>Watch Live Streams</a></li>
        <li><a href='#'>Video Archives</a></li>
      </ul>
    </div>
    <div id='left-floated-bottom-grid' class="academic-calendar stacked ui segment">
      <h3>~ CALENDAR ~</h3>
      <ul>
        <li><a href='#'>Current&nbsp;Events</a></li>
        <li><a href='#'>Pending&nbsp;Events</a></li>
        <li><a href='#'>Past&nbsp;Events</a></li>
      </ul>
    </div>
    <div id='left-floated-bottom-grid' class="document stacked ui segment">
      <h3>~ DOCUMENTS ~</h3>
      <ul><li><a href='#'>Promotional<br>&nbsp;Interview GES</a></li>
      <li><a href='#'>ICT&nbsp;Training</a></li>
      <li><a href='#'>Other&nbsp;Docs</a></li></ul>
    </div>
    <div id='left-floated-bottom-grid' class="publication stacked ui segment">
      <h3>~ PUBLICATIONS ~</h3>
      <ul><li><a href='#'>School&nbsp;Magazine</a></li>
      <li><a href='#'>Electronic&nbsp;Gazette</a></li>
      <li><a href='#'>Weblog</a></li></ul>
    </div>
    <div id="left-floated-bottom-grid" class="comment stacked ui segment">
      <h3>~ COMMENTS ~</h3>
      <ul>
        <li>
          <a href='#'>
            Got&nbsp;suggestions&nbsp;that 
            can&nbsp;improve&nbsp;us?&nbsp;Just 
            send&nbsp;us&nbsp;a&nbsp;Comment.
          </a>
        </li>
      </ul>
    </div>
  </div>
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
    <div class="ui inverted dimmer"
         ng-class="{literal}{true: 'active', false: 'disabled'}[loading]{/literal}">
      <div class="ui text loader">
        Your details are being processed. 
        <br /><br />Please wait!
      </div>
    </div>

    <div class="two fields">
    <div class="field">
      <label for="FullName">Full Name</label>
      <input id="FullName" placeholder="Enter Your Full Name" type="text" ng-model="user.fullname">
    </div>
    <div id="wrapper" class="field">
    <div class="two fields">
    <div class="field">
      <label for="Gender">Gender</label> 
      <div class="ui fluid selection dropdown">
        <div class="text"><span>Select</span></div>
        <i class="dropdown icon"></i>
        <input id="Gender" name="Gender" type="hidden"  ng-model="user.gender">
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
        <input id="Usertype" name="Usertype" type="hidden" ng-model="user.usertype">
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
        <input id="Email" placeholder="Enter a valid Address" type="text" ng-model="user.email">
      </div>
      <div class="field">
        <label for="MobileNumber">Mobile Number</label>
        <input id="MobileNumber" placeholder="Enter a valid Number" type="text" 
               ng-model="user.mobilenumber">
      </div>
    </div>

    <div class="two fields">
      <div class="field">
        <label for="Username">Username</label>
        <input id="Username" placeholder="Username" type="text" ng-model="user.username">
      </div>
      <div class="field">
        <label for="TrackingId">Tracking ID</label>
        <input id="TrackingId" placeholder="Enter a valid Student ID" type="text" 
               ng-model="user.trackingid">
      </div>
    </div>

    <div class="field">
      <label for="Password">Password</label>
      <input id="Password" placeholder="Six characters max" type="password" 
             ng-model="user.password">
    </div>

    <div class="field">
      <label for="PasswordConfirm">Password Confirm</label>
      <input id="PasswordConfirm" placeholder="Confirm" type="password" 
             ng-model="user.passwordconfirm">
    </div>
    <div class="inline field">
      <span class="ui checkbox">
        <input id="Terms" type="checkbox" ng-model="user.terms">
        <label>I agree to the Terms and Conditions.</label>
      </span>
      <span class="agree"> <i href="">Read</i></span>
    </div>
    <button class="ui blue button" ng-click="register()">Submit</button>
    </div>
  </div>
  </div>
  <div class="actions">
    <div class="orange ui button">Cancel</div>
  </div>
  </div>
  
  {include file='footer.inc.tpl'}

  <script type="text/javascript"> 
    $('.record-service-login.modal')
      .modal({literal}{detachable:false}{/literal})
      .modal('setting', 'closable', false)
      .modal('attach events', '.record-service', 'show')
      ;

    $('.record-service-registration.modal')
      .modal({literal}{detachable:false}{/literal})
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
        }, 
        {
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