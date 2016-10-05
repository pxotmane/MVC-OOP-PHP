<?php
if (extension_loaded('dpo')){
	$dbh = Database::getInstance();
}else{
	echo 'This server Not support the DPO CLASS please enable it and try again !!!';
}