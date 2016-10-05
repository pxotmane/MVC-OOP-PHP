<?php
class template {
	public $temp_array = array (
			'header.tpl',
			'body.tpl',
			'footer.tpl' 
	);
	public function load_template() {
		foreach ( $this->temp_array as $tmp ) {
			$path = TMP_PATH . $tmp;
			if (file_exists ( $path )) {
				require_once $path;
			}
		}
	}
	public function load_view() {
		$view = isset ( $_GET ['view'] ) && $_GET ['view'] != '' ? $_GET ['view'] : 'index';
		$view_path = VIEWS_PATH . $view . '.view.php';
		if (file_exists ( $view_path )) {
			require_once $view_path;
		}
	}
	public function load_Controller() {
		$controller = isset ( $_GET ['view'] ) && $_GET ['view'] != '' ? $_GET ['view'] : 'index';
		$control_path = CONTROLLERS_PATH . $controller . '.controllers.php';
		$function = isset ( $_GET ['f'] ) && $_GET ['f'] != '' ? $_GET ['f'] : 'main';
		if (file_exists ( $control_path )) {
			require_once $control_path;
			$controller = new $controller ();
			if (method_exists ( $controller, $function )) {
				$controller->$function ();
			} else {
				header ( 'Location:' . HOST_NAME . '?view=error' );
			}
		} else {
			header ( 'Location:' . HOST_NAME . '?view=error' );
		}
	}
}

