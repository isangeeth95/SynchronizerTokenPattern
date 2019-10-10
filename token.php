<?php
	class Token {
		public static function generate($session_id){
			$_SESSION['token'] = md5($session_id);
			return $_SESSION['token'];
		}

		public static function check($token){
			if(isset($_SESSION['token']) && $token === $_SESSION['token']){
				return true;
			}
			else{
				return false;
			}
		}
	}
?>