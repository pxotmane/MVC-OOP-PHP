<?php
class index {
	function main() {
		$tpl = new raintpl ();
		$name = 'Otmane';
		$pass = '123456';
		$array = array(
				'Otmane',
				'Omar',
				'Saida',
				'Abdellah'
		);
		$tpl->assign('name', $name);
		$tpl->assign('pass', $pass);
		$tpl->assign('array', $array);
		$tpl->draw ( 'index' );
	}
	function user() {
		echo 'DAOU';
	}
}