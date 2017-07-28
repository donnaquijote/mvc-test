<?php

define('DIR',__DIR__);
define('DS',DIRECTORY_SEPARATOR);
define('CONTROLLERS',DIR . DS . 'controllers');
define('MODELS',DIR . DS . 'models');
define('VIEWS',DIR . DS . 'views');
define('LIB',DIR . DS . 'lib');


define('AUTOLOAD_CLASSES',array('CONTROLLERS','MODELS','VIEWS','LIB'));

?>