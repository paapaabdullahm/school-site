<?php

	class Template {

		static private $instance;
		private function __construct() {}
		private function __clone() {}
		private function __wakeup() {}
	
		static public function instance()
		{
			if( !isset( self::$instance ) )
			{
				$smarty = new Smarty;
			
				$smarty->setTemplateDir(TPL_PATH.DS);
				$smarty->setCompileDir(COMPILE_PATH.DS);
				$smarty->setConfigDir(CONFIG_PATH.DS);
				$smarty->setCacheDir(CACHE_PATH.DS);

				//$smarty->caching = Smarty::CACHING_LIFETIME_CURRENT;
				$smarty->assign('app_name', 'School Site');
			
				self::$instance = $smarty;
			};
			return self::$instance;
		}
	}

	$template = Template::instance();

?>
