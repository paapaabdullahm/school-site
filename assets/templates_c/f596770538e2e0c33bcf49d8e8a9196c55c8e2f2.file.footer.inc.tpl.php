<?php /* Smarty version Smarty-3.1.18, created on 2014-07-07 11:00:58
         compiled from "templates/footer.inc.tpl" */ ?>
<?php /*%%SmartyHeaderCode:882128871538f5ba86e3112-46218533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f596770538e2e0c33bcf49d8e8a9196c55c8e2f2' => 
    array (
      0 => 'templates/footer.inc.tpl',
      1 => 1404291634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '882128871538f5ba86e3112-46218533',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_538f5ba86f70b5_89421777',
  'variables' => 
  array (
    'jquery_file' => 0,
    'jquery_scroll_to_file' => 0,
    'jquery_local_scroll_file' => 0,
    'semantic_js_file' => 0,
    'angularjs_file' => 0,
    'pure_side_menu_js_file' => 0,
    'j_rating_js_file' => 0,
    'rating_js_file' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_538f5ba86f70b5_89421777')) {function content_538f5ba86f70b5_89421777($_smarty_tpl) {?><script src="<?php echo $_smarty_tpl->tpl_vars['jquery_file']->value;?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['jquery_scroll_to_file']->value;?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['jquery_local_scroll_file']->value;?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['semantic_js_file']->value;?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['angularjs_file']->value;?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['pure_side_menu_js_file']->value;?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['j_rating_js_file']->value;?>
"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['rating_js_file']->value;?>
"></script>

<script type="text/javascript">
		jQuery(function( $ ){
			$.localScroll.defaults.axis = 'y';
			$.localScroll({
				target: '#body',
				queue:true,
				duration:100,
				hash:true,
				onBefore:function( e, anchor, $target ){},
				onAfter:function( anchor, settings ){}
			});
		})
		;
</script>
<script type="text/javascript">
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

<div id="footer">
	<span class="copyright">&copy; 2014 sekco.edu.gh</span> |
	<span class="about"><a href="">About</a></span> |
	<span class="contact"><a href="">Contact</a></span>
</div>

<?php }} ?>
