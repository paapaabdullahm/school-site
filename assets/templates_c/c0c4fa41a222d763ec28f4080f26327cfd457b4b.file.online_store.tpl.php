<?php /* Smarty version Smarty-3.1.18, created on 2014-06-19 10:02:53
         compiled from "templates/online_store.tpl" */ ?>
<?php /*%%SmartyHeaderCode:127043808053935d4e380f07-61451512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0c4fa41a222d763ec28f4080f26327cfd457b4b' => 
    array (
      0 => 'templates/online_store.tpl',
      1 => 1403164954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127043808053935d4e380f07-61451512',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53935d4e3c0101_16353269',
  'variables' => 
  array (
    'pure_ui_css_file' => 0,
    'pure_side_menu_css_file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53935d4e3c0101_16353269')) {function content_53935d4e3c0101_16353269($_smarty_tpl) {?><!doctype html>
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
  <?php echo $_smarty_tpl->getSubTemplate ('footer.inc.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
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
<?php }} ?>
