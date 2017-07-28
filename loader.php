<?php

function loader($class){
	$class_file = DIR.DS.$class.'.php';
	if(file_exists($class_file)) require_once($class_file);
	else{
		$nameParts = preg_split ('/(?<=.)(?=\p{Lu}\P{Lu})|(?<=\P{Lu})(?=\p{Lu})/U', $class);
		$pfad = DIR . DS . join (DS, $nameParts) . '.php';
		echo $pfad;
		if (!file_exists ($pfad)) return;
		include_once $pfad;
		/*
		foreach(AUTOLOAD_CLASSES as $path) {
			$tryPath = $path.DS.$class.'.php';
			if(file_exists($tryPath)) require_once($tryPath);
		}
		*/
	}
}
spl_autoload_register('loader');
?>