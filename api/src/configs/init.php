<?php 

require 'vendor/autoload.php';

function __autoload($cn)
{
	if(substr(strtolower($cn), 0, 3)=='mdl'){
		require_once ("api/models/$cn.php");
		return;
	}

	if(substr(strtolower($cn), 0, 3)=='ctl'){
		require_once ("api/controllers/$cn.php");
		return;
	}

	if(strtolower($cn)=='router'){
		require_once ("api/routes/router.php");
		return;
	}
}

spl_autoload_extensions('.php');
spl_autoload_register('__autoload');

?>