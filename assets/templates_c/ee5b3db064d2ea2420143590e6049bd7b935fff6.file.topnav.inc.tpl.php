<?php /* Smarty version Smarty-3.1.18, created on 2014-06-10 21:15:59
         compiled from "templates/topnav.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1130145020539755e9351d84-73398086%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee5b3db064d2ea2420143590e6049bd7b935fff6' => 
    array (
      0 => 'templates/topnav.inc.tpl',
      1 => 1402427706,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1130145020539755e9351d84-73398086',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_539755e938b1e3_03666040',
  'variables' => 
  array (
    'page_title' => 0,
    'record_id' => 0,
    'home' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_539755e938b1e3_03666040')) {function content_539755e938b1e3_03666040($_smarty_tpl) {?><!doctype html>
<div id="topnav">
 <h2><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h2>
 <div class="simple ui dropdown item">
    Rating<i class="dropdown icon"></i>
    <div class="widget menu">
    	<div class="item">Rate Current Page:</div>
			<div record-id="<?php echo $_smarty_tpl->tpl_vars['record_id']->value;?>
" class="rate_widget <?php echo $_smarty_tpl->tpl_vars['record_id']->value;?>
">
					<div class="overlay"></div>
					<div class="star_1 ratings_stars"></div>
					<div class="star_2 ratings_stars"></div>
					<div class="star_3 ratings_stars"></div>
					<div class="star_4 ratings_stars"></div>
					<div class="star_5 ratings_stars"></div>
					<div class="item average">Ave. Rating: <span class="ave-vote">0</span></div>
					<div class="item total"><span class="total-votes">0</span> Votes<br />Recorded</div>
			</div>
    </div>
 </div>
 <print title="Print page"><i class="fa fa-print"></i></print>
 <a class="pure-home-heading" href="<?php echo $_smarty_tpl->tpl_vars['home']->value;?>
" title="Back to Home"><i class="fa fa-home"></i></a>
</div>
<?php }} ?>
