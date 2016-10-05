<?php
class user {
	function register() {
		$tpl = new raintpl ();
		$tpl->assign ( 'base_url', HOST_NAME );
		$tpl->draw ( 'register' );
	}
	function doregister() {
		if (isset ( $_POST ['submit'] )) {
			$username = Validation::Security ( $_POST ['username'] );
			$password = md5 ( $_POST ['password'] );
			$email = Validation::mail ( $_POST ['email'] );
			if ($email != false) {
				if ($username != "" && $password != '' && $email != "") {
					$username_check = users::checkUsername ( $username );
					if ($username_check) {
						$email_check = users::checkEmail ( $email );
						if ($email_check) {
							$user_register = new users ();
							$user_register->username = $username;
							$user_register->password = $password;
							$user_register->email = $email;
							$user_register->register_date = time ();
							$user_register->ip = $_SERVER ['REMOTE_ADDR'];
							$user_register->status = 1;
							$user_register->active = md5 ($password.$username);
							$user_register->admin = 1;
							if ($user_register->save()) {
								header ( 'Location:' . HOST_NAME . '?view=user&f=register&message=done' );
							} else {
								header ( 'Location:' . HOST_NAME . '?view=user&f=register&message=error' );
							}
						} else {
							header ( 'Location:' . HOST_NAME . '?view=user&f=register&message=emailerror' );
						}
					} else {
						header ( 'Location:' . HOST_NAME . '?view=user&f=register&message=usernamerror' );
					}
				} else {
					header ( 'Location:' . HOST_NAME . '?view=user&f=register&message=fielderror' );
				}
			} else {
				header ( 'Location:' . HOST_NAME . '?view=user&f=register&message=mailerror' );
			}
		}
	}
}