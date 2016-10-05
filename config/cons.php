<?php

// directory selector
define ( 'DS', DIRECTORY_SEPARATOR );

// pathes
define ( 'APP_PATH', realpath ( dirname ( __DIR__ ) ) . DS );

// pathes for project folders
define ( 'IMAGES_PATH', APP_PATH . 'images' . DS );
define ( 'CSS_PATH', APP_PATH . 'css' . DS );
define ( 'JS_PATH', APP_PATH . 'js' . DS );
define ( 'TMP_PATH', APP_PATH . 'tmp' . DS );
define ( 'UPLOADS_PATH', APP_PATH . 'uploads' . DS );
define ( 'MODELS_PATH', APP_PATH . 'models' . DS );
define ( 'VIEWS_PATH', APP_PATH . 'views' . DS );
define ( 'CONTROLLERS_PATH', APP_PATH . 'controllers' . DS );
define ( 'CPANEL_PATH', APP_PATH . 'cpanel' . DS );
define ( 'LIB_PATH', APP_PATH . 'lib' . DS );
define ( 'CACHE_PATH', APP_PATH . 'cache' . DS );

// DB connection
define ( 'DB_HOST', 'localhost' );
define ( 'DB_USER', 'root' );
define ( 'DB_PASS', '' );
define ( 'DB_NAME', 'dbmvc' );

// hostname
define ( 'HOST_NAME', 'http://' . $_SERVER ['HTTP_HOST'] . '/mvc/' );

// directories for project folders
define ( 'IMAGES_DIR', HOST_NAME . 'images' . DS );
define ( 'CSS_DIR', HOST_NAME . 'css' . DS );
define ( 'JS_DIR', HOST_NAME . 'js' . DS );
define ( 'UPLOADS', HOST_NAME . 'uploads' . DS );



