<?php /* Smarty version Smarty-3.1.18, created on 2014-06-10 21:46:40
         compiled from "templates/frequently_asked.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33936178253935c029f2d40-01373327%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49a498e1e34c648e536bdef0c5da6228f3e5131c' => 
    array (
      0 => 'templates/frequently_asked.tpl',
      1 => 1402429597,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33936178253935c029f2d40-01373327',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_53935c02a21f61_45667581',
  'variables' => 
  array (
    'pure_ui_css_file' => 0,
    'pure_side_menu_css_file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53935c02a21f61_45667581')) {function content_53935c02a21f61_45667581($_smarty_tpl) {?><!doctype html>
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
