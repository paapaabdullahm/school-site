<?php

require_once ('init.php');
require_once (MOD_PATH.DS.$node.DS."controller.php");
$template->display($node.'.tpl');
