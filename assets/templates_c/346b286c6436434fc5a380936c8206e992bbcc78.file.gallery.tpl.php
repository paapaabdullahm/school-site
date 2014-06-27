<?php /* Smarty version Smarty-3.1.18, created on 2014-06-19 09:36:39
         compiled from "templates/gallery.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58206442753a293074d3154-86444533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '346b286c6436434fc5a380936c8206e992bbcc78' => 
    array (
      0 => 'templates/gallery.tpl',
      1 => 1402429787,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58206442753a293074d3154-86444533',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pure_ui_css_file' => 0,
    'pure_side_menu_css_file' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53a29307514863_40722636',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53a29307514863_40722636')) {function content_53a29307514863_40722636($_smarty_tpl) {?><!doctype html>
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
</body>
</html>
<?php }} ?>
