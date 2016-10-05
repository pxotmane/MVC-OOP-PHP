<?php
ob_start ();
require_once 'cons.php';
require_once 'load.php';
require_once 'autoload.php';
require_once 'autoloadraintpl.php';
require_once 'db_config.php';
$tmp = new template ();
$tmp->load_template ();

ob_flush ();