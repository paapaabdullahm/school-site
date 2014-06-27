<script src="{$jquery_file}"></script>
<script src="{$jquery_scroll_to_file}"></script>
<script src="{$jquery_local_scroll_file}"></script>
<script src="{$semantic_js_file}"></script>
<script src="{$angularjs_file}"></script>
<script src="{$pure_side_menu_js_file}"></script>
<script src="{$j_rating_js_file}"></script>
<script src="{$rating_js_file}"></script>

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

