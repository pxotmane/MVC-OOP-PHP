<?php
class load {
	function __construct($array_lib, $array_model) {
		$this->autoLoad_lib ( $array_lib );
		$this->autoLoad_model ( $array_model );
	}
	function autoLoad_lib($array_lib) {
		foreach ( $array_lib as $lib ) {
			$path = LIB_PATH . $lib . '.class.php';
			if (file_exists ( $path )) {
				require_once $path;
			}
		}
	}
	function autoLoad_model($array_model) {
		foreach ( $array_model as $model ) {
			$path = MODELS_PATH . $model . '.model.php';
			if (file_exists ( $path )) {
				require_once $path;
			}
		}
	}
}