<?php

// Library autoload
$array_Lib = array (
		'template',
		'database',
		'databasemodel',
		'raintpl',
		'template',
		'validation'
);

// Models autoload
$array_Model = array (
		'dir',
		'users' 
);

// Run autoload class
$load = new load ( $array_Lib, $array_Model );

?>
